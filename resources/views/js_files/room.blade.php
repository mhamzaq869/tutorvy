<script>


const usersarr = {};

const socketToRoom = {};
let roomID = '12345';
let myId = `{{Auth::user()->id}}`;

var myHostname = window.location.hostname;

var myUsername = null;
var targetUsername = null;      // To store username of other peer
var targetUserid = null;      // To store userid of other peer
var myPeerConnection = null;    // RTCPeerConnection
var transceiver = null;         // RTCRtpTransceiver
var webcamStream = null;        // MediaStream from webcam

Echo.join(`room.12345`).here( activeUsers => {
    console.log(activeUsers)
    
    this.activeUsers = activeUsers
    this.activeUsers = this.activeUsers.filter(u => u.id != myId);
    console.log(this.activeUsers)


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
  this.activeUsers = this.activeUsers.filter(u => u.id != myId);

  console.log(this.activeUsers)

  console.log("Starting to prepare an invitation");
  if (myPeerConnection) {
    alert("You can't start a call because you already have one open!");
  } else {

    // Call createPeerConnection() to create the RTCPeerConnection.
    // When this returns, myPeerConnection is our RTCPeerConnection
    // and webcamStream is a stream coming from the camera. They are
    // not linked together in any way yet.

    console.log("Setting up connection to join room ");
    createPeerConnection();

    // Get access to the webcam stream and attach it to the
    // "preview" box (id "local_video").

    try {
      webcamStream = await navigator.mediaDevices.getUserMedia(mediaConstraints);
      document.getElementById("local_video").srcObject = webcamStream;
    } catch(err) {
      handleGetUserMediaError(err);
      return;
    }

    // Add the tracks from the stream to the RTCPeerConnection

    try {
      webcamStream.getTracks().forEach(
        transceiver = track => myPeerConnection.addTransceiver(track, {streams: [webcamStream]})
      );
    } catch(err) {
      handleGetUserMediaError(err);
    }
  }


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

