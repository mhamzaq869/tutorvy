@extends('tutor.layouts.app')
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
.callNew{
  height:150px;
  width:100%;
  border:1px solid grey;
}

/* Chat Box */
.h-360{
  height:360px;
  overflow-y:auto;
}
.chatInput{
height:25px;
}
#canvas {
  background-image:url("../assets/images/ico/graph.png")
}
   </style>    

</head>

<body>
  <div class="container-fluid">
    <!-- <div class="row">
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
    <div class="row  " id="newCallerDiv">
        <div class="col-md-3 mt-3">
              <video class="callNew" autoplay muted></video>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
        </div>
        <div class="col-md-12 mt-3">
              <button onclick="newComer()"> Add More</button>
        </div>
        
        
    </div> -->
    <div class="row">
        <div class="col-md-9"> 
          
          <div class="row">
              <div class="col-md-12 mt-3">
                    <nav class="">
                        <div class="nav nav-stwich pb-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-whiteBoard-tab" data-toggle="tab" href="#nav-whiteBoard" role="tab" aria-controls="nav-whiteBoard" aria-selected="true">
                                White Board
                            </a>
                            <a class="nav-item nav-link" id="nav-calculator-tab" data-toggle="tab" href="#nav-calculator" role="tab" aria-controls="nav-calculator" aria-selected="false">
                                Calculator
                            </a>
                            <a class="nav-item nav-link" id="nav-textEditor-tab" data-toggle="tab" href="#nav-textEditor" role="tab" aria-controls="nav-textEditor" aria-selected="false">
                                Text Editor
                            </a>
                            <a class="nav-item nav-link" id="nav-codeEditor-tab" data-toggle="tab" href="#nav-codeEditor" role="tab" aria-controls="nav-codeEditor" aria-selected="false">
                                Code Editor
                            </a>
                            <a class="nav-item nav-link" id="nav-googleDocs-tab" data-toggle="tab" href="#nav-googleDocs" role="tab" aria-controls="nav-googleDocs" aria-selected="false">
                                Google Docs
                            </a>
                            <a class="nav-item nav-link" id="nav-fileShare-tab" data-toggle="tab" href="#nav-fileShare" role="tab" aria-controls="nav-fileShare" aria-selected="false">
                                File Sharing
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane tab-border-none tab-border-none-1 fade show active" id="nav-whiteBoard" role="tabpanel" aria-labelledby="nav-whiteBoard-tab">
                          <div class="container-fluid ">
                              <div class="row mt-5">
                                  <div class="col-md-12">
                                      <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                        </div>
                                      </nav>
                                      <div class="tab-content" id="nav-tabContent">
                                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><div class="col-md-1 mt-2 p-0">
                                            <ul class=" text-center pl-0">
                                              <li class="p-2">
                                                <a href="#">
                                                      <img src="{{asset('assets/images/ico/pointer.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#">
                                                      <img src="{{asset('assets/images/ico/drag.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#" id="pen">
                                                      <img src="{{asset('assets/images/ico/pencil.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#" id="eraser">
                                                      <img src="{{asset('assets/images/ico/eraser.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#" id="rect">
                                                      <img src="{{asset('assets/images/ico/rectangle.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#">
                                                      <img src="{{asset('assets/images/ico/ellipse.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#" id="line">
                                                      <img src="{{asset('assets/images/ico/line.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#">
                                                      <img src="{{asset('assets/images/ico/text.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#">
                                                      <img src="{{asset('assets/images/ico/diagonal.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#">
                                                      <img src="{{asset('assets/images/ico/fx.png')}}" alt="">
                                                </a>
                                              </li>
                                              <li class="p-2">
                                                <a href="#" id="clear">
                                                      C
                                                </a>
                                              </li>
                                            </ul>
                                          </div>
                                          <div class="col-md-11 mt-3 p-0">
                                              <canvas id="canvas" width="740" height="500"></canvas>

                                          </div> 
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                                      </div>
                                  </div>
                                  <!-- -->
                              </div>
                          </div>
                          <!-- end -->
                      </div>
                      <div class="tab-pane tab-border-none fade" id="nav-calculator" role="tabpanel" aria-labelledby="nav-calculator-tab">
                          <div class="container-fluid ">
                              <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                      
                                      </div>
                                  </div>
                              </div>
                              <!-- end -->
                      </div>
                      <div class="tab-pane tab-border-none fade" id="nav-textEditor" role="tabpanel" aria-labelledby="nav-textEditor-tab">

                              <div class="container-fluid ">

                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                          
                                      </div>
                                  </div>
                              </div>
                              <!-- end -->
                      </div>
                      <div class="tab-pane tab-border-none fade" id="nav-codeEditor" role="tabpanel" aria-labelledby="nav-codeEditor-tab">

                              <div class="container-fluid ">

                                  <div class="row">
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                          
                                      </div>
                                  </div>
                              </div>
                              <!-- end -->
                      </div>
                      <div class="tab-pane tab-border-none fade" id="nav-googleDocs" role="tabpanel" aria-labelledby="nav-googleDocs-tab">

                          <div class="container-fluid ">

                              <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                      
                                  </div>
                              </div>
                          </div>
                          <!-- end -->
                      </div>
                      <div class="tab-pane tab-border-none fade" id="nav-fileShare" role="tabpanel" aria-labelledby="nav-fileShare-tab">
                          <div class="container-fluid ">

                              <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                      
                                  </div>
                              </div>
                          </div>
                      <!-- end -->
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="row mt-3 mb-3">
              <div class="col-md-12">
                    <video class="callNew" autoplay muted></video>
              </div>
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                        Chat <i class="fa fa-person"></i>
                      </div>
                      <div class="card-body h-360">

                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-md-12">
                              <input type="text" class="chatInput">

                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
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
<script>
 
</script>
@endsection
@section('scripts')
@include('js_files.room')
@include('js_files.whiteBoard')

@endsection
