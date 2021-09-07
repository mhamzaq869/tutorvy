<script>


const usersarr = {};

const socketToRoom = {};
let roomID = '12345';

Echo.join(`room.12345`).here( activeUsers => {
    console.log(activeUsers)
    this.activeUsers = activeUsers

}).joining(user => {
  console.log('joining'+user.name)

  if (usersarr[roomID]) {
    const length = usersarr[roomID].length;
    if (length === 4) {
        // socket.emit("room full");
        return;
    }
    usersarr[roomID].push(user.id);
  } else {
    usersarr[roomID] = [user.id];
  }
  
  this.activeUsers.push(user)
  console.log(this.activeUsers)

}).leaving(user => {
  console.log('leaving'+user)
  this.activeUsers = this.activeUsers.filter(u => u.id != user.id);
  console.log(this.activeUsers)
}).listen('JoinRoom', (event) => { 
  // console.log(event)

  var message = JSON.parse(event.message)
  console.log(message);

  switch(message.type) {
    case "id":
      clientID = msg.id;
      setUsername();
      break;

    case "username":
      text = "<b>User <em>" + message.name + "</em> signed in at " + timeStr + "</b><br>";
      break;

    case "message":
      text = "(" + timeStr + ") <b>" + message.name + "</b>: " + message.text + "<br>";
      break;

    case "rejectusername":
      myUsername = msg.name;
      text = "<b>Your username has been set to <em>" + myUsername +
        "</em> because the name you chose is in use.</b><br>";
      break;

    case "userlist":      // Received an updated user list
      handleUserlistMsg(message);
      break;

    // Signaling messages: these messages are used to trade WebRTC
    // signaling information during negotiations leading up to a video
    // call.

    case "video-offer":  // Invitation and offer to chat
      handleVideoOfferMsg(message);
      break;

    case "video-answer":  // Callee has answered our offer
      handleVideoAnswerMsg(message);
      break;

    case "new-ice-candidate": // A new ICE candidate has been received
      handleNewICECandidateMsg(message);
      break;

    case "hang-up": // The other peer has hung up the call
      handleHangUpMsg(message);
      break;

    // Unknown message; output to console for debugging.

    default:
      log_error("Unknown message received:");
      log_error(message);
  }
 
}).listenForWhisper('typing', user => {

})
</script>

