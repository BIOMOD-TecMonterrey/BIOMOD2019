(function($) {
  /*"use strict"; // Start of use strict*/

    //Sidebar menu animations
    $('li.sidebar-nav-subitem').addClass('hide');
    $('#menuProject').hover(
        function(){
            $('#subProject').stop().slideDown(600);
        }, function(){
            $('#subProject').stop().slideUp(800);
        }
    );
    
    $('#menuPeople').hover(
        function(){
            $('#subPeople').stop().slideDown(600);
        }, function(){
            $('#subPeople').stop().slideUp(800);
        }
    );
    
    $('#menuDesign').hover(
        function(){
            $('#subDesign').stop().slideDown(600);
        }, function(){
            $('#subDesign').stop().slideUp(800);
        }
    );
    
    $('#menuLB').hover(
        function(){
            $('#subLB').stop().slideDown(600);
        }, function(){
            $('#subLB').stop().slideUp(800);
        }
    );
    
    $('#menuEngagement').hover(
        function(){
            $('#subEngagement').stop().slideDown(600);
        }, function(){
            $('#subEngagement').stop().slideUp(800);
        }
    );
    
    $('#btnKnowTeam').click(function(){
        $('#project').toggleClass('active');
    });
    
  // Closes the sidebar menu
    $(".menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $('div.brand-hider').toggleClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
    $(this).toggleClass("active");
  });


  // Closes responsive menu when a scroll trigger link is clicked
  $('#sidebar-wrapper .js-scroll-trigger').click(function() {
    $("#sidebar-wrapper").removeClass("active");
    $(".menu-toggle").removeClass("active");
    $("div.brand-hider").removeClass("active");
    $(".menu-toggle > .fa-bars, .menu-toggle > .fa-times").toggleClass("fa-bars fa-times");
  });

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });
    
  $('#closeButton').click(function() {
    $('.popupWrapper').fadeOut();
    $('.popupBackground').fadeOut();
  });

    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
    
})(jQuery); // End of use strict