<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShARE IIT Roorkee</title>
<link rel="stylesheet" href="menu/styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="menu/script.js"></script>

<link href="main.css" rel="stylesheet" type="text/css" />
 <!-- animsition css -->
  <link rel="stylesheet" href="pageload/animsition.css">
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link href="animation/animations.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescrolljs"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="pageload/jquery.animsition.min.js"></script>
<script>
$(document).ready(function(){ 
$(".animsition").animsition();
    
	$('#whoweare, #whatwedo,#oupresence').css('minHeight',$(window).height());
    $("#Tab0").click(function() {
		$('html, body').animate({
			scrollTop: $("#home").offset().top
		}, 500);
	});
	$("#Tab1").click(function() {
		$('html, body').animate({
			scrollTop: $("#whoweare").offset().top
		}, 500);
	});
	$("#Tab2").click(function() {
		$('html, body').animate({
			scrollTop: $("#whatwedo").offset().top
		}, 500);
	});
	$("#Tab3").click(function() {
		$('html, body').animate({
			scrollTop: $("#oupresence").offset().top
		}, 500);
	});
	
	
});
$(window).on('resize', function(){
    $('#whoweare, #whatwedo,#oupresence').css('minHeight',$(window).height());
});
 </script>
 <script>
function paral(){
	var back1 = document.getElementById('project_parallax');
	back1.style.top = -(window.pageYOffset/2) + 'px';
}
window.addEventListener("scroll",paral,false);
</script>

</head>
<body>
<div id="wrapper" class="animsition">
      <div id="header" >
              <div id="logo">
              <img  src="image/logo.png" style="width:160px;height:60px;margin-left:20px" /> </div>
              <div id="index">
                     <div id='cssmenu'>
<ul>
   <li class='active'><a id="Tab0"><span>Home</span></a></li>
   <li class='has-sub'><a ><span>About Us</span></a>
      <ul>
         <li><a  id="Tab1"><span>Who We Are</span></a></li>
         <li><a  id="Tab2"><span>What We Do</span></a></li>
         <li class='last'><a  id="Tab3"><span>Our Presence</span></a></li>
      </ul>
   </li>
   <li><a href='projects.php'><span>Projects</span></a></li>
   <li><a href='news_updates.php'><span>News Updates</span></a></li>
   <li><a href='team.php'><span>Team</span></a></li>
   <li><a href='http://shareiitr.weebly.com' target="_blank"><span>Blog</span></a></li>
   <li class='last'><a href='contact_us.php'><span>Contact Us</span></a></li>
</ul>
</div>
              </div>
      </div>
      <div id="project_parallax">
     <div class="common_container" style="background-color:#000;" >
                   <div class="bimage">
                   <img src="image/Main-Building-IIT-Roorkee.jpg" style="width:100%;height:100%" />
                    </div>
               <div class="spacedcontainer">
                        <div class="welcome animatedParent">
                             <p style="font-size:70px;font-family: 'Raleway', sans-serif;font-weight: bold" class="animated growIn slower"> Welcome To <br/>ShARE IIT Roorkee</p>
                             <p style="font-size:26px;font-family: 'Raleway', sans-serif;" class="animated fadeIn slower">an International Students Organization</p>
                        </div>
               </div>
             </div>
      <div style="width:100%;height:80%;float:left;"></div>
      </div>
      <div id="container">
             <div class="common_container" id="home">
              
             </div>
             <div class="common_container" id="whoweare">
                   <div class="spacedcontainer">
                           <div class="heading" style="color:#FFF">
                                 Who We Are
                           </div>
                           <div class="bottom">
                                 <div  class="bottom_left animatedParent">
                                       <div style="position:relative;left:10%;width:90%;height:100%;color:#FFF;font-size:18px;" class="animated bounceInLeft">
                                            ShARE is an international student think-tank. A multicultural, non-profit organization for students who strive to better understand the complexities of local socio-economic issues through presentations, conferences and projects. <br /><br />
ShARE's first team was created in Shanghai in November 2002. 
<br />
With the emergence of a global knowledge and information society, ShARE’s vision is to generate, share and use knowledge to contribute a regions’ human, social and economic development.<br /><br />
ShARE IITR is a part of global team which aims to connect IIT Roorkee students with the industry according to the values of ShARE Global. We give students the opportunity to study the socio-economic problems of today and produce knowledge within the knowledge network of their choice, as well as gaining experience by participating in in projects with our partners and in events organized by ShARE IITR.
<br />


                                       </div>
                                 </div>
                                 <div  class="bottom_left">
                                       <iframe style="position:relative;top:10%;left:10%;height:60%;width:80%" src="https://www.youtube.com/embed/r-r1eT1Ca0Y?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                 </div>
                           </div>
                   </div>
             </div>
             <div class="common_container" id="whatwedo">
                   <div class="spacedcontainer animatedParent">

                   		
                        <h2 align="center">ShARE Career Path </h2>
                        <br/>
                        <img src="image/StandardPath.png" style="width:75%;height:75%;float:center;" />
                        <br/><br/>

                        <div id="whatwedo_1" class="animated growIn" >
                        <img src="image/Macroeconomia.png" class="whatwedo_1img" />
                        <br/><br/>
                        <h3>Business Strategy</h3> 
                        <br/>
                        
                        </div>

                        <div id="whatwedo_2" class="animated growIn">
                        <img src="image/energia.png" class="whatwedo_1img" /> 
                        <br/><br/>
                        <h3>ICT</h3> 
                        <br/>
                       
                        </div>

                        <div id="whatwedo_3" class="animated growIn">
                        <img src="image/Industria.png" class="whatwedo_1img" /> 
                        <br/><br/>
                        <h3>Energy</h3> 
                        <br/>
                        
                        </div>

                        <div id="whatwedo_4" class="animated growIn">
                        <img src="image/Negocios.png" class="whatwedo_1img" /> 
                       <br/><br/>
                        <h3>Industry</h3> 
                        <br/>
                       
                        </div>

               </div>
             </div>
             <div class="common_container" id="oupresence">
                    <div style="height:10%;
	width:100%;position:absolute;
	top:0%;background-color:#FFF"></div>
                   <div class="spacedcontainer">
                        <div class="heading" style="background-color:#FFF;height:10%">
                                 Our Presence
                           </div>
                          <div class="bottom">
                                              <img src="image/map.png" style="position:static;width:100%;height:100%;float:left;" />

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