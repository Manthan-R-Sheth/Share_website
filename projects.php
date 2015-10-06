<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projects</title>
<link rel="stylesheet" href="menu/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="menu/script.js"></script>
<link href="button.css" rel="stylesheet" type="text/css" />
<link href="main.css" rel="stylesheet" type="text/css" />
 <!-- animsition css -->
  <link rel="stylesheet" href="pageload/animsition.css">
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link href="animation/animations.css" rel="stylesheet" type="text/css" />
<link href="slider/slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescrolljs"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="pageload/jquery.animsition.min.js"></script>
    <script type='text/javascript' src='slider/slider.js'></script>
    <script type='text/javascript' src='slider/fader.js'></script>
<script>
$(document).ready(function(){ 
$(".animsition").animsition();
    
	$("#project_home_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#project_home").offset().top
		}, 500);
	});
    $("#researchprojectButton").click(function() {
		$('html, body').animate({
			scrollTop: $("#researchproject").offset().top
		}, 500);
	});
	$("#doprojectButton").click(function() {
		$('html, body').animate({
			scrollTop: $("#doproject").offset().top
		}, 500);
	});
    $("#projectform").click(function() {
		$('html, body').animate({
			scrollTop: $("#projectformcon").offset().top
		}, 500);
	});
	
	
});

 </script>
 <script>
function validateForm()
{
	var  erremail , errname, errcaddress,errpaddress, errnum;
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
   x = document.getElementById("eemail");  
   x.innerHTML = "Not a valid email"; 
  erremail =  false;
  }
  else
  {
	   x = document.getElementById("eemail");  
   x.innerHTML = "";
	  erremail =  true;
  }
  var x=document.forms["myForm"]["from"].value;
if (x==null || x=="")
  {
  x = document.getElementById("efrom");  
   x.innerHTML = "Fill your name"; 
  errname =  false;
  }
  else
  {
	  x = document.getElementById("efrom");  
   x.innerHTML = ""; 
	  errname =  true;
  }
    var x=document.forms["myForm"]["message"].value;
if (x==null || x=="")
  {
  x = document.getElementById("emessage");  
   x.innerHTML = "Fill message"; 
  errpaddress =  false;
  }
  else
  {
	  x = document.getElementById("emessage");  
   x.innerHTML = "";
	  errpaddress =  true;
  }
      var x=document.forms["myForm"]["subject"].value;
if (x==null || x=="")
  {
  x = document.getElementById("esubject");  
   x.innerHTML = "Fill subject"; 
  errcaddress =  false;
  }
  else
  {
	    x = document.getElementById("esubject");  
   x.innerHTML = ""; 
	  errcaddress =  true;
  }

  var x=document.forms["myForm"]["number"].value;
  if (x==null || x==""||(x.length!=10))
  {
  x = document.getElementById("enumber");  
   x.innerHTML = "Enter right no."; 
  errnum =  false;
  }
  else
  {
  x = document.getElementById("enumber");  
   x.innerHTML = ""; 
	  errnum =  true;
  }

  return erremail&&errname&&errcaddress&&errnum&&errpaddress;
  
}
</script>

</head>
<body>
<div id="wrapper" class="animsition">
      <div id="header" >
              <div id="logo">
              <a href="index.php"><img title="HOME" src="image/logo.png" style="width:160px;height:60px;margin-left:20px" /></a> </div>
              <div id="index">
                     <div id='cssmenu'>
<ul>
   <li class='active'><a href="index.php"><span>Home</span></a></li>
   <li><a id="project_home_button"><span>Projects</span></a></li>
   <li><a href='news_updates.php'><span>News Updates</span></a></li>
   <li><a href='team.php'><span>Team</span></a></li>
   <li><a href='http://shareiitr.weebly.com' target="_blank"><span>Blog</span></a></li>
   <li class='last'><a href='contact_us.php'><span>Contact Us</span></a></li>
</ul>
</div>
              </div>
      </div>
         
      <div id="container">
             
             <div class="common_container" style="background-color:#FFF" id="project_home" >
                    
                   <div class="spacedcontainer">
                        <div class="heading" >
                                 Our Live Projects
                     </div>
                          <div class="bottom">
                                   <div id="live1">
                                         
                                   </div>
                                   
                                   
                     </div>
                   </div>
                   
                   
             </div>
             <div class="common_container" id="researchproject"  >
                    
                   <div class="spacedcontainer" >
                        <div class="heading"  >
                                 Our Research Projects
                     </div>
                          <div class="bottom">
                                    <div class="projectslider">
                                              <div id="gallery">
                                                  <div id="slider">
                                                          <div class="sliderdiv">
                                                                 <div class="resarchsliderimagediv" style="left:12%"><img src="image/Amaan.jpg" class="resarchsliderimage"  /><p><h2>Amaan Mansuri</h2><br><br> Why India being a hot Medical Tourism Destination is seeing stiff competition from other countries? </p></div>
                                                                 <div class="resarchsliderimagediv" style="left:72%"><img src="image/harsh.jpg" class="resarchsliderimage"  /><p><h2>Harsh Jain</h2><br><br> Indian Wind Energy Sector
 </p></div>
                                                                 </div>
                                                          <div class="sliderdiv">
                                                                  <div class="resarchsliderimagediv" style="left:12%;width:17%"><img src="image/pavel.jpg" class="resarchsliderimage"  /><p><h2>Pavel Gupta</h2><br><br> Mergers and Acquisitions in Telecom Sector in India
 </p></div>
                                                                 <div class="resarchsliderimagediv" style="left:72%;width:17%"><img src="image/subheycha.jpg" class="resarchsliderimage"  /><p><h2>Shubhechyya</h2><br><br> Civil Aviation Industry in India- It's Present and Future
</p></div>
                                                  
                                                          </div>
                                                          <div class="sliderdiv">
                                                            <div class="resarchsliderimagediv" style="left:12%;width:17%"><img src="image/surbhi.jpg" class="resarchsliderimage"  /><p><h2>Surbhi</h2><br><br> The scope of Telemedicine in India
 </p></div>
                                                            <div class="resarchsliderimagediv" style="left:72%;width:17%"><img src="image/rohan.jpg" class="resarchsliderimage"  /><p><h2>Rohan</h2><br><br> Mobile Banking in India
 </p></div>
                                                          </div>
                                                </div>
                                                   
                                                           <span id="prev">&nbsp;<</span>
                                                           <span id="next">&nbsp;></span>
                                      </div>
                            </div>
                                   
                     </div>
                   </div>
                   
                   
             </div>
             <div class="common_container"  id="doproject" >
                    
                   <div class="spacedcontainer" >
                        <div class="heading" style="color:#FFF" >
                                 Do Project With Us
                     </div>
                          <div class="bottom">
                                   
                                    <div class="doproject1 ">
                                              <div class="divtext">  
                                              </div>
                                   </div>
                                   <div class="doproject2 animatedParent">
                                                <img src="image/bulb.png" class="animated shake" style="width:40%;height:70%" />
                            </div>
                                   <div class="doproject3">
                                               <div class="divtext">  
                                                </div>
                                   </div>
                                   
                                   
                     </div>
                   </div>
                   
                   
             </div>
             <div class="common_container" id="projectformcon" style="background-color:#FFF">
                    
                   <div class="spacedcontainer" >
                        <div class="heading" >
                                 Share Your Idea With Us
                     </div>
                          <div class="bottom">
                                   <form  method="post" name="myForm" onsubmit="return validateForm();" action="<?php echo $_SERVER["PHP_SELF"];?>">  <div class="projectform_left">
                                   <h2 class="subheading">Your Personal Details</h2></br></br></br>
    <span class="formheader">Your Name</span><br/><input type="text" name="from" class="textbox"><span id="efrom" class="alert"></span><br/><br/>
    <span class="formheader">Your Email</span><br/><input type="text" name="email" class="textbox"><span id="eemail" class="alert"></span><br/><br/>
    <span class="formheader">Your Contact Number</span><br/><input type="text" name="number" class="textbox"><span id="enumber" class="alert"></span><br/><br/>
    <span class="formheader">Your Organisation</span><br/><input type="text" name="subject" class="textbox"><span id="esubject" class="alert"></span></div><div class="projectform_right"><h2 class="subheading">Your Idea Details</h2></br></br></br>
    <span class="formheader">Your Idea</span><br/><textarea rows="10" cols="40" name="message" class="textbox" style="height:50%"></textarea><span id="emessage" class="alert"></span><br/><br/>
    <input type="submit" name="submit" value="Submit" class="button"/></div>
  </form>
                     </div>
                   </div>
                   
                   
             </div>
             <div class="contact">
                       <div class="facebook_container" >
                       <a href="https://www.facebook.com/shareiitr" target="_blank">    <img src="image/fb.png" class="facebook" alt="fb" /></a>
                       <a href="#">  <img src="image/ttr.png" class="facebook" alt="t" /></a>
                        </div>
                       <div class="number_container">
                       <img src="image/phone.png" class="facebook" /> <span style="float:left;margin-top:40px">+91-8979554599 </span>
                       <img src="image/mail.png" class="facebook" /><span style="float:left;margin-top:40px">shareiitr11@gmail.com </span>
                        </div>
             </div>      
      </div>
      
</div>
<script type="text/javascript" src="animation/css3-animate-it.js"></script>
</body>
</html>