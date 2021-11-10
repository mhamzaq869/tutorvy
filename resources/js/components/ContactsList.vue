<template>
  <span>
    <div
      v-for="contact in sortedContacts"
      :key="contact.id"
      @click="selectContact(contact)"
      :class="{ chatActive: contact.id == selected }"
    >
      <div
        class="container-fluid m-0 p-0 img-chats"
        v-if="user.id != contact.id"
      >
        <span v-if="contact.picture != null">
          <img :src="'../'+contact.picture" class="leftImg ml-1" />
        </span>
        <span v-else>
          <img
            :src="'../assets/images/ico/Square-white.jpg'"
            class="leftImg ml-1"
          />
        </span>
        <span
          :class="
            onlineUsers.find((cont) => cont.id == contact.id)
              ? 'activeDot'
              : 'offline'
          "
          id="activeDot_"
        ></span>
        <div class="img-chat w-100">
          <div class="row">
            <div class="col-8">
              <p class="name-client">
                {{ contact.first_name }} {{ contact.last_name }}
              </p>
            </div>
            <div class="col-md-4 p-0">
              <p class="time-chat">{{ contact.lastmessagetime }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <p
                class="massage-client"
                id="recent_msg_"
                v-if="
                  contact &&
                  contact.lastmessage != null &&
                  contact.lastmessage != ''
                "
              >
                {{ contact.lastmessage.substring(0, 17) + "..." }}
              </p>
              <p
                class="massage-client"
                id="recent_msg_"
                v-else-if="
                  contact &&
                  contact.lastmessageattach != null &&
                  contact.lastmessageattach != ''
                "
              >
                <i class="fa fa-image text-secondary"></i>
              </p>
            </div>
            <div class="col-md-3">
              <span
                class="dot text-center"
                id="unseen_msg_cnt_"
                v-if="contact.unread > 0"
              >
                <span>{{ contact.unread }}</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </span>
</template>

<script>
export default {
  props: {
    contacts: {
      type: Array,
      default: [],
    },
    user: {
      type: Object,
      default: [],
    },
    messages: {
      type: Array,
      default: [],
    },
    search:{
        type: String
    }
  },
  data() {
    return {
      selected: this.contacts.length ? this.contacts[0] : null,
      onlineUsers: [],
    };
  },

  methods: {
    selectContact(contact) {
      this.selected = contact;
      this.$emit("selected", contact);
    },
  },

  computed: {
    sortedContacts() {

    return this.contacts.filter((item) =>
        item.lastmessage.match(this.search)
      );

    },
  },

  mounted() {
    Echo.join(`chat`)
      .here((users) => {
        this.onlineUsers = users;
      })
      .leaving((user) => {
        this.onlineUsers.splice(this.onlineUsers.indexOf(user), 1);
      });
  },
};
</script>

