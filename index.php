<?php
header(location:"https://azmiproductions.com/");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="SHORTCUT ICON" href="https://i.ibb.co/Bwc2hbT/latest-logo-no-background.png" type="image/x-icon"/>
    <title>Didi xx Amanda</title>
<meta property="og:type" content="website">
<meta property="og:title" content="Didi xx Amanda">
<meta property="og:description" content="Welcome to my resume">
<meta property="og:image" content="https://s1.favim.com/orig/151117/adorable-cute-gif-kawaii-Favim.com-3587501.gif">
<meta property="og:site_name" content="sincerely didi" />
    <script src="rokiah.js"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://azmiproductions.com/css/style.css">
    <style>
 @font-face {
  font-family: hackerfont;
  src: url(hackerfont.otf);
} 
@font-face {
  font-family: spartan;
  src: url(spartan.otf);
} 
.home .content h3{
    font-size: 5rem;
    text-transform: uppercase;
    color:#fff;
    font-family:spartan;
    font-weight:normal;
}
.heading span{
    color:blue;
    font-family:hackerfont;
    text-transform: uppercase;
     font-weight:normal;
}
.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    background:url(https://i.ibb.co/FH1bpWg/home-img.png) no-repeat;
    background-size: cover;
    background-position: center;
}
    .hacker .box-container .box{
    text-align: center;
    border:var(--border);
    padding: 2rem;
    background-color : black;
    
}

.hacker .box-container .box .icons a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    border:var(--border);
    color:#fff;
    margin:.3rem;
}

.hacker .box-container .box .icons a:hover{
    background:var(--main-color);
}

.hacker .box-container .box .image{
    padding: 2.5rem 0;
}

.hacker .box-container .box .image img{
    height: 15rem;
}
.hacker .box-container .box .content h3{
    color:#fff;
    font-size: 2.5rem;
    font-family:hackerfont;
    font-weight:normal;
}

.hacker .box-container .box .content .stars{
    padding: 1.5rem;
}

.hacker .box-container .box .content .stars i{
    font-size: 1.7rem;
    color: var(--main-color);
}

.hacker .box-container .box .content .price{
    color:#fff;
    font-size: 2.5rem;
}

.hacker .box-container .box .content .price span{
    
    font-weight: lighter;
    font-size: 1.5rem;
}

    </style>
<script language="JavaScript">
 
function tb5_makeArray(n){
 this.length = n;
 return this.length;
}
 
tb5_messages = new tb5_makeArray(7);
tb5_messages[0] = "DIDI XX AMANDA";
tb5_messages[1] = "Welcome to my resume";
tb5_messages[2] = "Thank you for your support";
tb5_messages[3] = "thank you for your visit too";
tb5_messages[4] = "Still in beta version";
tb5_messages[5] = "hi im didi";
tb5_messages[6] = "holla";
tb5_rptType = 'infinite';
tb5_rptNbr = 20;
tb5_speed = 30;
tb5_delay = 2000;
var tb5_counter=2;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
 k = Math.round(Math.random() * (arr.length - i - 1)) + i;
 temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
 if (tb5_currMsg == tb5_messages.length-1){
 if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
 clearTimeout(tb5_timerID);
 return;
 }
 tb5_counter++;
 tb5_currMsg=0;
 }
 else{
 tb5_currMsg++;
 }
 n=0;
 tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
 }
 tb5_arr = tb5_shuffle(tb5_arr);
 tb5_sp=tb5_delay;
}
else{
 tb5_sp=tb5_speed;
 k = tb5_arr[n];
 tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
 tb5_stsmsg = "";
 for (var i=0; i<tb5_sts.length; i++)
 tb5_stsmsg += tb5_sts[i];
 document.title = tb5_stsmsg;
 n++;
 }
 tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
 tb5_init(0);
}
tb5_randomizetitle();
 
</script>
<script language="javascript">
var text='ANARCHIST ALLIES';
var delay=5;
var Xoff=0;
var Yoff=-30;
var txtw=10;
var beghtml='<font face="Agency FB" color="#FFFFFF" style="" size="4em"><b>';
var endhtml='</b></font>';
ns4 = (navigator.appName.indexOf("Netscape")>=0 && document.layers)? true: false;
ie4 = (document.all && !document.getElementById)? true : false;
ie5 = (document.all && document.getElementById)? true : false;
ns6 = (document.getElementById && navigator.appName.indexOf("Netscape")>=0 )? true: false;
var txtA=new Array();
text=text.split(');
var x1=0;
var y1=-50;
var t=';
for(i=1;i<=text.length;i++){
t+=(ns4)? '<layer left="0" top="-100" width="'+txtw+'" name="txt'+i+'" height="1">' : '<div id="txt'+i+'" style="position:absolute; top:-100px; left:0px; height:1px; width:'+txtw+'; visibility:visible;">';
t+=beghtml+text[i-1]+endhtml;
t+=(ns4)? '</layer>' : '</div>';
}
document.write(t);
function moveid(id,x,y){
if(ns4)id.moveTo(x,y);
else{
id.style.left=x+'px';
id.style.top=y+'px';
}}
function animate(evt){
x1=Xoff+((ie4||ie5)?event.clientX+document.body.scrollLeft:evt.pageX);
y1=Yoff+((ie4||ie5)?event.clientY+document.body.scrollTop:evt.pageY);
}
function getidleft(id){
if(ns4)return id.left;
else return parseInt(id.style.left);
}
function getidtop(id){
if(ns4)return id.top;
else return parseInt(id.style.top);
}
function getwindowwidth(){
if(ie4||ie5)return document.body.clientWidth+document.body.scrollLeft;
else return window.innerWidth+pageXOffset;
}
function movetxts(){
for(i=text.length;i>1;i=i-1){
if(getidleft(txtA[i-1])+txtw*2>=getwindowwidth()){
moveid(txtA[i-1],0,-100);
moveid(txtA[i],0,-100);
}else moveid(txtA[i], getidleft(txtA[i-1])+txtw, getidtop(txtA[i-1]));
}
moveid(txtA[1],x1,y1);
}
window.onload=function(){
for(i=1;i<=text.length;i++)txtA[i]=(ns4)?document.layers['txt'+i]:(ie4)?document.all['txt'+i]:document.getElementById('txt'+i);
if(ns4)document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=animate;
setInterval('movetxts()',delay);
}
</script>
</head>
<body onclick="playAudio();" class="">
<audio id="sec" idm_id="823202817">
<source src="https://l.top4top.io/m_2396b4ytr1.mp3" type="audio/mpeg"></audio> <div class="memeck" loop=infinite>
<script>  var x = document.getElementById("sec");  function playAudio() {  x.play();  }    function myFunction() {    var element = document.body; element.classList.toggle("dark-mode"); } function changeImage() { if (document.getElementById("imgClickAndChange").src == "body") { document.getElementById("imgClickAndChange").src = "body"; } else { document.getElementById("imgClickAndChange").src = "body"; } }
     </script>
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
<SCRIPT LANGUAGE="JavaScript">  
<!-- Disable  
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}  
//-->  
</script>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="https://media.giphy.com/media/ZKs4hrReeL5lekREc3/giphy.gif" alt="">
<div class="credit"><span>    Didi xx  </span> Amanda</div>
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About Me</a>
        <a href="#skills">Skills</a>
    
    </nav>

    <div class="icons">
  
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

  

   
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Welcome To My Resume</h3>
        <p>Hello visitors, my name is Didi and feels free to explore my website okay !</p>
        <!--<a href="#" class="btn"></a> -->
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> me </h1>

    <div class="row">

        <div class="image">
            <img src="https://media.giphy.com/media/JOjyX7x0ePvhDV40W9/giphy.gif" alt="">
        </div>

        <div class="content">
            <h3>WHO I AM</h3>
            <p>MY NAME IS DIDI AND I AM A STUDENT SOMEWHERE IN MALAYSIA AND YEA YOU MAY THINK</p>
            <p>THAT I AM TOO YOUNG AND IMMATURE IN THIS HACKING THINGS BUT NO I AM NOT.I AM ONE OF THE MEMBERS OF ELITEGHOST MALAYSIA AND ACTIVELY GIVING LESSON TO THE OTHERS SO YEA OUHH BEFORE I FORGET THIS WEBSITE IS STILL IN EARLY VERSION SO SORRY IF IT WASN'T COMPLETE OK BYEE.</p>
            <p>"LIVING THE DARK , SERVING THE LIGHT"</p>
            <!--<a href="#" class="btn">learn more</a>-->
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->



<!-- menu section ends -->

<section class="products" id="skills">

    <h1 class="heading">My <span>Skills</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="https://www.vskills.in/certification/tutorial/wp-content/uploads/2013/05/introduction-white-hat-hacking-security.jpg" alt="">
            </div>
            <div class="content">
                <h3>White Hat Hacking</h3>
                <div class="price"><span></span></div>
            </div>
        </div>

          <div class="box">
            <div class="image">
                <img src="https://cdn.pixabay.com/photo/2016/11/19/22/25/html5-1841458_1280.png" alt="">
            </div>
            <div class="content">
                <h3>Web Development</h3>
                <div class="price"><span></span></div>
            </div>
        </div>

          <div class="box">
            <div class="image">
                <img src="https://cdn-icons-png.flaticon.com/512/1643/1643996.png" alt="">
            </div>
            <div class="content">
                <h3>Data Analysis </h3>
                <div class="price"><span></span></div>
            </div>
        </div>
        
          
           <div class="box">
            <div class="image">
                <img src="https://icons.iconarchive.com/icons/hopstarter/soft-scraps/256/My-Videos-icon.png" alt="">
            </div>
            <div class="content">
                <h3>Videography </h3>
                <div class="price"><span></span></div>
            </div>
        </div>
        
         <div class="box">
            <div class="image">
                <img src="https://png4u.com/wp-content/uploads/2020/02/Adobe-Photoshop-Logo-PNG-11.png" alt="">
            </div>
            <div class="content">
                <h3>Designing</h3>
                <div class="price"><span></span></div>
            </div>
        </div>
        
    </div>

</section>

<!-- review section starts  -->


<!-- review section ends -->

<!-- contact section starts  -->



<!-- contact section ends -->



<!-- footer section starts  -->

<section class="footer">



    

    <div class="credit"><span>DIDI XX AMANDA </span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















      
<!-- custom js file link  -->
<script src="js/script.js"></script>
<!-- Start of SleekFlow Embed Code -->
        <script src="https://chat.sleekflow.io/embed_iframe.js" 
          data-id="travischatwidget"
          data-companyid="f639799b-3789-4c1f-abd3-75dc2a0386df"
          type="text/javascript">
        </script>
<!-- End of SleekFlow Embed Code -->
      
</body>
</html>
