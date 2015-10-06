<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link rel="stylesheet" href="menu/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="menu/script.js"></script>
<link href="main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href="button.css" rel="stylesheet" type="text/css" />
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script type='text/javascript' src='javascript/menu_jquery.js'></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(29.8644,77.8964),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
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
   x.innerHTML = " Not a valid email"; 
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
   x.innerHTML = " Fill your name"; 
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
   x.innerHTML = " Fill message"; 
  errpaddress =  false;
  }
  else
  {
	  x = document.getElementById("emessage");  
   x.innerHTML = "";
	  errpaddress =  true;
  }

  var x=document.forms["myForm"]["number"].value;
  if (x==null || x==""||(x.length!=10))
  {
  x = document.getElementById("enumber");  
   x.innerHTML = " Enter right no."; 
  errnum =  false;
  }
  else
  {
  x = document.getElementById("enumber");  
   x.innerHTML = ""; 
	  errnum =  true;
  }

  return erremail&&errname&&errnum&&errpaddress;
  
}
</script>
</head>
<body>
<div id="wrapper">
      <div id="header">
              <div id="logo">
              <img src="image/logo.png" style="width:160px;height:60px;margin-left:20px" /> </div>
              <div id="index">
                     <div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   </li>
   <li><a href='#'><span>Annoucements</span></a></li>
   <li><a href='#'><span>Gallery</span></a></li>
   <li><a href='#'><span>Team</span></a></li>
   <li class='last'><a href='#'><span>Contact Us</span></a></li>
</ul>
</div>
              </div>
      </div>
      <div id="container">
             <div class="common_container" >
               <div class="spacedcontainer">
                        <div class="heading">
                                Give Us Your Feedbacck
                           </div>
                           <div class="bottom">
                                 <div  class="bottom_left">
                                           <h3 class="mapsTop">Google Map:</h3>
                                          <div id="googleMap" class="mapsTop" style="height:80%"></div>
                                          
                                 </div>
                                 <div  class="bottom_right">
  <form style="position:relative;left:20%;width:80%" method="post" name="myForm" onsubmit="return validateForm();" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <span class="formheader">Your Name</span><br/><input type="text" name="from" class="textbox"><span id="efrom" class="alert"></span><br/><br/>
    <span class="formheader">Your Email</span><br/><input type="text" name="email" class="textbox"><span id="eemail" class="alert"></span><br/><br/>
    <span class="formheader">Your Contact Number</span><br/><input type="text" name="number" class="textbox"><span id="enumber" class="alert"></span><br/><br/>
    <span class="formheader">Your Message</span><br/><textarea rows="10" cols="40" name="message" class="textbox" style="height:80px"></textarea><span id="emessage" class="alert"></span><br/><br/>
    <input type="submit" name="submit" value="Submit" class="button"/>
  </form>
      
                                 </div>
                           </div>
               </div>
             </div>  
             <div class="contact">
                       <div class="facebook_container" >
                       <a href="https://www.facebook.com/shareiitr" target="_blank">    <img src="image/fb.png" class="facebook" alt="fb" /></a>
                       <a href="#"> <img src="image/linkdin.png" class="facebook" alt="li" /></a>
                       <a href="#">  <img src="image/ttr.png" class="facebook" alt="t" /></a>
                        </div>
                       <div class="number_container">
                       <img src="image/phone.png" class="facebook" /> <span style="float:left;margin-top:40px">+91-8979554599 </span>
                       <img src="image/mail.png" class="facebook" /><span style="float:left;margin-top:40px">shareiitr11@gmail.com </span>
                        </div>
             </div>
      </div>
</div>
</body>
</html>