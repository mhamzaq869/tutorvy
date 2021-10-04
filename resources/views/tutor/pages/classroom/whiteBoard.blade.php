@extends('tutor.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
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
  /* background-image:url("../assets/images/ico/graph.png") */
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
/* td input{
    width: 163px !important;
} */
.ck p{
    height:400px !important;
}
   </style>    

</head>

<body>
  <div class="container-fluid">
    <div class="row mb-5">
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
                                            <a class="nav-item nav-link board-nav active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Board 1 <i class="pl-2 fa fa-times text-dark"></i></a>
                                            <a class="nav-item nav-link board-nav" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Board 2 <i class="pl-2 fa fa-times text-dark"></i></a>
                                            <a class="mt-2 ml-2" href="#">Add new Board +</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row">
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
@endsection
