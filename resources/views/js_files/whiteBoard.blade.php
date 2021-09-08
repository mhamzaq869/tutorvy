<!-- <script>
  // When true, moving the mouse draws on the canvas
let isDrawing = false;
let x = 0;
let y = 0;

const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');

// event.offsetX, event.offsetY gives the (x,y) offset from the edge of the canvas.

// Add the event listeners for mousedown, mousemove, and mouseup
canvas.addEventListener('mousedown', e => {
  x = e.offsetX;
  y = e.offsetY;
  isDrawing = true;
});

canvas.addEventListener('mousemove', e => {
  if (isDrawing === true) {
    drawLine(context, x, y, e.offsetX, e.offsetY);
    x = e.offsetX;
    y = e.offsetY;
  }
});

window.addEventListener('mouseup', e => {
  if (isDrawing === true) {
    drawLine(context, x, y, e.offsetX, e.offsetY);
    x = 0;
    y = 0;
    isDrawing = false;
  }
});

function drawLine(context, x1, y1, x2, y2) {
  context.beginPath();
  context.strokeStyle = 'black';
  context.lineWidth = 1;
  context.moveTo(x1, y1);
  context.lineTo(x2, y2);
  context.stroke();
  context.closePath();
}
document.getElementById('clear').addEventListener('click', function() {
    // alert("chick");
          context.clearRect(0, 0, canvas.width, canvas.height);
        }, false);
</script> -->



<script>
    var canvas=document.getElementById("canvas");
var ctx=canvas.getContext("2d");
var lastX;
var lastY;
var strokeColor="red";
var strokeWidth=5;
var mouseX;
var mouseY;
var canvasOffset=$("#canvas").offset();
var offsetX=canvasOffset.left;
var offsetY=canvasOffset.top;
var isMouseDown=false;


function handleMouseDown(e){
  mouseX=parseInt(e.clientX-offsetX);
  mouseY=parseInt(e.clientY-offsetY);

  // Put your mousedown stuff here
  lastX=mouseX;
  lastY=mouseY;
  isMouseDown=true;
}

function handleMouseUp(e){
  mouseX=parseInt(e.clientX-offsetX);
  mouseY=parseInt(e.clientY-offsetY);

  // Put your mouseup stuff here
  isMouseDown=false;
}

function handleMouseOut(e){
  mouseX=parseInt(e.clientX-offsetX);
  mouseY=parseInt(e.clientY-offsetY);

  // Put your mouseOut stuff here
  isMouseDown=false;
}

function handleMouseMove(e){
  mouseX=parseInt(e.clientX-offsetX);
  mouseY=parseInt(e.clientY-offsetY);

  // Put your mousemove stuff here
  if(isMouseDown){
    ctx.beginPath();
    if(mode=="pen"){
      ctx.globalCompositeOperation="source-over";
      ctx.moveTo(lastX,lastY);
      ctx.lineTo(mouseX,mouseY);
      ctx.stroke();     
    }else if(mode=="eraser"){
      ctx.globalCompositeOperation="destination-out";
      ctx.arc(lastX,lastY,8,0,Math.PI*2,false);
      ctx.fill();
    }
    else if(mode=="rect"){
        

            // ctx.beginPath();
            ctx.moveTo(lastX,lastY);
            ctx.lineTo(mouseX,mouseY);
                ctx.stroke();
    }
    else if(mode=="text"){
        ctx.font = "28px Georgia";
            ctx.fillStyle = "fuchsia";
            ctx.fillText(, lastX, lastY);
    }
    lastX=mouseX;
    lastY=mouseY;
  }
}

$("#canvas").mousedown(function(e){handleMouseDown(e);});
$("#canvas").mousemove(function(e){handleMouseMove(e);});
$("#canvas").mouseup(function(e){handleMouseUp(e);});
$("#canvas").mouseout(function(e){handleMouseOut(e);});

var mode="pen";
$("#pen").click(function(){ mode="pen"; alert(mode);});
$("#eraser").click(function(){ mode="eraser"; alert(mode);});
$("#rect").click(function(){ mode="rect"; alert(mode);});


document.getElementById('clear').addEventListener('click', function() {
    // alert("chick");
          ctx.clearRect(0, 0, canvas.width, canvas.height);
        }, false);
</script>