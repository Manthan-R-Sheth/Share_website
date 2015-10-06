jQuery(function($) {

    var $gal = $('#gallery'),
        $sli = $('#slider'),
        $box = $('.sliderdiv',$sli),
        W    = $gal.width(), // 500
        N    = $box.length,  // 3
        C    = 0,            // a counter
        intv;

    $sli.width(W*N);


    $('#prev, #next').click(function(){
        C = (this.id=='next' ? ++C : --C) <0 ? N-1 : C%N;
        $sli.stop().animate({left: -C*W },800);  
    });

    function auto(){
      intv = setInterval(function(){
        $('#next').click();
      }, 3000);
    }
    auto(); // start

    $('#gallery').hover(function( e ){
      return e.type=='mouseenter'?clearInterval(intv):auto();
    });

});
