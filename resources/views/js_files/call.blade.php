<script>

    window.Echo.join('call')
    .here(activeUsers => {
        console.log(activeUsers)
        this.activeUsers = activeUsers
    })
    .joining(user => {
        console.log('joining'+user.first_name)
        this.activeUsers.push(user)
    })
    .leaving(user => {
        console.log('leaving'+user)
        this.activeUsers = this.activeUsers.filter(u => u.id != user.id);
    })

    Echo.join(`App.User.{{Auth::user()->id}}`).here( users => {
      
    })
    .listen('CallSignal', (event) => { 
        // console.log(event)
        var message = JSON.parse(event.message)
        console.log(message);
        if(message.type == 'video-offer'){
          handleVideoOfferMsg(message);
        }else if(message.type == 'video-answer'){
          handleVideoAnswerMsg(message)
        }
        // handleVideoOfferMsg();
       
    }).listenForWhisper('typing', user => {

    })

const startButton = document.getElementById('startButton');
const callButton = document.getElementById('callButton');
const hangupButton = document.getElementById('hangupButton');
let myPeerConnection ;
hangupButton.disabled = true;
// startButton.addEventListener('click', start);
callButton.addEventListener('click', call);
hangupButton.addEventListener('click', hangup);

let startTime;
const localVideo = document.getElementById('localVideo');
const remoteVideo = document.getElementById('remoteVideo');

localVideo.addEventListener('loadedmetadata', function() {
  console.log(`Local video videoWidth: ${this.videoWidth}px,  videoHeight: ${this.videoHeight}px`);
});

remoteVideo.addEventListener('loadedmetadata', function() {
  console.log(`Remote video videoWidth: ${this.videoWidth}px,  videoHeight: ${this.videoHeight}px`);
});

remoteVideo.addEventListener('resize', () => {
  console.log(`Remote video size changed to ${remoteVideo.videoWidth}x${remoteVideo.videoHeight}`);
  // We'll use the first onsize callback as an indication that video has started
  // playing out.
  if (startTime) {
    const elapsedTime = window.performance.now() - startTime;
    console.log('Setup time: ' + elapsedTime.toFixed(3) + 'ms');
    startTime = null;
  }
});
var mediaConstraints = {
    audio: true, // We want an audio track
    video: true // ...and we want a video track
};
let targetUsername = '';
let localStream;
let remoteStream = new MediaStream();
remoteVideo.srcObject = remoteStream;
let pc1;
let pc2;
const offerOptions = {
  offerToReceiveAudio: 1,
  offerToReceiveVideo: 1
};


function getName(pc) {
  return (pc === pc1) ? 'pc1' : 'pc2';
}

function getOtherPc(pc) {
  return (pc === pc1) ? pc2 : pc1;
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

async function start() {

  

  // navigator.mediaDevices.getUserMedia(mediaConstraints)
  //   .then(function(localStream) {
  //     // console.log(localStream)
  //     localVideo.srcObject = localStream;
  //     localStream.getTracks().forEach(track => myPeerConnection.addTrack(track, localStream));
  //   })
  //   .catch(handleGetUserMediaError);
  // console.log('Requesting local stream');
  // startButton.disabled = true;
  // try {
  //   const stream = await navigator.mediaDevices.getUserMedia({audio: true, video: true});
  //   console.log('Received local stream');
  //   localVideo.srcObject = stream;
  //   localStream = stream;
  //  callButton.disabled = false;
  // } catch (e) {
  //   alert(`getUserMedia() error: ${e.name}`);
  // }
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

function createPeerConnection() {

  navigator.mediaDevices.getUserMedia(mediaConstraints)
    .then(function(localStream) {
      localVideo.srcObject = localStream;
    })
    
  myPeerConnection = new RTCPeerConnection({'iceServers': [{'urls': 'stun:stun.services.mozilla.com'}, {'urls': 'stun:stun.l.google.com:19302'}, {'urls': 'turn:numb.viagenie.ca','credential': 'Owais786','username': 'muhammadkashif70000@gmail.com'}]});
  console.log(myPeerConnection)
  myPeerConnection.onicecandidate = handleICECandidateEvent;
  myPeerConnection.ontrack = handleTrackEvent;
  myPeerConnection.onnegotiationneeded = handleNegotiationNeededEvent;
  myPeerConnection.onremovetrack = handleRemoveTrackEvent;
  myPeerConnection.oniceconnectionstatechange = handleICEConnectionStateChangeEvent;
  myPeerConnection.onicegatheringstatechange = handleICEGatheringStateChangeEvent;
  myPeerConnection.onsignalingstatechange = handleSignalingStateChangeEvent;

  

    localStream.getTracks().forEach(track => myPeerConnection.addTrack(track, localStream));


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
  if(!myPeerConnection){
    await start();
    createPeerConnection();

  }

  var desc = new RTCSessionDescription(msg.sdp);

  myPeerConnection.setRemoteDescription(desc).then(function () {
    return navigator.mediaDevices.getUserMedia(mediaConstraints);
  })
  .then(function(stream) {
    localStream = stream;
    localVideo.srcObject = localStream;

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
      name: 'Azad Chaiwala',
      target: targetUsername,
      type: "video-answer",
      recipient_id:2,
      sdp: myPeerConnection.localDescription
    };

    sendToServer(msg);
  })
  .catch(handleGetUserMediaError);
}

function handleICEGatheringStateChangeEvent(event) {
  // Our sample just logs information to console here,
  // but you can do whatever you need.
}

function handleICECandidateEvent(event) {
  // console.log(event)
  if (event.candidate) {
    sendToServer({
      type: "new-ice-candidate",
      target: targetUsername,
      recipient_id:3,
      candidate: event.candidate
    });
  }
}

function handleSignalingStateChangeEvent(event) {
  switch(myPeerConnection.signalingState) {
    case "closed":
      closeVideoCall();
      break;
  }
};

function handleTrackEvent(event) {

  remoteVideo.srcObject = event.streams[0];
  hangupButton.disabled = false;
}

function handleNegotiationNeededEvent() {
  // console.log('asdasdas')

  myPeerConnection.createOffer().then(function(offer) {
    
    return myPeerConnection.setLocalDescription(offer);
  })
  .then(function() {
    sendToServer({
      name: 'MR.Ngomba',
      target: targetUsername,
      type: "video-offer",
      recipient_id:3,
      sdp: myPeerConnection.localDescription
    });
  })
  .catch(reportError);
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

async function call(clickedUsername = 'Azad Chaiwala' , clickedUserId = 3) {

  if (myPeerConnection) {
    alert("You can't start a call because you already have one open!");
  } else {

    // if (clickedUsername === myUsername) {
    //   alert("I'm afraid I can't let you talk to yourself. That would be weird.");
    //   return;
    // }

    targetUsername = clickedUsername;
    createPeerConnection();
  }
    // navigator.mediaDevices.getUserMedia(mediaConstraints)
    // .then(function(localStream) {
    //   localVideo.srcObject = localStream;
    //   localStream.getTracks().forEach(track => myPeerConnection.addTrack(track, localStream));
    // })
    // .catch(handleGetUserMediaError);
  
  

  //   callButton.disabled = true;
  //   hangupButton.disabled = false;
  //   console.log('Starting call');
  //   startTime = window.performance.now();
  //   const videoTracks = localStream.getVideoTracks();
  //   const audioTracks = localStream.getAudioTracks();
  //   if (videoTracks.length > 0) {
  //     console.log(`Using video device: ${videoTracks[0].label}`);
  //   }
  //   if (audioTracks.length > 0) {
  //     console.log(`Using audio device: ${audioTracks[0].label}`);
  //   }
  //   const configuration = {'iceServers': [{'urls': 'stun:stun.services.mozilla.com'}, {'urls': 'stun:stun.l.google.com:19302'}, {'urls': 'turn:numb.viagenie.ca','credential': 'Owais786','username': 'muhammadkashif70000@gmail.com'}]};
  // // const configuration = {};  
  //   console.log('RTCPeerConnection configuration:', configuration);
  //   pc1 = new RTCPeerConnection(configuration);
  //   console.log('Created local peer connection object pc1');
  //   pc1.addEventListener('icecandidate', e => onIceCandidate(pc1, e));
  //   pc2 = new RTCPeerConnection(configuration);
  //   console.log('Created remote peer connection object pc2');
  //   pc2.addEventListener('icecandidate', e => onIceCandidate(pc2, e));
  //   pc1.addEventListener('iceconnectionstatechange', e => onIceStateChange(pc1, e));
  //   pc2.addEventListener('iceconnectionstatechange', e => onIceStateChange(pc2, e));
  //   pc2.addEventListener('track', gotRemoteStream);

  //   localStream.getTracks().forEach(track => pc1.addTrack(track, localStream));
  //   console.log('Added local stream to pc1');

  //   try {
  //     console.log('pc1 createOffer start');
  //     const offer = await pc1.createOffer(offerOptions);
  //     await onCreateOfferSuccess(offer);
  //   } catch (e) {
  //     onCreateSessionDescriptionError(e);
  //   }
}

function onCreateSessionDescriptionError(error) {
  console.log(`Failed to create session description: ${error.toString()}`);
}

async function onCreateOfferSuccess(desc) {
  console.log(`Offer from pc1\n${desc.sdp}`);
  console.log('pc1 setLocalDescription start');
  try {
    await pc1.setLocalDescription(desc);
    onSetLocalSuccess(pc1);
  } catch (e) {
    onSetSessionDescriptionError();
  }

  console.log('pc2 setRemoteDescription start');
  try {
    await pc2.setRemoteDescription(desc);
    onSetRemoteSuccess(pc2);
  } catch (e) {
    onSetSessionDescriptionError();
  }

  console.log('pc2 createAnswer start');
  // Since the 'remote' side has no media stream we need
  // to pass in the right constraints in order for it to
  // accept the incoming offer of audio and video.
  try {
    const answer = await pc2.createAnswer();
    await onCreateAnswerSuccess(answer);
  } catch (e) {
    onCreateSessionDescriptionError(e);
  }
}

function onSetLocalSuccess(pc) {
  console.log(`${getName(pc)} setLocalDescription complete`);
}

function onSetRemoteSuccess(pc) {
  console.log(`${getName(pc)} setRemoteDescription complete`);
}

function onSetSessionDescriptionError(error) {
  console.log(`Failed to set session description: ${error.toString()}`);
}

function gotRemoteStream(e) {
  if (remoteVideo.srcObject !== e.streams[0]) {
    remoteVideo.srcObject = e.streams[0];
    console.log('pc2 received remote stream');
  }
}

async function onCreateAnswerSuccess(desc) {
  console.log(`Answer from pc2:\n${desc.sdp}`);
  console.log('pc2 setLocalDescription start');
  try {
    await pc2.setLocalDescription(desc);
    onSetLocalSuccess(pc2);
  } catch (e) {
    onSetSessionDescriptionError(e);
  }
  console.log('pc1 setRemoteDescription start');
  try {
    await pc1.setRemoteDescription(desc);
    onSetRemoteSuccess(pc1);
  } catch (e) {
    onSetSessionDescriptionError(e);
  }
}

async function onIceCandidate(pc, event) {
  try {
    await (getOtherPc(pc).addIceCandidate(event.candidate));
    onAddIceCandidateSuccess(pc);
  } catch (e) {
    onAddIceCandidateError(pc, e);
  }
  console.log(`${getName(pc)} ICE candidate:\n${event.candidate ? event.candidate.candidate : '(null)'}`);
}

function onAddIceCandidateSuccess(pc) {
  console.log(`${getName(pc)} addIceCandidate success`);
}

function onAddIceCandidateError(pc, error) {
  console.log(`${getName(pc)} failed to add ICE Candidate: ${error.toString()}`);
}

function onIceStateChange(pc, event) {
  if (pc) {
    console.log(`${getName(pc)} ICE state: ${pc.iceConnectionState}`);
    console.log('ICE state change event: ', event);
  }
}

function hangup() {
  console.log('Ending call');
  pc1.close();
  pc2.close();
  pc1 = null;
  pc2 = null;
  hangupButton.disabled = true;
  callButton.disabled = false;
}

</script>    
