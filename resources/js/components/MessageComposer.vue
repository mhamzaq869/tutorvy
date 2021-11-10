<template>
  <div class="row">
    <div class="col-md-12 col-8" id="chatForm">
      <a class="sendLeft" type="button" style="top: 13px">
        <file-upload
          ref="upload"
          post-action="/conversation/send"
          v-model="files"
          @input-file="$refs.upload.active = true"
          @input="inputFile"
          :headers="{ 'X-CSRF-TOKEN': token }"
          :data="{ contact_id: this.contact.id }"
        >
          <i class="fa fa-paperclip ml-1"></i>
        </file-upload>
      </a>

      <emoji-picker @emoji="append" :search="search">
        <div
          class="emoji-invoker"
          slot="emoji-invoker"
          slot-scope="{ events: { click: clickEvent } }"
          @click.stop="clickEvent"
        >
          <svg
            height="24"
            viewBox="0 0 24 24"
            width="24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"
            />
          </svg>
        </div>
        <div slot="emoji-picker" slot-scope="{ emojis, insert, display }">
          <div
            class="emoji-picker"
            :style="{ top: display.y + 'px', left: display.x + 'px' }"
          >
            <div class="emoji-picker__search">
              <input type="text" v-model="search" v-focus />
            </div>
            <div>
              <div v-for="(emojiGroup, category) in emojis" :key="category">
                <h5>{{ category }}</h5>
                <div class="emojis">
                  <span
                    v-for="(emoji, emojiName) in emojiGroup"
                    :key="emojiName"
                    @click="insert(emoji)"
                    :title="emojiName"
                    >{{ emoji }}</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </emoji-picker>

      <input
        type="text"
        class="regular-input w-100"
        style="padding-left: 60px"
        v-model="message"
        @keydown.enter="send"
        @keydown="sendtypingEvent"
        placeholder="Message..."
      />
      <span v-if="typingUser != null && typingUser != 0">{{ typingUser }}</span>

      <a class="sendRight" type="button" @click="send">
        <i class="fa fa-paper-plane f-19"></i>
      </a>
    </div>
  </div>
</template>

<script>
import { EmojiPicker } from "vue-emoji-picker";

export default {
  props: {
    contact: {
      type: Object,
      default: [],
    },
  },
  data() {
    return {
      message: "",
      search: "",
      files: [],
      typingUser: [],
      typingClock: null,
      token: document.head.querySelector('meta[name="csrf-token"]').content,
    };
  },

  mounted() {
    Echo.join(`chat`).listenForWhisper("typing", (e) => {
      if (e) {
        this.typingUser = e.first_name + " " + e.last_name + " is typing...";
        if (this.typingClock) clearTimeout();
        this.typingClock = setTimeout(() => {
          this.typingUser = [];
        }, 2000);
      }
    });
  },
  methods: {
    send(e) {
      e.preventDefault();

      if (this.message == "") {
        return;
      }
      this.$emit("send", this.message);
      this.message = "";
    },
    append(emoji) {
      this.message += emoji;
    },
    inputFile(e) {
        axios.get(`/conversation/${this.contact.id}`).then((response) => {
            let index = (response.data.length) - 1
            // this.$emit('sendFile', response.data[index])
        });
    },
    sendtypingEvent() {
      Echo.join(`chat`).whisper("typing", this.contact);
    },
  },

  watch: {
    files: {
      deep: true,
      handler() {
        let success = this.files[0].success;
        if (success) {
          this.inputFile();
        }
      },
    },

    "$refs.upload"(val) {
      console.log(val);
    },
  },

  directives: {
    focus: {
      inserted(el) {
        el.focus();
      },
    },
  },

  components: { EmojiPicker },
};
</script>


<style scoped>
.wrapper {
  position: relative;
  display: inline-block;
}

.regular-input {
  padding: 0.5rem 1rem;
  border-radius: 3px;
  border: 1px solid #ccc;
  width: 100%;
  outline: none;
}

.regular-input:focus {
  box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

.emoji-invoker {
  position: absolute;
  top: 0.5rem;
  left: 20px;
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.2s;
}
.emoji-invoker:hover {
  transform: scale(1.1);
}
.emoji-invoker > svg {
  fill: #626466;
}

.emoji-picker {
  position: absolute;
  z-index: 1;
  font-family: Montserrat;
  border: 1px solid #ccc;
  width: 15rem;
  height: 20rem;
  overflow: scroll;
  padding: 1rem;
  top: -320px !important;
  left: 14px !important;
  box-sizing: border-box;
  border-radius: 0.5rem;
  background: #fff;
  box-shadow: 1px 1px 8px #c7dbe6;
}
.emoji-picker__search {
  display: flex;
}
.emoji-picker__search > input {
  flex: 1;
  border-radius: 10rem;
  border: 1px solid #ccc;
  padding: 0.5rem 1rem;
  outline: none;
}
.emoji-picker h5 {
  margin-bottom: 0;
  color: #b1b1b1;
  text-transform: uppercase;
  font-size: 0.8rem;
  cursor: default;
}
.emoji-picker .emojis {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.emoji-picker .emojis:after {
  content: "";
  flex: auto;
}
.emoji-picker .emojis span {
  padding: 0.2rem;
  cursor: pointer;
  border-radius: 5px;
}
.emoji-picker .emojis span:hover {
  background: #ececec;
  cursor: pointer;
}
</style>

