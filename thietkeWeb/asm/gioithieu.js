var canvas=document.querySelector("canvas");
canvas.width=260;
canvas.height=95;
var ctx=canvas.getContext("2d");

ctx.beginPath();
ctx.strokeStyle="blue";
ctx.fillStyle="blue";
ctx.moveTo(0, 50);
ctx.lineTo(100, 10);
ctx.lineTo(70, 50);
ctx.lineTo(100, 90);
ctx.lineTo(0, 50);
ctx.fill();
ctx.stroke();

ctx.beginPath();
ctx.strokeStyle="red";
ctx.fillStyle="red";
ctx.moveTo(120, 10);
ctx.lineTo(220, 50);
ctx.lineTo( 120, 90);
ctx.lineTo(150, 50);
ctx.lineTo(120,10);
ctx.fill();
ctx.stroke();