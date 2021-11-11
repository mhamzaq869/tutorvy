<template>
  <div class="conversation" v-if="contact != null">
    <nav class="chatHead navbars navbar-light bg-white m-0 p-0 pl-3 pr-3 row">
      <div class="col-md-6 col-6">
        <a class="navbar-brand pb-0" href="#">
          <div class="container-fluid m-0 p-0 img-chats">
            <img
              src="/assets/images/ico/Square-white.jpg"
              class="leftImg ml-1"
            />

            <div class="img-chat">
              <div class="row">
                <div class="col-12">
                  <p class="name-client">
                    {{ contact.first_name }} {{ contact.last_name }}
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p
                    class="massage-client"
                    style="position: relative; top: -5px"
                  >
                    {{
                      onlineUsers.find((cont) => cont.id == contact.id)
                        ? "Online"
                        : "Offline"
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-6 pt-3 text-right">
        <input type="hidden" class="col-sm-9 form-control" />
        <a href="#">
          <i class="fa fa-search headIcon"></i>
        </a>
        <a href="#">
          <i class="fa fa-ellipsis-v headIcon"></i>
        </a>
      </div>
    </nav>
    <MessagesFeed :contact="contact" :messages="messages" />
    <MessageComposer
      @send="sendMessage"
      @file="sendFile"
      :contact="contact"
    />
  </div>
</template>

<script>
import MessagesFeed from "./MessagesFeed";
import MessageComposer from "./MessageComposer";
export default {
  props: {
    contact: {
      type: Object,
      default: null,
    },
    messages: {
      type: Array,
      default: [],
    },
  },

  data() {
    return {
      onlineUsers: [],
    };
  },
  methods: {
    sendMessage(text) {
      if (!this.contact) {
        return;
      }
      axios
        .post("/conversation/send", {
          contact_id: this.contact.id,
          text: text,
        })
        .then((response) => {
          this.$emit("new", response.data);
        });
    },
    sendFile(data,config) {

        axios.post(`/conversation/send`,data, config)
        .then((response) => {
          this.$emit("new", response.data);
        });
    },

  },
  components: { MessagesFeed, MessageComposer },
  mounted() {
    Echo.join(`chat`)
      .here((users) => {
        this.onlineUsers = users;
      })
      .leaving((user) => {
        this.onlineFriends.splice(this.onlineFriends.indexOf(user), 1);
        // console.log("leaved", user.first_name);
      });
  },
};
</script>
