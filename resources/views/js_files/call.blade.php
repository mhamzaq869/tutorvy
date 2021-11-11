<script>

var mediaConstraints = {
  audio: true,            // We want an audio track
  video: {
    aspectRatio: {
      ideal: 1.333333     // 3:2 aspect is preferred
    }
  }
};
var myHostname = window.location.hostname;
var myUsername = null;
var targetUsername = null;      // To store username of other peer
var targetUserid = null;      // To store userid of other peer
var myPeerConnection = null;    // RTCPeerConnection
var transceiver = null;         // RTCRtpTransceiver
var webcamStream = null;        // MediaStream from webcam
const usersarr = {};

const socketToRoom = {};
let roomID = '12345';
// window.Echo.join('call').here(activeUsers => {
//   console.log(activeUsers)
//   this.activeUsers = activeUsers
// }).joining(user => {
//   console.log('joining'+user.first_name)
//   this.activeUsers.push(user)
// }).leaving(user => {
//   console.log('leaving'+user)
//   this.activeUsers = this.activeUsers.filter(u => u.id != user.id);
// })

// window.Echo.join('room.12345').here(activeUsers => {
//   console.log(activeUsers)
//   this.activeUsers = activeUsers
// }).joining(user => {
//   console.log('joining'+user.first_name)
//   this.activeUsers.push(user)
// }).leaving(user => {
//   console.log('leaving'+user)
//   this.activeUsers = this.activeUsers.filter(u => u.id != user.id);
// })


Echo.join(`App.User.{{Auth::user()->id}}`).here( users => {
      console.log(users)
}).listen('CallSignal', (event) => { 
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

async function invite(id,name) {
  
  console.log("Starting to prepare an invitation");
  if (myPeerConnection) {
    alert("You can't start a call because you already have one open!");
  } else {
    var clickedUsername = name;

    // Don't allow users to call themselves, because weird.

    if (clickedUsername === myUsername) {
      alert("I'm afraid I can't let you talk to yourself. That would be weird.");
      return;
    }

    // Record the username being called for future reference

    targetUsername = clickedUsername;
    targetUserid = id;
    console.log("Inviting user " + targetUsername);

    // Call createPeerConnection() to create the RTCPeerConnection.
    // When this returns, myPeerConnection is our RTCPeerConnection
    // and webcamStream is a stream coming from the camera. They are
    // not linked together in any way yet.

    console.log("Setting up connection to invite user: " + targetUsername);
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
}    


function handleGetUserMediaError(e) {
  switch(e.name) {
    case "NotFoundError":
      alert("Unable to open your call because no camera and/or microphone" +
            "were found.");
      break;
    case "SecurityError":
    case "PermissionDeniedError":
      // Do nothing; this is the same as the user canceling the call.
      break;
    default:
      alert("Error opening your camera and/or microphone: " + e.message);
      break;
  }

  // closeVideoCall();
}



function sendToServer(msg) {
  var msgJSON = JSON.stringify(msg);
  // console.log(msgJSON);

  $.ajax({
    url: "{{route('tutor.sendsignal')}}",
    type:"POST",
    data:{
      msg:msgJSON
    },
      success:function(response){
        return true;
    },
  });
}

async function handleVideoAnswerMsg(msg) {
  console.log("*** Call recipient has accepted our call");

  // Configure the remote description, which is the SDP payload
  // in our "video-answer" message.

  var desc = new RTCSessionDescription(msg.sdp);
  await myPeerConnection.setRemoteDescription(desc).catch(reportError);
}

async function handleNewICECandidateMsg(msg) {
  var candidate = new RTCIceCandidate(msg.candidate);

  console.log("*** Adding received ICE candidate: " + JSON.stringify(candidate));
  try {
    await myPeerConnection.addIceCandidate(candidate)
  } catch(err) {
    reportError(err);
  }
}

function handleHangUpMsg(msg) {
  console.log("*** Received hang up notification from other peer");

  closeVideoCall();
}

async function createPeerConnection() {
  console.log("Setting up a connection...");

  // Create an RTCPeerConnection which knows to use our chosen
  // STUN server.

  myPeerConnection = new RTCPeerConnection({
    iceServers: [     // Information about ICE servers - Use your own!
      {
        urls: "turn:" + myHostname,  // A TURN server
        username: "webrtc",
        credential: "turnserver"
      }
    ]
  });
  // Set up event handlers for the ICE negotiation process.

  myPeerConnection.onicecandidate = handleICECandidateEvent;
  myPeerConnection.oniceconnectionstatechange = handleICEConnectionStateChangeEvent;
  myPeerConnection.onicegatheringstatechange = handleICEGatheringStateChangeEvent;
  myPeerConnection.onsignalingstatechange = handleSignalingStateChangeEvent;
  myPeerConnection.onnegotiationneeded = handleNegotiationNeededEvent;
  myPeerConnection.ontrack = handleTrackEvent;
}

function handleVideoAnswerMsg(msg) {
  // log("*** Call recipient has accepted our call");

  // Configure the remote description, which is the SDP payload
  // in our "video-answer" message.

  var desc = new RTCSessionDescription(msg.sdp);
  myPeerConnection.setRemoteDescription(desc).catch(reportError);

}

function reportError(e){

console.log(e)

}

async function handleVideoOfferMsg(msg) {
  var localStream = null;

  targetUsername = msg.name;
  createPeerConnection();

  var desc = new RTCSessionDescription(msg.sdp);

  myPeerConnection.setRemoteDescription(desc).then(function () {
    return navigator.mediaDevices.getUserMedia(mediaConstraints);
  })
  .then(function(stream) {
    localStream = stream;
    document.getElementById("local_video").srcObject = localStream;

    localStream.getTracks().forEach(track => myPeerConnection.addTrack(track, localStream));
  })
  .then(function() {
    return myPeerConnection.createAnswer();
  })
  .then(function(answer) {
    return myPeerConnection.setLocalDescription(answer);
  })
  .then(function() {
      var msg = {
      name: 'David Calle',
      target: targetUsername,
      type: "video-answer",
      recipient_id:2,
      sdp: myPeerConnection.localDescription
    };

  sendToServer(msg);
  })
  .catch(handleGetUserMediaError);
}

// async function handleVideoOfferMsg(msg) {
//   targetUsername = msg.name;

//   // If we're not already connected, create an RTCPeerConnection
//   // to be linked to the caller.

//   console.log("Received video chat offer from " + targetUsername);
//   if (!myPeerConnection) {
//     createPeerConnection();
//   }

//   // We need to set the remote description to the received SDP offer
//   // so that our local WebRTC layer knows how to talk to the caller.

//   var desc = new RTCSessionDescription(msg.sdp);

//   // If the connection isn't stable yet, wait for it...
//   console.log(myPeerConnection.signalingState)
//   if (myPeerConnection.signalingState != "stable") {
//     console.log("  - But the signaling state isn't stable, so triggering rollback");

//     // Set the local and remove descriptions for rollback; don't proceed
//     // until both return.
//     await Promise.all([
//       myPeerConnection.setLocalDescription({type: "rollback"}),
//       myPeerConnection.setRemoteDescription(desc)
//     ]);
//     return;
//   } else {
//     console.log ("  - Setting remote description");
//     await myPeerConnection.setRemoteDescription(desc);
//   }

//   // Get the webcam stream if we don't already have it

//   if (!webcamStream) {
//     try {
//       webcamStream = await navigator.mediaDevices.getUserMedia(mediaConstraints);
//     } catch(err) {
//       handleGetUserMediaError(err);
//       return;
//     }

//     document.getElementById("local_video").srcObject = webcamStream;

//     // Add the camera stream to the RTCPeerConnection

//     try {
//       webcamStream.getTracks().forEach(
//         transceiver = track => myPeerConnection.addTransceiver(track, {streams: [webcamStream]})
//       );
//     } catch(err) {
//       handleGetUserMediaError(err);
//     }
//   }

//   console.log("---> Creating and sending answer to caller");
//   console.log(myPeerConnection.signalingState)
//   await myPeerConnection.setLocalDescription(await myPeerConnection.createAnswer());

//   var msg = {
//       name: 'David Calle',
//       target: targetUsername,
//       type: "video-answer",
//       recipient_id:2,
//       sdp: myPeerConnection.localDescription
//     };

//   sendToServer(msg);
// }

function hangUpCall() {
  closeVideoCall();

  var msg = {
      name: 'David Calle',
      target: targetUsername,
      type: "hang-up",
      recipient_id:targetUserid,
      sdp: myPeerConnection.localDescription
    };

  sendToServer(msg);
}

function closeVideoCall() {
  var localVideo = document.getElementById("local_video");

  console.log("Closing the call");

  // Close the RTCPeerConnection

  if (myPeerConnection) {
    console.log("--> Closing the peer connection");

    // Disconnect all our event listeners; we don't want stray events
    // to interfere with the hangup while it's ongoing.

    myPeerConnection.ontrack = null;
    myPeerConnection.onnicecandidate = null;
    myPeerConnection.oniceconnectionstatechange = null;
    myPeerConnection.onsignalingstatechange = null;
    myPeerConnection.onicegatheringstatechange = null;
    myPeerConnection.onnotificationneeded = null;

    // Stop all transceivers on the connection

    myPeerConnection.getTransceivers().forEach(transceiver => {
      transceiver.stop();
    });

    // Stop the webcam preview as well by pausing the <video>
    // element, then stopping each of the getUserMedia() tracks
    // on it.

    if (localVideo.srcObject) {
      localVideo.pause();
      localVideo.srcObject.getTracks().forEach(track => {
        track.stop();
      });
    }

    // Close the peer connection

    myPeerConnection.close();
    myPeerConnection = null;
    webcamStream = null;
  }

  // Disable the hangup button

  document.getElementById("hangup-button").disabled = true;
  targetUsername = null;
}



function handleICEGatheringStateChangeEvent(event) {
  // Our sample just logs information to console here,
  // but you can do whatever you need.
}

function handleICECandidateEvent(event) {
  // console.log(event)
  if (event.candidate) {
    console.log("*** Outgoing ICE candidate: " + event.candidate.candidate);

    let recipient_id ;
    if(targetUsername == 'Azad'){
      recipient_id = 3;
    }else{
      recipient_id = 2;

    }
    sendToServer({
      type: "new-ice-candidate",
      target: targetUsername,
      recipient_id:recipient_id,
      candidate: event.candidate
    });
  }
  
}

function handleSignalingStateChangeEvent(event) {
  console.log("*** WebRTC signaling state changed to: " + myPeerConnection.signalingState);
  switch(myPeerConnection.signalingState) {
    case "closed":
      closeVideoCall();
      break;
  }
};

function handleTrackEvent(event) {
  console.log("*** Track event");
  document.getElementById("received_video").srcObject = event.streams[0];
  document.getElementById("hangup-button").disabled = false;
}

async function handleNegotiationNeededEvent() {
  console.log("*** Negotiation needed");

  try {
    console.log("---> Creating offer");
    const offer = await myPeerConnection.createOffer();

    // If the connection hasn't yet achieved the "stable" state,
    // return to the caller. Another negotiationneeded event
    // will be fired when the state stabilizes.

    if (myPeerConnection.signalingState != "stable") {
      console.log("     -- The connection isn't stable yet; postponing...")
      return;
    }

    // Establish the offer as the local peer's current
    // description.

    console.log("---> Setting local description to the offer");
    await myPeerConnection.setLocalDescription(offer);

    // Send the offer to the remote peer.

    console.log("---> Sending the offer to the remote peer");
    sendToServer({
      name: 'David Calle',
      target: targetUsername,
      type: "video-offer",
      recipient_id:3,
      sdp: myPeerConnection.localDescription
    });
  } catch(err) {
    console.log("*** The following error occurred while handling the negotiationneeded event:");
    reportError(err);
  };
}


function handleRemoveTrackEvent(event) {
  var stream = remoteVideo.srcObject;
  var trackList = stream.getTracks();

  if (trackList.length == 0) {
    closeVideoCall();
  }
}

function handleICEConnectionStateChangeEvent(event) {
  switch(myPeerConnection.iceConnectionState) {
    case "closed":
    case "failed":
      closeVideoCall();
      break;
  }
}
function newComer(){
  let html = `<div class="col-md-3 mt-3">
                  <video class="callNew" autoplay muted></video>
          </div>`;
    $("#newCallerDiv").append(html);

}
</script>    
