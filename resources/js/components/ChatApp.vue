<template>
  <div class="row">
    <div class="col-md-3" style="backgroundcolor: #f2f3f4">
      <div class="box-main pt-3 pb-3">
        <div class="input-box">
          <input type="search" placeholder="Search messeges" v-model="search" />
          <i class="fa fa-search search-box-icon"></i>
        </div>
        <div class="line-box"></div>
        <div id="chatList">
          <ContactsList
            :contacts="contacts"
            :user="this.user"
            :messages="messages"
            :search="search"
            @selected="startConversationWith"
          />
        </div>
      </div>
    </div>

    <div class="col-md-9 chatSet">
      <div class="line-box2"></div>
      <Conversation
        :contact="selectedContact"
        :messages="messages"
        @new="saveNewMessage"
      />
    </div>
  </div>
</template>

<script>
import Conversation from "./Conversation";
import ContactsList from "./ContactsList";

export default {
  props: {
    user: {
      type: Object,
      required: true,
    },
    isOnline: {
      type: Boolean,
    },
  },
  data() {
    return {
      selectedContact: null,
      messages: [],
      contacts: [],
      search: "",
    };
  },
  mounted() {
    Echo.private(`messages.${this.user.id}`)
        .listen("ChatMessage", (e) => {
            this.hanleIncoming(e.message);
    });

    axios.get("/contacts").then((response) => {
      this.contacts = response.data;
    });
  },
  methods: {
    startConversationWith(contact) {
      this.updateUnreadCount(contact, true);
      axios.get(`/conversation/${contact.id}`).then((response) => {
        this.messages = response.data;
        this.selectedContact = contact;
      });
    },
    saveNewMessage(message) {
      this.messages.push(message);
    },
    hanleIncoming(message) {
      if (
        this.selectedContact &&
        message.sender_id == this.selectedContact.id
      ) {
        this.saveNewMessage(message);
        return;
      }

      this.updateUnreadCount(message.from_contact, false);
    },
    updateUnreadCount(contact, reset) {
      this.contacts = this.contacts.map((single) => {
        if (single.id !== contact.id) {
          return single;
        }
        if (reset) single.unread = 0;
        else single.unread += 1;
        return single;
      });
    },

  },

  components: { Conversation, ContactsList },


};
</script>

