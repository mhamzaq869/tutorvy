<template>
  <div class="feed" ref="feed">
    <ul v-if="contact">
      <li
        v-for="message in messages"
        :class="`message${
          message.sender_id == contact.id ? ' sent' : ' received'
        }`"
        :key="message.id"
      >
        <div
          class="text"
          v-if="message.content != null && message.content != ''"
        >
          <small
            class="d-block font-weight-bold text-primary"
            v-if="message.sender_id == contact.id"
            >{{ contact.first_name }} {{ contact.last_name }}:</small
          >
          {{ message.content }}
          <small class="ml-5" style="font-size:10px; color:#a19f9f">{{
            getTimeInterval(new Date(message.created_at))
          }}</small>
        </div>

        <div
          class="text"
          v-if="message.attachments != null && message.attachments != ''"
        >
        <small class="ml-5" style="font-size:10px; color:#a19f9f">{{
            getTimeInterval(new Date(message.created_at))
          }}</small>
          <img :src="'/storage/' + message.attachments" class="w-100" />
        </div>
      </li>
    </ul>
  </div>

  <!-- <div class="row chatArea p-5 bg-white"  ref="feed">
      <div class="col-md-12" v-if="contact">

        <div v-for="message in messages" :class="`message${message.sender_id == contact.id ? ' sender' : ' reciever'}`" :key="message.id">
          <small v-if="contact.id != contact.id">{{contact.first_name}} :</small>
          <small v-else>You:</small>
          <p class="senderText mb-0">{{ message.content }}</p>
          <small class="recDull"></small>
          <a href="#" class="textMenu2"><i class="fa fa-ellipsis-h"></i></a>
        </div>
      </div>
    </div> -->
</template>

<script>
export default {
  props: {
    contact: {
      type: Object,
    },
    messages: {
      type: Array,
      required: true,
    },
  },
  methods: {
    scrollToBottom() {
      setTimeout(() => {
        this.$refs.feed.scrollTop =
          this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
      }, 50);
    },

    getTimeInterval(date) {
      let seconds = Math.floor((Date.now() - date) / 1000);
      let unit = "second";
      let direction = "ago";
      if (seconds < 0) {
        seconds = -seconds;
        direction = "from now";
      }
      let value = seconds;
      if (seconds >= 31536000) {
        value = Math.floor(seconds / 31536000);
        unit = "year";
      } else if (seconds >= 86400) {
        value = Math.floor(seconds / 86400);
        unit = "day";
      } else if (seconds >= 3600) {
        value = Math.floor(seconds / 3600);
        unit = "hour";
      } else if (seconds >= 60) {
        value = Math.floor(seconds / 60);
        unit = "minute";
      }
      if (value != 1) unit = unit + "s";
      return value + " " + unit + " " + direction;
    },
  },
  watch: {
    contact(contact) {
      this.scrollToBottom();
    },
    messages(messages) {
      this.scrollToBottom();
    },
  },
};
</script>

<style lang="scss" scoped>
.feed {
  background: #f0f0f0;
  /*height: 100% !important;*/
  height: 470px !important;
  overflow: auto;
  ul {
    list-style-type: none;
    padding: 5px;
    li {
      &.message {
        margin: 10px 0;
        width: 100%;
        .text {
          max-width: 200px;
          border-radius: 5px;
          padding: 12px;
          display: inline-block;
        }
        &.received {
          text-align: right;
          .text {
            background: #ffffff;
          }
        }
        &.sent {
          text-align: left;
          .text {
            background: #ffffff;
          }
        }
      }
    }
  }
}
</style>
