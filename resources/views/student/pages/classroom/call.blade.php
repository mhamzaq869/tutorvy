@extends('student.layouts.app')
<link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/booknow.css') }}" rel="stylesheet">
@section('content')
   <style>
       button {
  margin: 0 20px 0 0;
  width: 83px;
}

button#hangupButton {
    margin: 0;
}

video {
  --width: 45%;
  width: var(--width);
  height: calc(var(--width) * 0.75);
  margin: 0 0 20px 0;
  vertical-align: top;
}

video#localVideo {
  margin: 0 20px 20px 0;
}

div.box {
  margin: 1em;
}

@media screen and (max-width: 400px) {
  button {
    width: 83px;
    margin: 0 11px 10px 0;
  }

  video {
    height: 90px;
    margin: 0 0 10px 0;
    width: calc(50% - 7px);
  }
  video#localVideo {
    margin: 0 10px 20px 0;
  }

}

.hidden {
  display: none;
}

.highlight {
  background-color: #eee;
  font-size: 1.2em;
  margin: 0 0 30px 0;
  padding: 0.2em 1.5em;
}

.warning {
  color: red;
  font-weight: 400;
}

@media screen and (min-width: 1000px) {
  /* hack! to detect non-touch devices */
  div#links a {
    line-height: 0.8em;
  }
}

audio {
  max-width: 100%;
}

body {
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  margin: 0;
  padding: 1em;
  word-break: break-word;
}

button {
  background-color: #d84a38;
  border: none;
  border-radius: 2px;
  color: white;
  font-family: 'Roboto', sans-serif;
  font-size: 0.8em;
  margin: 0 0 1em 0;
  padding: 0.5em 0.7em 0.6em 0.7em;
}

button:active {
  background-color: #cf402f;
}

button:hover {
  background-color: #cf402f;
}

button[disabled] {
  color: #ccc;
}

button[disabled]:hover {
  background-color: #d84a38;
}

canvas {
  background-color: #ccc;
  max-width: 100%;
  width: 100%;
}

code {
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}

div#container {
  margin: 0 auto 0 auto;
  max-width: 60em;
  padding: 1em 1.5em 1.3em 1.5em;
}

div#links {
  padding: 0.5em 0 0 0;
}

h1 {
  border-bottom: 1px solid #ccc;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  margin: 0 0 0.8em 0;
  padding: 0 0 0.2em 0;
}

h2 {
  color: #444;
  font-weight: 500;
}

h3 {
  border-top: 1px solid #eee;
  color: #666;
  font-weight: 500;
  margin: 10px 0 10px 0;
  white-space: nowrap;
}

li {
  margin: 0 0 0.4em 0;
}

html {
  /* avoid annoying page width change
  when moving from the home page */
  overflow-y: scroll;
}

img {
  border: none;
  max-width: 100%;
}

input[type=radio] {
  position: relative;
  top: -1px;
}

p {
  color: #444;
  font-weight: 300;
}

p#data {
  border-top: 1px dotted #666;
  font-family: Courier New, monospace;
  line-height: 1.3em;
  max-height: 1000px;
  overflow-y: auto;
  padding: 1em 0 0 0;
}

p.borderBelow {
  border-bottom: 1px solid #aaa;
  padding: 0 0 20px 0;
}

section p:last-of-type {
  margin: 0;
}

section {
  border-bottom: 1px solid #eee;
  margin: 0 0 30px 0;
  padding: 0 0 20px 0;
}

section:last-of-type {
  border-bottom: none;
  padding: 0 0 1em 0;
}

select {
  margin: 0 1em 1em 0;
  position: relative;
  top: -1px;
}

h1 span {
  white-space: nowrap;
}

a {
  color: #1D6EEE;
  font-weight: 300;
  text-decoration: none;
}

h1 a {
  font-weight: 300;
  margin: 0 10px 0 0;
  white-space: nowrap;
}

a:hover {
  color: #3d85c6;
  text-decoration: underline;
}

a#viewSource {
  display: block;
  margin: 1.3em 0 0 0;
  border-top: 1px solid #999;
  padding: 1em 0 0 0;
}

div#errorMsg p {
  color: #F00;
}

div#links a {
  display: block;
  line-height: 1.3em;
  margin: 0 0 1.5em 0;
}

div.outputSelector {
  margin: -1.3em 0 2em 0;
}

p.description {
  margin: 0 0 0.5em 0;
}

strong {
  font-weight: 500;
}

textarea {
  resize: none;
  font-family: 'Roboto', sans-serif;
}

video {
  background: #222;
  margin: 0 0 20px 0;
  /* --width: 100%; */
  width: var(--width);
  height: calc(var(--width) * 0.75);
}

ul {
  margin: 0 0 0.5em 0;
}

@media screen and (max-width: 650px) {
  .highlight {
    font-size: 1em;
    margin: 0 0 20px 0;
    padding: 0.2em 1em;
  }

  h1 {
    font-size: 24px;
  }
}

@media screen and (max-width: 550px) {
  button:active {
    background-color: darkRed;
  }

  h1 {
    font-size: 22px;
  }
}

@media screen and (max-width: 450px) {
  h1 {
    font-size: 20px;
  }
}
   </style>    

</head>

<body>

<div id="container">
    <h1><a href="//webrtc.github.io/samples/" title="WebRTC samples homepage">WebRTC samples</a>
        <span>Peer connection</span></h1>

    <p>This sample shows how to setup a connection between two peers using
        <a href="https://developer.mozilla.org/en-US/docs/Web/API/RTCPeerConnection">RTCPeerConnection</a>.
    </p>

    <video id="localVideo" playsinline autoplay muted></video>
    <video id="remoteVideo" playsinline autoplay></video>

    <div class="box">
        <button id="startButton">Start</button>
        <button id="callButton">Call</button>
        <button id="hangupButton">Hang Up</button>
    </div>

    <p>View the console to see logging. The <code>MediaStream</code> object <code>localStream</code>, and the <code>RTCPeerConnection</code>
        objects <code>pc1</code> and <code>pc2</code> are in global scope, so you can inspect them in the console as
        well.</p>

    <p>For more information about RTCPeerConnection, see <a href="http://www.html5rocks.com/en/tutorials/webrtc/basics/"
                                                            title="HTML5 Rocks article about WebRTC by Sam Dutton">Getting
        Started With WebRTC</a>.</p>


    <a href="https://github.com/webrtc/samples/tree/gh-pages/src/content/peerconnection/pc1"
       title="View source for this page on GitHub" id="viewSource">View source on GitHub</a>

</div>

<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
@endsection
@section('scripts')
@include('js_files.call')
@endsection
