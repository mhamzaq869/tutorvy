<template>
  <span>
    <div
      v-for="contact in sortedContacts"
      :key="contact.id"
      @click="selectContact(contact)"
       :class="{ chatActive: contact.id == selected }"
    >
      <div
        class="container-fluid m-0 p-0 img-chats "
        v-if="user.id != contact.id"
      >
        <span v-if="contact.profile_image != null">
            <img :src="contact.profile_image" class="leftImg ml-1" />
        </span>
        <span v-else>
            <img :src="'../assets/images/ico/Square-white.jpg'" class="leftImg ml-1" >
        </span>
        <span :class="(contact.isOnline == 1 ? 'activeDot': 'offline')" id="activeDot_"></span>
        <div class="img-chat w-100">
          <div class="row">
            <div class="col-9">
              <p class="name-client">
                {{ contact.first_name }} {{ contact.last_name }}
              </p>
            </div>
            <div class="col-md-3">
              <p class="time-chat">11:25</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <p class="massage-client" id="recent_msg_">
                It is a long distae...
              </p>
            </div>
            <div class="col-md-3">
              <span class="dot text-center" id="unseen_msg_cnt_" v-if="contact.unread > 0">
                  <span>{{contact.unread}}</span>
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
  },
  data() {
    return {
      selected: this.contacts.length ? this.contacts[0] : null,
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
      return _.sortBy(this.contacts, [
        (contact) => {
          if (contact == this.selected) {
            return Infinity;
          }
          return contact.unread;
        },
      ]).reverse();
    },


    filteredContacts() {
      return this.contacts.filter(contact => {
        return contact.first_name.toLowerCase().includes(this.search.toLowerCase())
      })
    }
  },
};
</script>

