




<html><head><script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><link rel="stylesheet" href="http://static.jsbin.com/css/edit.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>.:: ~ Khanh Cloud ~::.</title>
<meta name="google-site-verification" content="Khanh Cloud"><meta name="google-site-verification" content="Khanh Cloud">
<meta name="google-site-verification" content="Khanh Cloud"><meta name="google-site-verification" content="Khanh Cloud">
<meta http-equiv="Content-Language" content="en-us-id"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><meta name="author" content=" Khanh Cloud ">
<meta name="description" content="Khanh Cloud"><meta name="robots schedule" content="auto">
<style type="text/css">BODY { background-image:url('http://i.imgur.com/8TtnhOo.jpg'); </style> 

<script language="javascript">
var rev = "fwd";
function titlebar(val)
{
var msg = "::. Cracker By Khanh Cloud .::";
var res = " ";
var speed = 100;
var pos = val;
msg = "===> "+msg+" <===";
var le = msg.length;
if(rev == "fwd"){
if(pos < le){
pos = pos+1;
scroll = msg.substr(0,pos);
document.title = scroll;
timer = window.setTimeout("titlebar("+pos+")",speed);
}
else{
rev = "bwd";
timer = window.setTimeout("titlebar("+pos+")",speed);
}
}
else{
if(pos > 0){
pos = pos-1;
var ale = le-pos;
scrol = msg.substr(ale,le);
document.title = scrol;
timer = window.setTimeout("titlebar("+pos+")",speed);
}
else{
rev = "fwd";
timer = window.setTimeout("titlebar("+pos+")",speed);
}
}
}
titlebar(0);
</script>
<script type="text/javascript">
var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:18px;color:#fff">*</span><\/div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
</script>		
<script>
if  ((document.getElementById) && 
window.addEventListener || window.attachEvent){

(function(){

//Configure here...

var xCol = "#ff0000";
var yCol = "#ffffff";
var zCol = "#0000ff";
var n = 6;   //number of dots per trail.
var t = 40;  //setTimeout speed.
var s = 0.2; //effect speed.

//End.

var r,h,w;
var d = document;
var my = 10;
var mx = 10;
var stp = 0;
var evn = 360/3;
var vx = new Array();
var vy = new Array();
var vz = new Array();
var dy = new Array();
var dx = new Array();

var pix = "px";

var strictmod = ((document.compatMode) && 
document.compatMode.indexOf("CSS") != -1);


var domWw = (typeof window.innerWidth == "number");
var domSy = (typeof window.pageYOffset == "number");
var idx = d.getElementsByTagName('div').length;

for (i = 0; i < n; i++){
var dims = (i+1)/2;
d.write('<div id="x'+(idx+i)+'" style="position:absolute;'
+'top:0px;left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+xCol+';font-size:'+dims+'px"><\/div>'

+'<div id="y'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+yCol+';font-size:'+dims+'px"><\/div>'

+'<div id="z'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+zCol+';font-size:'+dims+'px"><\/div>');
}

if (domWw) r = window;
else{ 
  if (d.documentElement && 
  typeof d.documentElement.clientWidth == "number" && 
  d.documentElement.clientWidth != 0)
  r = d.documentElement;
 else{ 
  if (d.body && 
  typeof d.body.clientWidth == "number")
  r = d.body;
 }
}


function winsize(){
var oh,sy,ow,sx,rh,rw;
if (domWw){
  if (d.documentElement && d.defaultView && 
  typeof d.defaultView.scrollMaxY == "number"){
  oh = d.documentElement.offsetHeight;
  sy = d.defaultView.scrollMaxY;
  ow = d.documentElement.offsetWidth;
  sx = d.defaultView.scrollMaxX;
  rh = oh-sy;
  rw = ow-sx;
 }
 else{
  rh = r.innerHeight;
  rw = r.innerWidth;
 }
h = rh; 
w = rw;
}
else{
h = r.clientHeight; 
w = r.clientWidth;
}
}


function scrl(yx){
var y,x;
if (domSy){
 y = r.pageYOffset;
 x = r.pageXOffset;
 }
else{
 y = r.scrollTop;
 x = r.scrollLeft;
 }
return (yx == 0)?y:x;
}


function mouse(e){
var msy = (domSy)?window.pageYOffset:0;
if (!e) e = window.event;    
 if (typeof e.pageY == 'number'){
  my = e.pageY - msy + 16;
  mx = e.pageX + 6;
 }
 else{
  my = e.clientY - msy + 16;
  mx = e.clientX + 6;
 }
if (my > h-65) my = h-65;
if (mx > w-50) mx = w-50;
}



function assgn(){
for (j = 0; j < 3; j++){
 dy[j] = my + 50 * Math.cos(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) + scrl(0) + pix;
 dx[j] = mx + 50 * Math.sin(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) * Math.sin(stp/4) + pix;
}
stp+=s;

for (i = 0; i < n; i++){
 if (i < n-1){
  vx[i].top = vx[i+1].top; vx[i].left = vx[i+1].left; 
  vy[i].top = vy[i+1].top; vy[i].left = vy[i+1].left;
  vz[i].top = vz[i+1].top; vz[i].left = vz[i+1].left;
 } 
 else{
  vx[i].top = dy[0]; vx[i].left = dx[0];
  vy[i].top = dy[1]; vy[i].left = dx[1];
  vz[i].top = dy[2]; vz[i].left = dx[2];
  }
 }
setTimeout(assgn,t);
}


function init(){
for (i = 0; i < n; i++){
 vx[i] = document.getElementById("x"+(idx+i)).style;
 vy[i] = document.getElementById("y"+(idx+i)).style;
 vz[i] = document.getElementById("z"+(idx+i)).style;
 }
winsize();
assgn();
}


if (window.addEventListener){
 window.addEventListener("resize",winsize,false);
 window.addEventListener("load",init,false);
 document.addEventListener("mousemove",mouse,false);
}  
else if (window.attachEvent){
 window.attachEvent("onload",init);
 document.attachEvent("onmousemove",mouse);
 window.attachEvent("onresize",winsize);
} 

})();
}//End.
</script>
<script>

function muter2(){

scrW=screen.availWidth

scrH=screen.availHeight

window.moveTo(0,0)

window.resizeTo(10,10)

window.focus()

for(x=0;x<80;x++){

window.resizeTo(10,scrH*x/80)

}

for(y=0;y<80;y++){

window.resizeTo(scrW*y/80,scrH)

}

window.resizeTo(scrW,scrH)

}

document.oncontextmenu=new Function("muter2();return false");

function keypressed(){alert("What Đờ heo! Mi Định Làm kì cùn cặc gì vậy !! :v) ");}

document.onkeydown=keypressed;

function kasih_tau(){

alert('Your System Has Been Hacked! By Khanh Cloud!');

}

</script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #00FF33}
.style3 {color: #FF0000}
.style6 {color: #FFFFFF; font-style: Bold; }
.style7 {color: #FFFFFF; font-size: 20px; }
body {
background-color:black;

background-image:url('http://i.imgur.com/NUfpnch.png');
background-repeat:no-repeat;
background-position:center top;
margin-top:40px;
margin-left:-35px;
}
-->
</style>
<style>
td {background-color: rgba(0, 0, 128, 0); font-family: Courier New; font-size:9pt; color:#ffffff; border-color: rgba(0, 0, 128, 0);border-width:1pt; border-style:solid; border-collapse:collapse;padding:0pt 3pt;vertical-align:top; }
table {border-left:1pt dash #88aace; border-right:1pt dash #88aace; border-top:0pt dash #88aace; border-bottom:0pt dash #88aace; }
A:Link, A:Visited { color: #88aace; }
A.no:Link, A.no:Visited { color: #88aace;text-decoration: none; }
A:Hover, A:Visited:Hover , A.no:Hover, A.no:Visited:Hover { color: #88aace; background-color:#2e2e2e; text-decoration: overline underline; }
</style>
<style>.layermensaje {
FONT-SIZE: 10pt; COLOR: #2e2e2e; LINE-HEIGHT: 10pt; FONT-FAMILY: "Arial"
}
.style1 {
color: #FFFFFF;
}
</style>
</head><body bgcolor="black" oncontextmenu="return false" onkeydown="return false" onload="type_text()" onclick="alert(&quot;.:: What The Fuck You Young Ones ::. (:&quot;)">

<p align="center"><a name="Khanh Cloud"></a><a name=""></a>
</p><div style="margin: 15px auto; text-align: center; width: 1540px; height: 47px;"></div>
<script language="JavaScript">
function openpupup(url){
window.open(url,"","toolbar=No,menubar=No,location=No,scrollbars=No,resizable=Yes,status=No,width=436,height=535,left=250,top=175");
}
function cmanresult(url){
window.open(url,"","toolbar=No,menubar=No,location=No,scrollbars=No,resizable=Yes,status=No,width=650,height=500,left=250,top=175");
}
</script>
<div align="center"><span style="height: 50px;"><a false="" bgcolor="blue"><font style="font-size: 12pt;" face="Courier New">
</font></a><table height="0" width="620"><tbody><tr><td><div id="myContent">
<script type="text/javascript">
var charIndex = -1;
var stringLength = 0;
var inputText;
function writeContent(init){
if(init){
inputText = document.getElementById('contentToWrite').innerHTML;
}
if(charIndex==-1){
charIndex = 0;
stringLength = inputText.length;
}
var initString = document.getElementById('myContent').innerHTML;
initString = initString.replace(/<SPAN.*$/gi,"");
var theChar = inputText.charAt(charIndex);
var nextFourChars = inputText.substr(charIndex,4);
if(nextFourChars=='<BR>' || nextFourChars=='<br>'){
theChar = '<BR>';
charIndex+=3;
}
initString = initString + theChar + "<SPAN id='blink'>_</SPAN>";
document.getElementById('myContent').innerHTML = initString;
charIndex = charIndex/1 +1;
if(charIndex%2==1){
document.getElementById('blink').style.display='none';
}else{
document.getElementById('blink').style.display='inline';
}
if(charIndex<=stringLength){
setTimeout('writeContent(false)',90);
}else{
blinkSpan();
}
}
var currentStyle = 'inline';
function blinkSpan(){
if(currentStyle=='inline'){
currentStyle='none';
}else{
currentStyle='inline';
}
document.getElementById('blink').style.display = currentStyle;
setTimeout('blinkSpan()',150);
}
msg = "::::Khanh Cloud:::::";
msg = " " + msg;pos = 0;
function scrollMSG() {
document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
pos++;
if (pos > msg.length) pos = 0
window.setTimeout("scrollMSG()",500);
}
scrollMSG();
</script><center>
Microsoft Windows [Version 6.1.7600]</br>
(C) Copyright 2009 Microsoft Corporation. All right reserved.
<div width="600" id="contentToWrite" style="display: none; width: 605px; height: 70px;" text-decoration="" overline="" class="tip">
[+ +] -_-_-_-_-_-_-_-_-_-_-_-_ Checked By: Khanh Cloud _-_-_-_-_-_-_-_-_-_-_-_-<br/>
[+] C:\Administrator\Khanh Cloud\.| SHUT DOWN .<br/>
[+] C:\Administrator\Khanh Cloud\.| We Are Guard Hacking Team <br/> 
[-] C:\Administrator\Khanh Cloud\.| We Come From The Country Of VietNam .<br/>
[-] C:\Administrator\Khanh Cloud\.| Your site Has Been HACKED...!!! <br/>
[-] C:\Administrator\Khanh Cloud\.| Your Security is Low !!!! <br/>
[-] C:\Administrator\Khanh Cloud\.| If You Do Not Fix Error .<br/>
[-] C:\Administrator\Khanh Cloud\.| We will ComeBack....<br/>
[-] C:\Administrator\Khanh Cloud\.| ConTac: .............<br/> 
[-] C:\Administrator\Khanh Cloud\.| https://www.facebook.com/<br/>
[-] C:\Administrator\Khanh Cloud\.| a*************@gmail.com<br/>
[-] C:\Administrator\Khanh Cloud\.| Thank To Admin Because Read This Message :D<br/>
[-] C:\Administrator\Khanh Cloud\.| Hello And Goodbye...! :D<br/>
[+ +] -_-_-_-_-_-_-_-_-_-_-_-_ Checked By: Khanh Cloud _-_-_-_-_-_-_-_-_-_-_-_-<br/><br/>
[+] C:\Administrator\Khanh Cloud\.| 
</td></tr></tbody></table><p class="style1"><a false="" bgcolor="#000000"><font style="font-size: 8pt;" face="Courier New">&nbsp;</font></a>
<span></span></p><p class="style1"><span style="height: 50px;"><a false="" bgcolor="#000000"> <span class="style1">
<script type="text/javascript">
writeContent(true);
</script>

<script type="text/javascript">
var trailimage=["http://thietkewebdep.org/media/k2/items/2014/05/vnflag1.gif", 100, 60]
var offsetfrommouse=[-5,20]
var displayduration=0
if (document.getElementById || document.all)
document.write('<div id="trailimageid" style="position:absolute;visibility:visible;left:0px;top:0px;width:1px;height:1px"><img src="'+trailimage[0]+'" border="0" width="'+trailimage[1]+'px" height="'+trailimage[2]+'px"></div>')

function gettrailobj(){
if (document.getElementById)
return document.getElementById("trailimageid").style
else if (document.all)
return document.all.trailimagid.style
}

function truebody(){
return (!window.opera && document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function hidetrail(){
gettrailobj().visibility="hidden"
document.onmousemove=""

}

function followmouse(e){
var xcoord=offsetfrommouse[0]
var ycoord=offsetfrommouse[1]
if (typeof e != "undefined"){
xcoord+=e.pageX
ycoord+=e.pageY
}
else if (typeof window.event !="undefined"){
xcoord+=truebody().scrollLeft+event.clientX
ycoord+=truebody().scrollTop+event.clientY
}
var docwidth=document.all? truebody().scrollLeft+truebody().clientWidth : pageXOffset+window.innerWidth-15
var docheight=document.all? Math.max(truebody().scrollHeight, truebody().clientHeight) : Math.max(document.body.offsetHeight, window.innerHeight)
if (xcoord+trailimage[1]+3>docwidth || ycoord+trailimage[2]> docheight)
gettrailobj().display="none"
else
gettrailobj().display=""
gettrailobj().left=xcoord+"px"
gettrailobj().top=ycoord+"px"
}

document.onmousemove=followmouse

if (displayduration>0)
setTimeout("hidetrail()", displayduration*1000)

</script>
<style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/fireblue.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/fireblue.gif"), auto;}</style>
<div class="widget-content">
</div></div></td><td align="left"><style type="text/css">#info-teja {z-index: 1000;background:-moz-linear-gradient(top,  #1F2326,  #555);background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(#555));box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;-moz-box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;-webkit-box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;width:460px;position: fixed;top:150px;left:0;margin-left:-350px;border:1px solid #444;background-position:top right no-repeat;height:35px;font:11px Arial;color:#eee;border-top-right-radius:8px;border-bottom-right-radius:8px;-moz-border-radius-topright:8px;-moz-border-radius-bottomright:8px;-webkit-border-top-right-radius:8px;-webkit-border-bottom-right-radius:8px;}#info-teja{-o-transition: all 1s ease-in;-moz-transition: all 1s ease-in;-webkit-transition: all 1s ease-in;} #info-teja:hover{width:400px;opacity:1.0;margin-left:0;}.Tejainbox {border:1px solid #444;width:320px; margin:0px 90px 10px 10px;background:#000;color:#ffffff; border-radius :20px; padding:5px 0;-moz-border-radius:20px; -webkit-border-radius:20px;-o-transition:all 2s ease-in;-moz-transition:all 2s ease-in;-webkit-transition:all 2s ease-in;opacity:0.2;}.Tejainbox:hover{opacity:1.0;box-shadow:1px 1px 15px #000; -moz-box-shadow: 1px 1px 15px #000; -webkit-box-shadow: 1px 1px 15px #000;background: #000;}.Tejainbox2 {margin:5px 10px;padding:0px 8px 10px;color:#FFFFFF;overflow:hidden;height:370px;}.teja15 {border-radius:15px;-moz-border-radius:15px;-webkit-border-radius:15px;}.Teja2 ul.bom {margin: 0; padding: 0;}.Tejainbox2 li {margin-left:20px;}.Tejainbox2 li a {color: #FFFFF; line-height: 4px; font-size: 11px;font-weight: bold; text-decoration:none;}.Tejainbox2 li a:hover {color: red;text-shadow: 0 1px 1px #000;}.Tejainbox2 h2 { font: 18px Droid Serif;font-weight:bold;padding:0 8px;color: #fffff;text-shadow: 0px 1px 1px #ddd;border-bottom: 1px solid #000000;}.Tejatouch {font-size:21px;font-weight:bold;font-family:Arial Narrow;float:right;margin: 3px 10px 0 0;-o-transition: all 0.5s ease-out;-moz-transition: all 0.5s ease-out;-webkit-transition: all 0.5s ease-out;text-decoration:blink;}.Tejatouch:hover{-o-transform: scale(2) rotate(720deg) translate(0px);-moz-transform: scale(2) rotate(720deg) translate(0px);-webkit-transform: scale(2) rotate(720deg) translate(0px);color: #fffff;}</style><div id="info-teja"><span class="Tejatouch">GK2K1</span><div class="Tejainbox"><div class="Tejainbox2 teja15">
<h2>      Personal information</h2>
 <center><img height="100x" src="http://i.imgur.com/aFGZypP.jpg" width="180px"> </center>
 <span class="style4"><center><font color="black">.</font></center></span><br>
<span class="style4"><center><font color="red"> The information : </font></center></span><br>
<span class="style4"> <center>Name: Khánh</center></span><br>
<span class="style4"> <center>Nick Name(fb): Trần Gia Khánh</center>  </span><br>
<span class="style4"> <center>Date of Birth: 02-03-2***</center>  </span><br>
<span class="style4"> <center>Country: Vietnamese</center></span><br>
<span class="style4"> <center>Gmail: ***********@gmail.com</center> </span><br>
<span class="style4"> <center>ConTact: www.spyhackerz.com/forum/members/khanhcloud.801/</center>  </span><br>
</div></div></div></td>
<iframe src="http://mp3.zing.vn/embed/song/IWBUUEE7?start=true" width="0" height="0" frameborder="0" allowfullscreen></iframe>


</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div><p align="center">
<font face="Impact" size="6"> </br><span style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:white; text-shadow: 0pt 0pt 0.3em red, 0pt 1pt 0.3em red;">Checked By </span><span style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:white; text-shadow: 0pt 0pt 0.3em violet, 0pt 1pt 0.3em violet;">Khanh Cloud</span></font></p>
<p align="center">
</font></marquee>
<hr>
<br>
<h2><font face="Orbitron" style="color:Black;text-shadow: 0 0 0.3em aqua,0 0 0.3em aqua;"><b><font size=2><strong><p align="right">#Copyright 2016 By Khanh Cloud</font></b>
<br>
</div>