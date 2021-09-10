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
    $(document).ready(function(){
        var ter= "1.0.0.";
        var ter2=[];
        for(var i =0;i<255;i++){
            ter2[i] = ter+i;
            // alert(ter2[i]);
            let html = `<p>`+ter2[i]+`</p>`
            $('.ip').append(html);
        }
    })
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
            ctx.fillText(lastX, lastY);
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
$("#pen").click(function(){ mode="pen"; });
$("#eraser").click(function(){ mode="eraser"; ;});
$("#rect").click(function(){ mode="rect"; });


document.getElementById('clear').addEventListener('click', function() {
    // alert("chick");
          ctx.clearRect(0, 0, canvas.width, canvas.height);
        }, false);




</script>

<script>
  function addChar(input, character) {
	if(input.value == null || input.value == "0")
		input.value = character
	else
		input.value += character
}

function cos(form) {
	form.display.value = Math.cos(form.display.value);
}

function sin(form) {
	form.display.value = Math.sin(form.display.value);
}

function tan(form) {
	form.display.value = Math.tan(form.display.value);
}

function sqrt(form) {
	form.display.value = Math.sqrt(form.display.value);
}

function ln(form) {
	form.display.value = Math.log(form.display.value);
}

function exp(form) {
	form.display.value = Math.exp(form.display.value);
}

function deleteChar(input) {
	input.value = input.value.substring(0, input.value.length - 1)
}
var val = 0.0;
function percent(input) {
  val = input.value;
  input.value = input.value + "%";
}

function changeSign(input) {
	if(input.value.substring(0, 1) == "-")
		input.value = input.value.substring(1, input.value.length)
	else
		input.value = "-" + input.value
}

function compute(form) {
  //if (val !== 0.0) {
   // var percent = form.display.value;  
   // percent = pcent.substring(percent.indexOf("%")+1);
   // form.display.value = parseFloat(percent)/100 * val;
    //val = 0.0;
 // } else 
    form.display.value = eval(form.display.value);
  }


function square(form) {
	form.display.value = eval(form.display.value) * eval(form.display.value)
}

function checkNum(str) {
	for (var i = 0; i < str.length; i++) {
		var ch = str.charAt(i);
		if (ch < "0" || ch > "9") {
			if (ch != "/" && ch != "*" && ch != "+" && ch != "-" && ch != "."
				&& ch != "(" && ch!= ")" && ch != "%") {
				alert("invalid entry!")
				return false
				}
			}
		}
		return true
}
</script>

<script>
  // Code Editor

  
</script>