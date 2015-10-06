<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Team</title>
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
    $("#currentteam").click(function() {
		$('html, body').animate({
			scrollTop: $("#home_currentteam").offset().top
		}, 500);
	});
	$("#alumni").click(function() {
		$('html, body').animate({
			scrollTop: $("#home_alumni").offset().top
		}, 500);
	});
	$("#current_team_page_2").click(function() {
		$('html, body').animate({
			scrollTop: $("#home_currentteam_2").offset().top
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
              <a href="index.php"><img  src="image/logo.png" style="width:160px;height:60px;margin-left:20px" /></a> </div>
              <div id="index">
                     <div id='cssmenu'>
<ul>
   <li class='active'><a id="Tab0" href="index.php"><span>Home</span></a></li>
   <li><a href='projects.php'><span>Projects</span></a></li>
   <li><a href='news_updates.php'><span>News Updates</span></a></li>
   <li><a ><span>Team</span></a></li>
   <li><a href='http://shareiitr.weebly.com' target="_blank"><span>Blog</span></a></li>
   <li class='last'><a href='contact_us.php'><span>Contact Us</span></a></li>
</ul>
</div>
              </div>
      </div>
      <div id="project_parallax" style="background-color:#000;">
            <div class="bimage">
                   <img src="image/team_cover.jpg" style="width:100%;height:100%" />
                    </div>
      </div>
    
             <div class="common_container" id="home" >
                     <div class="spacedcontainer" style="position:relative;">
                           <div id="team_home" class="animatedParent">
                                  <p style="font-size:70px;font-family: 'Raleway', sans-serif;font-weight: bold;color:#FFF;" class="animated fadeIn slower"> Meet The Team</p>
                             <p style="font-size:26px;font-family: 'Raleway', sans-serif;color:#FFF" class="animated fadeIn slower">"Individuals can and do make a difference, but it takes a team to really mess things up"</p>
                             
                           </div>
                           <div id="team_home_button_container">
                                  <p class="team_slideshowButton" id="currentteam">Our Current Team</p>
                                  <p class="team_slideshowButton" id="alumni">Our Alumni</p>
                           </div>
                           
                   </div>
             </div>
             <div class="common_container" id="home_currentteam" style="background-color:#FFF">
                   <div class="spacedcontainer">
                           <div class="heading" >
                                 Our Current Team
                           </div>
                           <div class="bottom">
                             <div class="team_1">
                                 <img src="Team_Members/ravish.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Ravish Yadav</p>
                               <p class="team_desig">President</p>
                               <p class="team_detail">B.Tech ECE 3rd Year</p>
                               <a href="https://www.facebook.com/ravish.yadav.792" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  /> 
                               </div>
                             <div class="team_2">
                             <img src="Team_Members/Shreya.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Shreya Srivastava</p>
                               <p class="team_desig">Vice-President</p>
                               <p class="team_field">Network Manager, Business Strategy</p>
                               <p class="team_detail">B.Tech App. Maths 3rd Year</p>
                               <a href="https://www.facebook.com/srivastava.shreya?fref=ts" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_3">
                              <img src="Team_Members/Gauba.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Himaanshu Gauba</p>
                               <p class="team_desig">Vice-President</p>
                               <p class="team_detail">B.Tech ECE 3rd Year</p>
                               <a href="https://www.facebook.com/himaanshu.gauba" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_4">
                             <img src="Team_Members/Bhavnoor.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Bhavnoor Singh</p>
                               <p class="team_desig">Network Manager, ICT & Innovation</p>
                               <p class="team_detail">B.Tech Electrical 3rd Year</p>
                               <a href="https://www.facebook.com/bhavnoor.singh.12" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_5">
                             <img src="Team_Members/Madhav.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Madhav Pathak</p>
                               <p class="team_desig">Network Manager, Industry</p>
                               <p class="team_detail">B.Tech Electrical 3rd Year</p>
                               <a href="https://www.facebook.com/madhavpathak31" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_6">
                              <img src="Team_Members/Shipra.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Shipra Mathur</p>
                               <p class="team_desig">Network Manager, Energy</p>
                               <p class="team_detail">B.Tech Metallurgy 3rd Year</p>
                               <a href="https://www.facebook.com/madhavpathak31" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_7">
                             <img src="Team_Members/Sumit.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Sumit Joshi</p>
                               <p class="team_desig">Junior Member</p>
                               <p class="team_detail">B.Tech Civil 3rd Year</p>
                              <a href="https://www.facebook.com/sumit.stj" target="_blank"> <img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_8">
                             <img src="Team_Members/Anant.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Anant Pathak</p>
                               <p class="team_desig">Junior Member</p>
                               <p class="team_detail">B.Tech P&I 3rd Year</p>
                              <a href="https://www.facebook.com/anantpathak1394" target="_blank"> <img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_9">
                             <img src="Team_Members/Abhinav.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Abhinav Srivastav</p>
                               <p class="team_desig">Junior Member</p>
                               <p class="team_detail">B.Tech Civil 3rd Year</p>
                              <a href="https://www.facebook.com/abhinav.srivastav.543" target="_blank"> <img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                                 <span class="next_page" id="current_team_page_2">&nbsp;<</span>
                     </div>
                   </div>
             </div>
             <div class="common_container" id="home_currentteam_2" style="background-color:#FFF">
                   <div class="spacedcontainer">
                           <div class="heading" style="height:10%">
                           </div>
                           <div class="bottom">
                             <div class="team_1">
                                 <img src="Team_Members/ravish.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Ravish Yadav</p>
                               <p class="team_desig">President</p>
                               <p class="team_detail">B.Tech ECE 3rd Year</p>
                               <a href="https://www.facebook.com/ravish.yadav.792" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  /> 
                               </div>
                             <div class="team_2">
                             <img src="Team_Members/Shreya.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Shreya Srivastava</p>
                               <p class="team_desig">Vice-President</p>
                               <p class="team_field">Network Manager, Business Strategy</p>
                               <p class="team_detail">B.Tech App. Maths 3rd Year</p>
                               <a href="https://www.facebook.com/srivastava.shreya?fref=ts" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_3">
                              <img src="Team_Members/Gauba.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Himaanshu Gauba</p>
                               <p class="team_desig">Vice-President</p>
                               <p class="team_detail">B.Tech ECE 3rd Year</p>
                               <a href="https://www.facebook.com/himaanshu.gauba" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_4">
                             <img src="Team_Members/Bhavnoor.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Bhavnoor Singh</p>
                               <p class="team_desig">Network Manager, ICT & Innovation</p>
                               <p class="team_detail">B.Tech Electrical 3rd Year</p>
                               <a href="https://www.facebook.com/bhavnoor.singh.12" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_5">
                             <img src="Team_Members/Madhav.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Madhav Pathak</p>
                               <p class="team_desig">Network Manager, Industry</p>
                               <p class="team_detail">B.Tech Electrical 3rd Year</p>
                               <a href="https://www.facebook.com/madhavpathak31" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_6">
                              <img src="Team_Members/Shipra.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Shipra Mathur</p>
                               <p class="team_desig">Network Manager, Energy</p>
                               <p class="team_detail">B.Tech Metallurgy 3rd Year</p>
                               <a href="https://www.facebook.com/madhavpathak31" target="_blank"><img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_7">
                             <img src="Team_Members/Sumit.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Sumit Joshi</p>
                               <p class="team_desig">Junior Member</p>
                               <p class="team_detail">B.Tech Civil 3rd Year</p>
                              <a href="https://www.facebook.com/sumit.stj" target="_blank"> <img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_8">
                             <img src="Team_Members/Anant.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Anant Pathak</p>
                               <p class="team_desig">Junior Member</p>
                               <p class="team_detail">B.Tech P&I 3rd Year</p>
                              <a href="https://www.facebook.com/anantpathak1394" target="_blank"> <img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                             <div class="team_9">
                             <img src="Team_Members/Abhinav.jpg" class="team_img" />
                               <div style="float:left;width:5%;height:100%"></div>
                               <p class="team_name">Abhinav Srivastav</p>
                               <p class="team_desig">Junior Member</p>
                               <p class="team_detail">B.Tech Civil 3rd Year</p>
                              <a href="https://www.facebook.com/abhinav.srivastav.543" target="_blank"> <img src="image/teamfb.png" class="team_fb" /> </a>
                               <img src="image/teamli.png" class="team_li"  />
                                 </div>
                     </div>
                   </div>
             </div>
             <div class="common_container" id="home_alumni">
                    
                   <div class="spacedcontainer" >
                        <div class="heading" >
                                 Our Alumni
                     </div>
                          <div class="bottom">
                                
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
<script type="text/javascript" src="animation/css3-animate-it.js"></script>
</body>
</html>