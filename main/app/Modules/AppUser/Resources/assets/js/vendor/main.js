$(function(){
    /*
    -------------------------------------------------
        Header Menu
    -------------------------------------------------
    */ 

    var header          =  $('header');
    var headerMenu      =  $('.header-menu');
    var subMenuToggle   =  $('.sub-item-toggle');


    $(window).scroll(function(){
        if($(this).scrollTop() > header.height()){
            headerMenu.addClass('fixed');
        } else{
            headerMenu.removeClass('fixed');
        }
    });

    header.find(subMenuToggle).click(function(e){
      e.preventDefault();
    });


    /*
    -------------------------------------------------
        Full Screen Window
    -------------------------------------------------
    */
    function toggleFullscreen(elem) {
      elem = elem || document.documentElement;
      if (!document.fullscreenElement && !document.mozFullScreenElement &&
        !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
          elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
          elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      }
    }

    $('#fullScreen').click(function(e){
        e.preventDefault();
        toggleFullscreen();
    });

});

