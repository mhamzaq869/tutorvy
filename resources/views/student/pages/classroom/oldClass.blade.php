@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
<link rel="shortcut icon" href="https://raw.githubusercontent.com/muaz-khan/RTCMultiConnection/master/demos/logo.png">
  <!-- <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/muaz-khan/RTCMultiConnecti0on/master/demos/css/emojionearea.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.7/emojionearea.css">

  <script src="https://raw.githubusercontent.com/muaz-khan/RTCMultiConnection/master/demos/js/jquery.min.js"></script>
  <link href="https://raw.githubusercontent.com/muaz-khan/RTCMultiConnection/master/demos/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://rtcmulticonnection.herokuapp.com/node_modules/webrtc-adapter/out/adapter.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/dist/RTCMultiConnection.min.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/node_modules/fbr/FileBufferReader.js"></script>

  <script src="https://rtcmulticonnection.herokuapp.com/node_modules/canvas-designer/dev/webrtc-handler.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/node_modules/canvas-designer/canvas-designer-widget.js"></script>
  <!-- <script src="https://raw.githubusercontent.com/muaz-khan/RTCMultiConnection/master/demos/js/emojionearea.min.js"></script> -->

<link href="{{ asset('assets/css/modal.css') }}" rel="stylesheet">
  
  <!-- <script src="/node_modules/multistreamsmixer/MultiStreamsMixer.js"></script> -->
  <style>
.extra-controls {
    position: absolute;
    right: 21%;
}

#btn-comments {
  color: red;
  margin-top: 5px;
  font-size: 24px;
  text-shadow: 1px 1px white;
}

#other-videos {
    margin-top: 5px;
}

#other-videos video {
    width: 45%;
    margin: 5px;
    border: 1px solid black;
    padding: 1px;
    border-radius: 3px;
}

#txt-chat-message {
    width: 100%;
    resize: vertical;
    margin: 5px;
    margin-right: 0;
    min-height: 30px;
}

#btn-chat-message {
    margin: 5px;
}

#conversation-panel {
    margin-bottom: 20px;
    text-align: left;
    max-height: 200px;
    overflow: auto;
    border-top: 1px solid #E5E5E5;
    width: 106%;
}

#conversation-panel .message {
    border-bottom: 1px solid #E5E5E5;
    padding: 5px 10px;
}

#conversation-panel .message img, #conversation-panel .message video, #conversation-panel .message iframe {
    max-width: 100%;
}

#main-video {
    width: 100%;
    margin-top: -9px;
    border-bottom: 1px solid #121010;
    display: none;
    padding-bottom: 1px;
    display: none;
}

hr {
    height: 1px;
    border: 0;
    background: #E5E5E5;
}

#btn-attach-file {
    width: 25px;
    vertical-align: middle;
    cursor: pointer;
    display: none;
}

#btn-share-screen {
    width: 25px;
    vertical-align: middle;
    cursor: pointer;
    display: none;
}

.checkmark {
    display:none;
    width: 15px;
    vertical-align: middle;
}

#screen-viewer {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999999999999;
    display: none;
}
.h-500{
    height:500px !important;
}
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
#display{
    border: none;
    text-align: right;
    font-size: 50px;
}
.equal{
    background: #77AFFF;
}
.btnNum{
    background:#fff;
}
td input{
    width: 163px !important;
}
.ck p{
    height:400px !important;
}
.cust_vid{
    height: 132px;
    padding-top: 16%; 
    border-radius:4px;
}
#countdownExample{
    font-family:'Orbitron';
}
.w-20{
    width:20px;
}
</style>
@section('content')
 <!-- top Fixed navbar End -->
 <section>
    <div class="content-wrapper " style="overflow: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <div id="countdownExample">
                        <div class="values"></div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 tech_weck">
                <div class="col-md-9 card"> 
                    <div class="row">
                        <div class="col-md-12 mt-3">
                                <nav class="">
                                    <div class="nav nav-stwich nav-whiteBoard-nav pb-0" id="nav-tab" role="tablist">
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
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <nav>
                                                        <div class="nav nav-tabs board-nav" id="nav-tab" role="tablist">
                                                            <!-- <a class="nav-item nav-link board-nav active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Board 1 <i class="pl-2 fa fa-times text-dark"></i></a>
                                                            <a class="nav-item nav-link board-nav" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Board 2 <i class="pl-2 fa fa-times text-dark"></i></a>
                                                            <a class="mt-2 ml-2" href="#">Add new Board +</a> -->
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <!-- <div class="row">
                                                                <div class="col-md-1 mt-2 p-0">
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
                                                                    <canvas id="canvas" width="750" height="450"></canvas>
                                                                </div> 
                                                            </div> -->
                                                            <div class="row">
                                                                <div class="col-md-12 h-500 mt-5 mb-5">
                                                                    <div id="widget-container" style=""></div>
                                                                    <video id="screen-viewer" controls playsinline autoplay></video>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                            <!-- <div class="row">
                                                                <div class="col-md-1 mt-2 p-0">
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
                                                                    <canvas id="canvas" width="750" height="500"></canvas>
                                                                </div> 
                                                            </div> -->
                                                        </div>
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
                                                    <form action="" class="mt-5">
                                                        <table class="w-100">
                                                                <tr>
                                                                    <input id="display" name="display" value="0" size="28" maxlength="25">
                                                                </tr>
                                                                <tr>
                                                                    <div class="mt-3 mb-2 ">
                                                                        <a href="Deg" class="p-5 text-dark ">DEG</a>
                                                                        <a href="F-E" class="p-5 text-dark ">F-E</a>
                                                                    </div>
                                                                </tr>
                                                                <tr >
                                                                    <div class="mt-3 mb-2 text-dark">
                                                                        <a href="MC" class="p-5 text-dark">MC</a>
                                                                        <a href="MR" class="p-5 text-dark">MR</a>
                                                                        <a href="M+" class="p-5 text-dark">M+</a>
                                                                        <a href="M-" class="p-5 text-dark">M-</a>
                                                                        <a href="MS" class="p-5 text-dark">Ms</a>
                                                                    </div>
                                                                
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <input type="button" class="btnMath" name="btnMath" value="Trignometry" onclick="addChar(this.form.display,')')">
                                                                    </td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="f Functions " onclick="addChar(this.form.display,')')"></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="button" class="btnOpps" name="btnOpps" value="2nd" onclick="addChar(this.form.display,'3.14159265359')"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="Pi" onclick="if(checkNum(this.form.display.value)) { tan(this.form) }"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="e" onclick=" percent(this.form.display)"></td>
                                                                    <td><input type="button" class="btnTop" name="btnTop" value="C" onclick="this.form.display.value=  0 "></td>
                                                                    <td><input type="button" class="btnTop" name="btnTop" value="AC" onclick="deleteChar(this.form.display)"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="x2" onclick="addChar(this.form.display, '(')"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="|x|" onclick="addChar(this.form.display,')')"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="10x" onclick="if(checkNum(this.form.display.value)) { cos(this.form) }"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="exp" onclick="if(checkNum(this.form.display.value)) { sin(this.form) }"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="mod" onclick="if(checkNum(this.form.display.value)) { tan(this.form) }"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="2/x" onclick="addChar(this.form.display,')')"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="(" onclick="if(checkNum(this.form.display.value)) { cos(this.form) }"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value=")" onclick="if(checkNum(this.form.display.value)) { sin(this.form) }"></td>
                                                                    
                                                                    <td><input type="button" class="btnOpps" name="btnOpps" value="n!" onclick="if(checkNum(this.form.display.value)) { exp(this.form) }"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="/" onclick="addChar(this.form.display, '/')"></td>
                                                                <tr>
                                                                <td><input type="button" class="btnOpps" name="btnOpps" value="ln" onclick="if(checkNum(this.form.display.value)) { ln(this.form) }"></td>

                                                                    <td><input type="button" class="btnNum" name="btnNum" value="7" onclick="addChar(this.form.display, '7')"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="8" onclick="addChar(this.form.display, '8')"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="9" onclick="addChar(this.form.display, '9')"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="X" onclick="addChar(this.form.display, '*')"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="button" class="btnOpps" name="btnOpps" value="Xy" onclick="if(checkNum(this.form.display.value)) { sqrt(this.form) }"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="4" onclick="addChar(this.form.display, '4')"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="5" onclick="addChar(this.form.display, '5')"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="6" onclick="addChar(this.form.display, '6')"></td>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="-" onclick="addChar(this.form.display, '-')"></td>
                                                                </tr>
                                                                <tr>
                                                                <td><input type="button" class="btnOpps" name="btnOpps" value="10x" onclick="if(checkNum(this.form.display.value)) { square(this.form) }"></td>
                                                                <td><input type="button" class="btnNum" name="btnNum" value="1" onclick="addChar(this.form.display, '1')"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="2" onclick="addChar(this.form.display, '2')"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="3" onclick="addChar(this.form.display, '3')"></td>
                                                                
                                                                
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="+" onclick="addChar(this.form.display, '+')"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="button" class="btnMath" name="btnMath" value="ln" onclick="addChar(this.form.display, '(')"></td>
                                                                    <td><input type="button" class="btnMath btnNum" name="btnMath" value="+/-" onclick="changeSign(this.form.display)"></td>
                                                                    <td><input type="button" class="btnNum" name="btnNum" value="0" onclick="addChar(this.form.display, '0')"></td>
                                                                    <td><input type="button" class="btnMath btnNum" name="btnMath" value="&#46;" onclick="addChar(this.form.display, '&#46;')"></td>
                                                                    <td><input type="button"  class="btnTop equal" name="btnTop" value="=" onclick="if(checkNum(this.form.display.value)) { compute(this.form) }"></td>
                                                                </tr>
                                                        </table>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- end -->
                                        </div>
                                    </div>
                                    <div class="tab-pane tab-border-none fade" id="nav-textEditor" role="tabpanel" aria-labelledby="nav-textEditor-tab">

                                            <div class="container-fluid ">

                                                <div class="row mt-5">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <textarea name="content" id="editor" placeholder="">
                                                        &lt;p&gt;Add your text here&lt;/p&gt;
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end -->
                                    </div>
                                    <div class="tab-pane tab-border-none fade" id="nav-codeEditor" role="tabpanel" aria-labelledby="nav-codeEditor-tab">

                                            <div class="container-fluid ">

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <pre><code class="language-html">
                                                            
                                                        </code></pre>
                                                        <textarea name="" id="check" cols="30" rows="10" onkeypress="cheng()"></textarea>

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
                 
                    <!-- <div class="row mt-3 mb-3">
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
                    </div> -->
                    <div class="mt-4">
                        <div class="bg-dark w-100 cust_vid text-center">
                                <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                        </div>
                        <video id="main-video"  playsinline autoplay></video>
                        <div id="other-videos" class="w-100 m-0"></div>
                        <div class="col-md-12 mt-2 vid-location text-center">
                            <a href="#" class="callSet vc">
                                <img src="{{asset('assets/images/ico/vc.png')}}" title="Without Video" alt="">
                            </a>
                            <a  class="callSet no-vc">
                                <img src="{{asset('assets/images/ico/no-vc.png')}}" title="With Video" alt="">
                            </a>
                            <a href="#" class="callSet mk" id="mk">
                                <img src="{{asset('assets/images/ico/mike.png')}}" title="Without Audio" alt="">
                            </a>
                            <a href="#" class="callSet no-mk">
                                <img src="{{asset('assets/images/ico/no-mike.png')}}" title="With Audio" alt="">
                            </a>
                            <a href="#" class="callSet no-ph">
                                <img src="{{asset('assets/images/ico/no-phone.png')}}" title="End Call" alt="">
                            </a>
                        </div>
                        <hr>
                        <div style="padding: 5px 10px;">
                            <div id="onUserStatusChanged"></div>
                        </div>

                        <div style="margin-top: 20px;bottom: 0;background: white; padding-bottom: 20px; width: 100%">
                            <div id="conversation-panel"></div>
                            <div id="key-press" style="text-align: right; display: none; font-size: 11px;">
                                <span style="vertical-align: middle;"></span>
                                <img src="https://www.webrtc-experiment.com/images/key-press.gif" style="height: 12px; vertical-align: middle;">
                            </div>
                            <textarea id="txt-chat-message" style="display:none;" ></textarea>
                            <div id="check"></div>
                            <button class="btn btn-primary" id="btn-chat-message" disabled>Send</button>
                            <img id="btn-attach-file" src="https://www.webrtc-experiment.com/images/attach-file.png" title="Attach a File">
                            <img id="btn-share-screen" src="https://www.webrtc-experiment.com/images/share-screen.png" title="Share Your Screen">
                        </div>

                        <canvas id="temp-stream-canvas" style="display: none;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Modal -->
<div class="modal fade custom_modal" id="endCall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body bg-custom text-center p-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="p-2"> <img src="{{asset('assets/images/logo-footer.png')}}" alt="">
                            </h1>
                            <h3 class="mb-4 p-2"> Are you a</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="bg-btn-light">
                                <a type="button" id="rescue" class="btn  modal-btn animate__animated">Re-schedule</a>
                                <a type="button" id="ending"  class="btn  modal-btn animate__animated">End Call</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
            </div>
        </div>
    </div>
 
 
<!-- Modal -->
 <div class="modal" id="callModal" tabindex="-1" role="dialog"
    aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="callModalTitle">Choose Features</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <div class="modal-body bg-black" >
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{asset($user->picture)}}" class="profile-img pg" alt="">
                    </div>
                    <div class="col-md-12 text-center mt-3 ">

                        <a href="#" class="callSet vc">
                           <img src="{{asset('assets/images/ico/vc.png')}}" title="Without Video" alt="">
                        </a>
                        <a href="#" class="callSet no-vc">
                           <img src="{{asset('assets/images/ico/no-vc.png')}}" title="With Video" alt="">
                        </a>
                        <a href="#" class="callSet mk" >
                            <img src="{{asset('assets/images/ico/mike.png')}}" title="Without Audio" alt="">
                        </a>
                        <a href="#" class="callSet no-mk">
                            <img src="{{asset('assets/images/ico/no-mike.png')}}" title="With Audio" alt="">
                        </a>
                        <a type="button" role="button" id="join_now"  class="btn btn-success ml-2">
                            Join Class
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('js_files.whiteBoard')
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.7/emojionearea.min.js"></script>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
            function cheng(){
                var ter = $(this).html();
                alert(ter);
                $('.language-html').text(ter);
            }
</script>


<script>
    // var timerInstance = new easytimer.Timer();
    $(document).ready(function(){
        
        $(".tech_weck").hide();
        $(".mk").hide();
        $(".vc").hide();
        $(".no-vc").show();
        $("#callModal").modal("show");
        $("#join_now").attr("disabled","disabled" );
        });
    $(".no-mk").click(function(){
        $(".no-mk").hide();
        $(".mk").show();
    });
    $(".mk").click(function(){
       
        $(".no-mk").show();
        $(".mk").hide();
    });
    $(".no-vc").click(function(){
       
       $(".no-vc").hide();
       $(".vc").show();
   });
   $(".vc").click(function(){
      
       $(".vc").hide();
       $(".no-vc").show();
   });
   $(".no-ph").click(function(){
        $("#endCall").modal("show");
    });
    

   
</script>



<script>

var connection = new RTCMultiConnection();
var roomid = '{{$class->classroom_id}}';
var fullName = '{{$class->booking->user->first_name}} {{$class->booking->user->last_name}}';

// connection.socketURL = '/';
connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

connection.socketMessageEvent = 'canvas-dashboard-demo';
// connection.session = {
//     audio: true,
//     video: true,
//     data: true
// };
// connection.mediaConstraints = {
//     audio: true,
//     video: true,
//     data: true

// };
connection.DetectRTC.load(function() {
                if (connection.DetectRTC.hasMicrophone === true) {
                    // enable microphone
                    connection.mediaConstraints.audio = true;
                    connection.session.audio = true;
                    // alert('attach true microphone')
                    $(".callSet").show();
                     $("#join_now").removeAttr("disabled","disabled" );
                    $("#join_now").click(function(){
                        $(".tech_weck").show();
                        $("#callModal").modal("hide");
                        joinClass();
                    })

                }else{
                    toastr.warning( "Audio Device is Mendatory ");
                    $(".mk , .no-mk").hide();
                }

                if (connection.DetectRTC.hasWebcam === true) {
                    // enable camera
                    connection.mediaConstraints.video = true;
                    connection.session.video = true;
                   // alert('attach true camera')
                   $(".vc , .no-vc").show();

                }else{
                    // alert('attach Cam')
                    $(".vc , .no-vc").hide();
                }

                if (connection.DetectRTC.hasSpeakers === false) { // checking for "false"
                    // alert('Please attach a speaker device. You will unable to hear the incoming audios.');
                }
            });
function joinClass(){
    // keep room opened even if owner leaves
    connection.autoCloseEntireSession = true;

    // https://www.rtcmulticonnection.org/docs/maxParticipantsAllowed/
    // connection.maxParticipantsAllowed = 1000;
    // set value 2 for one-to-one connection
    connection.maxParticipantsAllowed = 2;
    connection.extra.userFullName = fullName;

    connection.checkPresence(roomid, function(isRoomExist) {
        
        connection.publicRoomIdentifier = '';
        connection.sessionid = roomid;
        // connection.isInitiator = true;
            // openCanvasDesigner();
            // $('#btn-create-room').html(initialHTML).prop('disabled', false);
    });

    // here goes canvas designer
    var designer = new CanvasDesigner();

    // you can place widget.html anywhere
    designer.widgetHtmlURL = "{{ route('whiteBoard.canvas')}}";
    designer.widgetJsURL = "{{asset('assets/js/widget.min.js').'?ver='.rand()}}"

    designer.addSyncListener(function(data) {
        connection.send(data);
    });

    designer.setSelected('pencil');

    designer.setTools({
        pencil: true,
        text: true,
        image: false,
        pdf: false,
        eraser: true,
        line: true,
        arrow: false,
        dragSingle: true,
        dragMultiple: true,
        arc: true,
        rectangle: true,
        quadratic: false,
        bezier: false,
        marker: false,
        zoom: false,
        lineWidth: false,
        colorsPicker: false,
        extraOptions: false,
        code: false,
        undo: false,
    });

    // here goes RTCMultiConnection

    connection.chunkSize = 16000;
    connection.enableFileSharing = true;

    
    
    connection.sdpConstraints.mandatory = {
        OfferToReceiveAudio: true,
        OfferToReceiveVideo: true
    };
  

    connection.onUserStatusChanged = function(event) {
        var infoBar = document.getElementById('onUserStatusChanged');
        var names = [];
        connection.getAllParticipants().forEach(function(pid) {
            names.push(getFullName(pid));
        });

        if (!names.length) {
            names = ['Only You'];
        } else {
            names = [connection.extra.userFullName || 'You'].concat(names);
        }

        infoBar.innerHTML = '<b>Active users:</b> ' + names.join(', ');
    };

    connection.onopen = function(event) {
        connection.onUserStatusChanged(event);

        if (designer.pointsLength <= 0) {
            // make sure that remote user gets all drawings synced.
            setTimeout(function() {
                connection.send('plz-sync-points');
            }, 1000);
        }

        document.getElementById('btn-chat-message').disabled = false;
        document.getElementById('btn-attach-file').style.display = 'inline-block';
        document.getElementById('btn-share-screen').style.display = 'inline-block';
    };

    connection.onclose = connection.onerror = connection.onleave = function(event) {
        console.log(event+" dsfsdfsdfsdfsdfsdfsdf");
        connection.onUserStatusChanged(event);
    };

    connection.onmessage = function(event) {
        if(event.data.showMainVideo) {
            // $('#main-video').show();
            $('#screen-viewer').css({
                top: $('#widget-container').offset().top,
                left: $('#widget-container').offset().left,
                width: $('#widget-container').width(),
                height: $('#widget-container').height()
            });
            $('#screen-viewer').show();
            return;
        }

        if(event.data.hideMainVideo) {
            // $('#main-video').hide();
            $('#screen-viewer').hide();
            return;
        }

        if(event.data.typing === true) {
            $('#key-press').show().find('span').html(event.extra.userFullName + ' is typing');
            return;
        }

        if(event.data.typing === false) {
            $('#key-press').hide().find('span').html('');
            return;
        }

        if (event.data.chatMessage) {
            appendChatMessage(event);
            return;
        }

        if (event.data.checkmark === 'received') {
            var checkmarkElement = document.getElementById(event.data.checkmark_id);
            if (checkmarkElement) {
                checkmarkElement.style.display = 'inline';
            }
            return;
        }

        if (event.data === 'plz-sync-points') {
            designer.sync();
            return;
        }

        designer.syncData(event.data);
    };

    // extra code

    connection.onstream = function(event) {
        console.log(connection+' asdasdasd')
        if (event.stream.isScreen && !event.stream.canvasStream) {
            $('#screen-viewer').get(0).srcObject = event.stream;
            $('#screen-viewer').hide();
        }
        else if (event.extra.roomOwner === true) {
            var video = document.getElementById('main-video');
            video.setAttribute('data-streamid', event.streamid);
            // video.style.display = 'none';
            if(event.type === 'local') {
                video.muted = true;
                video.volume = 0;
            }
            video.srcObject = event.stream;
            $('#main-video').show();
        } else {
            event.mediaElement.controls = false;
            var otherVideos = document.querySelector('#other-videos');
            otherVideos.appendChild(event.mediaElement);
        }
        connection.onUserStatusChanged(event);
    };

    connection.onstreamended = function(event) {
        var video = document.querySelector('video[data-streamid="' + event.streamid + '"]');
        if (!video) {
            video = document.getElementById(event.streamid);
            if (video) {
                video.parentNode.removeChild(video);
                return;
            }
        }
        if (video) {
            video.srcObject = null;
            video.style.display = 'none';
        }
    };
    $(".no-vc").click(function(){
        alert("No vc");
        var localStream = connection.attachStreams[0];
        localStream.mute('video');
    })
    $(".vc").click(function(){
        alert("Vc");
        var localStream = connection.attachStreams[0];
        localStream.unmute('video'); 
        
    })


    connection.onmute = function(e) { 
        e.mediaElement.setAttribute('poster', '//www.webrtc-experiment.com/images/muted.png'); 
    };


    var conversationPanel = document.getElementById('conversation-panel');

    connection.onFileEnd = function(file) {
    var html = getFileHTML(file);
    var div = progressHelper[file.uuid].div;

    if (file.userid === connection.userid) {
        div.innerHTML = '<b>You:</b><br>' + html;
        div.style.background = '#cbffcb';

        if(recentFile) {
            recentFile.userIndex++;
            var nextUserId = connection.getAllParticipants()[recentFile.userIndex];
            if(nextUserId) {
                connection.send(recentFile, nextUserId);
            }
            else {
                recentFile = null;
            }
        }
        else {
            recentFile = null;
        }
    } else {
        div.innerHTML = '<b>' + getFullName(file.userid) + ':</b><br>' + html;
    }
};

// to make sure file-saver dialog is not invoked.
connection.autoSaveToDisk = false;

var progressHelper = {};

connection.onFileProgress = function(chunk, uuid) {
    var helper = progressHelper[chunk.uuid];
    helper.progress.value = chunk.currentPosition || chunk.maxChunks || helper.progress.max;
    updateLabel(helper.progress, helper.label);
};

connection.onFileStart = function(file) {
    var div = document.createElement('div');
    div.className = 'message';

    if (file.userid === connection.userid) {
        var userFullName = file.remoteUserId;
        if(connection.peersBackup[file.remoteUserId]) {
            userFullName = connection.peersBackup[file.remoteUserId].extra.userFullName;
        }

        div.innerHTML = '<b>You (to: ' + userFullName + '):</b><br><label>0%</label> <progress></progress>';
        div.style.background = '#cbffcb';
    } else {
        div.innerHTML = '<b>' + getFullName(file.userid) + ':</b><br><label>0%</label> <progress></progress>';
    }

    div.title = file.name;
    conversationPanel.appendChild(div);
    progressHelper[file.uuid] = {
        div: div,
        progress: div.querySelector('progress'),
        label: div.querySelector('label')
    };
    progressHelper[file.uuid].progress.max = file.maxChunks;

    conversationPanel.scrollTop = conversationPanel.clientHeight;
    conversationPanel.scrollTop = conversationPanel.scrollHeight - conversationPanel.scrollTop;
};




designer.appendTo(document.getElementById('widget-container'), function() {
    // if (params.open === true || params.open === 'true') {
            // var tempStreamCanvas = document.getElementById('temp-stream-canvas');
            // var tempStream = tempStreamCanvas.captureStream();
            // tempStream.isScreen = true;
            // tempStream.streamid = tempStream.id;
            // tempStream.type = 'local';
            // connection.attachStreams.push(tempStream);
            // window.tempStream = tempStream;

            // connection.extra.roomOwner = true;
            // connection.open(roomid, function(isRoomOpened, roomid, error) {
            //     if (error) {
            //         if (error === connection.errors.ROOM_NOT_AVAILABLE) {
            //             alert('Someone already created this room. Please either join or create a separate room.');
            //             return;
            //         }
            //         alert(error);
            //     }

            //     connection.socket.on('disconnect', function() {
            //         location.reload();
            //     });
            // });
    // } else {
// connection.dontAttachStream = true; 

        connection.join(roomid, function(isRoomJoined, roomid, error) {
            console.log(connection.DetectRTC)
           
            if (error) {
                if (error === connection.errors.ROOM_NOT_AVAILABLE) {
                    alert('This room does not exist. Please either create it or wait for moderator to enter in the room.');
                    return;
                }
                if (error === connection.errors.ROOM_FULL) {
                    alert('Room is full.');
                    window.location.href = "{{route('student.classroom')}}";
                    return;
                }
                if (error === connection.errors.INVALID_PASSWORD) {
                    connection.password = prompt('Please enter room password.') || '';
                    if(!connection.password.length) {
                        alert('Invalid password.');
                        return;
                    }
// connection.dontAttachStream = true; 

                    connection.join(roomid, function(isRoomJoined, roomid, error) {
                        if(error) {
                            alert(error);
                        }
                    });
                    return;
                }
                alert(error);
            }

            connection.socket.on('disconnect', function() {
                location.reload();
            });
        });
    // }
});

  
}

function appendChatMessage(event, checkmark_id) {
    var div = document.createElement('div');

    div.className = 'message';

    if (event.data) {
        div.innerHTML = '<b>' + (event.extra.userFullName || event.userid) + ':</b><br>' + event.data.chatMessage;

        if (event.data.checkmark_id) {
            connection.send({
                checkmark: 'received',
                checkmark_id: event.data.checkmark_id
            });
        }
    } else {
        div.innerHTML = '<b>You:</b> <img class="checkmark" id="' + checkmark_id + '" title="Received" src="https://www.webrtc-experiment.com/images/checkmark.png"><br>' + event;
        div.style.background = '#cbffcb';
    }

    conversationPanel.appendChild(div);

    conversationPanel.scrollTop = conversationPanel.clientHeight;
    conversationPanel.scrollTop = conversationPanel.scrollHeight - conversationPanel.scrollTop;
}

var keyPressTimer;
var numberOfKeys = 0;
$(document).ready(function(){
    $('#txt-chat-message').emojioneArea({
        pickerPosition: "top",
        filtersPosition: "bottom",
        tones: false,
        autocomplete: true,
        inline: true,
        hidePickerOnBlur: true,
        hideSource: false,
        events: {
            focus: function() {
                $('.emojionearea-category').unbind('click').bind('click', function() {
                    $('.emojionearea-button-close').click();
                });
            },
            keyup: function(e) {
                var chatMessage = $('.emojionearea-editor').html();
                if (!chatMessage || !chatMessage.replace(/ /g, '').length) {
                    connection.send({
                        typing: false
                    });
                }


                clearTimeout(keyPressTimer);
                numberOfKeys++;

                if (numberOfKeys % 3 === 0) {
                    connection.send({
                        typing: true
                    });
                }

                keyPressTimer = setTimeout(function() {
                    connection.send({
                        typing: false
                    });
                }, 1200);
            },
            blur: function() {
                // $('#btn-chat-message').click();
                connection.send({
                    typing: false
                });
            }
        }
    });
})


window.onkeyup = function(e) {
    var code = e.keyCode || e.which;
    if (code == 13) {
        $('#btn-chat-message').click();
    }
};

document.getElementById('btn-chat-message').onclick = function() {
    var chatMessage = $('.emojionearea-editor').html();
    $('.emojionearea-editor').html('');

    if (!chatMessage || !chatMessage.replace(/ /g, '').length) return;

    var checkmark_id = connection.userid + connection.token();

    appendChatMessage(chatMessage, checkmark_id);

    connection.send({
        chatMessage: chatMessage,
        checkmark_id: checkmark_id
    });

    connection.send({
        typing: false
    });
};

var recentFile;
document.getElementById('btn-attach-file').onclick = function() {
    var file = new FileSelector();
    file.selectSingleFile(function(file) {
        recentFile = file;

        if(connection.getAllParticipants().length >= 1) {
            recentFile.userIndex = 0;
            connection.send(file, connection.getAllParticipants()[recentFile.userIndex]);
        }
    });
};

function getFileHTML(file) {
    var url = file.url || URL.createObjectURL(file);
    var attachment = '<a href="' + url + '" target="_blank" download="' + file.name + '">Download: <b>' + file.name + '</b></a>';
    if (file.name.match(/\.jpg|\.png|\.jpeg|\.gif/gi)) {
        attachment += '<br><img crossOrigin="anonymous" src="' + url + '">';
    } else if (file.name.match(/\.wav|\.mp3/gi)) {
        attachment += '<br><audio src="' + url + '" controls></audio>';
    } else if (file.name.match(/\.pdf|\.js|\.txt|\.sh/gi)) {
        attachment += '<iframe class="inline-iframe" src="' + url + '"></iframe></a>';
    }
    return attachment;
}

function getFullName(userid) {
    var _userFullName = userid;
    if (connection.peers[userid] && connection.peers[userid].extra.userFullName) {
        _userFullName = connection.peers[userid].extra.userFullName;
    }
    return _userFullName;
}


function updateLabel(progress, label) {
    if (progress.position == -1) return;
    var position = +progress.position.toFixed(2).split('.')[1] || 100;
    label.innerHTML = position + '%';
}

function addStreamStopListener(stream, callback) {
    stream.addEventListener('ended', function() {
        callback();
        callback = function() {};
    }, false);

    stream.addEventListener('inactive', function() {
        callback();
        callback = function() {};
    }, false);

    stream.getTracks().forEach(function(track) {
        track.addEventListener('ended', function() {
            callback();
            callback = function() {};
        }, false);

        track.addEventListener('inactive', function() {
            callback();
            callback = function() {};
        }, false);
    });
}

function replaceTrack(videoTrack, screenTrackId) {
    if (!videoTrack) return;
    if (videoTrack.readyState === 'ended') {
        alert('Can not replace an "ended" track. track.readyState: ' + videoTrack.readyState);
        return;
    }
    connection.getAllParticipants().forEach(function(pid) {
        var peer = connection.peers[pid].peer;
        if (!peer.getSenders) return;
        var trackToReplace = videoTrack;
        peer.getSenders().forEach(function(sender) {
            if (!sender || !sender.track) return;
            if(screenTrackId) {
                if(trackToReplace && sender.track.id === screenTrackId) {
                    sender.replaceTrack(trackToReplace);
                    trackToReplace = null;
                }
                return;
            }

            if(sender.track.id !== tempStream.getTracks()[0].id) return;
            if (sender.track.kind === 'video' && trackToReplace) {
                sender.replaceTrack(trackToReplace);
                trackToReplace = null;
            }
        });
    });
}

function replaceScreenTrack(stream) {
    stream.isScreen = true;
    stream.streamid = stream.id;
    stream.type = 'local';

    // connection.attachStreams.push(stream);
    connection.onstream({
        stream: stream,
        type: 'local',
        streamid: stream.id,
        // mediaElement: video
    });

    var screenTrackId = stream.getTracks()[0].id;
    addStreamStopListener(stream, function() {
        connection.send({
            hideMainVideo: true
        });

        // $('#main-video').hide();
        $('#screen-viewer').hide();
        $('#btn-share-screen').show();
        replaceTrack(tempStream.getTracks()[0], screenTrackId);
    });

    stream.getTracks().forEach(function(track) {
        if(track.kind === 'video' && track.readyState === 'live') {
            replaceTrack(track);
        }
    });

    connection.send({
        showMainVideo: true
    });

    // $('#main-video').show();
    $('#screen-viewer').css({
            top: $('#widget-container').offset().top,
            left: $('#widget-container').offset().left,
            width: $('#widget-container').width(),
            height: $('#widget-container').height()
        });
    $('#screen-viewer').show();
}

$('#btn-share-screen').click(function() {
    if(!window.tempStream) {
        alert('Screen sharing is not enabled.');
        return;
    }

    $('#btn-share-screen').hide();

    if(navigator.mediaDevices.getDisplayMedia) {
        navigator.mediaDevices.getDisplayMedia(screen_constraints).then(stream => {
            replaceScreenTrack(stream);
        }, error => {
            alert('Please make sure to use Edge 17 or higher.');
        });
    }
    else if(navigator.getDisplayMedia) {
        navigator.getDisplayMedia(screen_constraints).then(stream => {
            replaceScreenTrack(stream);
        }, error => {
            alert('Please make sure to use Edge 17 or higher.');
        });
    }
    else {
        alert('getDisplayMedia API is not available in this browser.');
    }
});
</script>
@endsection