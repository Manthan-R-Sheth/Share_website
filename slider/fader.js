// JavaScript Document
    function swapImages(){
      var $active = $('#myGallery .active');
      var $next = ($('#myGallery .active').next().length > 0) ? $('#myGallery .active').next() : $('#myGallery img:first');
      $active.fadeOut(function(){
      $active.removeClass('active');
      $next.fadeIn("slow").addClass('active');
      });
    }
 
    $(document).ready(function(){
      // Run our swapImages() function every 5secs
	   var timer1;
	   var timer;
	    $("#myGallery").hover(function(){
    clearInterval(timer);clearInterval(timer1);
    },
    function(){
    timer1 = setInterval('swapImages()', 500000);
  });
    timer = setInterval('swapImages()', 500000);
    });