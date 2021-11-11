@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
   <style>
   .container-police {
  display: grid;
  /* min-width: 1250px; */
  height: 100%;
  grid-template-areas: "infobox infobox infobox"
  "userlistbox chatbox camerabox"
  "empty-container chat-controls chat-controls";
  grid-template-columns: 10em 1fr 500px;
  grid-template-rows: 16em 1fr 5em;
  grid-gap: 1rem;
}

.infobox {
  grid-area: infobox;
  overflow: auto;
}

.userlistbox {
  grid-area: userlistbox;
  border: 1px solid black;
  margin:0;
  padding:1px;
  height:100%;
  list-style:none;
  line-height:1.1;
  overflow-y:auto;
  overflow-x:hidden;
}

.userlistbox li {
  cursor: pointer;
  padding: 1px;
}

.chatbox {
  grid-area: chatbox;
  border: 1px solid black;
  margin: 0;
  overflow-y: scroll;
  padding: 1px;
  padding: 0.1rem 0.5rem;
}

.camerabox {
  grid-area: camerabox;
  /* width: 500px; */
  width: 100%;
  height: 375px;
  border: 1px solid black;
  vertical-align: top;
  display: block;
  position:relative;
  overflow:auto;
}

#received_video {
  width: 100%;
  height: 100%;
  position:absolute;
}

/* The small "preview" view of your camera */
#local_video {
  width: 120px;
  height: 90px;
  position: absolute;
  top: 1rem;
  left: 1rem;
  border: 1px solid rgba(255, 255, 255, 0.75);
  box-shadow: 0 0 4px black;
}

/* The "Hang up" button */
#hangup-button {
  display: block;
    width: 97px;
    height: 60px;
    margin-bottom: 50px;
    border-radius: 8px;
    position: relative;
    margin: auto;
    top: calc(100% - 80px);
    background-color: rgba(150, 0, 0, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.7);
    box-shadow: 0px 0px 1px 2px rgb(0 0 0 / 40%);
    font-size: 14px;
    font-family: "Lucida Grande", "Arial", sans-serif;
    color: rgba(255, 255, 255, 1.0);
  cursor: pointer;
}

#hangup-button:hover {
  filter: brightness(150%);
  -webkit-filter: brightness(150%);
}

#hangup-button:disabled {
  filter: grayscale(50%);
  -webkit-filter: grayscale(50%);
  cursor: default;
}

.empty-container {
  grid-area: empty-container;
}

.chat-controls {
  grid-area: chat-controls;
  width: 100%;
  height: 100%;
}
   </style>    

</head>

<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <ul class="userlistbox">

              @foreach($users as $user)
              <li onclick="invite(`{{$user->id}}`,`{{$user->first_name}}`)">{{$user->first_name}}</li>
              @endforeach

            </ul>
        </div>
        <div class="col-md-9">
            <div class="camerabox">
              <video id="received_video" autoplay></video>
              <video id="local_video" autoplay muted></video>
              <button id="hangup-button" onclick="hangUpCall();" role="button" disabled>
                Hang Up
              </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
        </div>
    </div>
  </div>
<!-- <div class="container">
    <div class="infobox">
      <p>This is a simple chat system implemented using WebSockets. It works by sending packets of JSON back and forth with the server.
        <a href="https://github.com/mdn/samples-server/tree/master/s/webrtc-from-chat">
      Check out the source</a> on Github.</p>
     
      <p>Click a username in the user list to ask them to enter a one-on-one video chat with you.</p>
      <p>Enter a username: <input id="name" type="text" maxlength="12" required autocomplete="username" inputmode="verbatim" placeholder="Username">
        <input type="button" name="login" value="Log in" onclick="connect()"></p>
    </div>
    
    
    
    <div class="empty-container"></div>
    <div class="chat-controls">
      Chat:<br/>
      <input id="text" type="text" name="text" size="100" maxlength="256" placeholder="Say something meaningful..." autocomplete="off" onkeyup="handleKey(event)" disabled>
      <input type="button" id="send" name="send" value="Send" onclick="handleSendButton()" disabled>
    </div>
  </div> -->



<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
@endsection
@section('scripts')
@include('js_files.student_room')
@endsection
