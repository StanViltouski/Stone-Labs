
  var widthWindow = $(window).innerWidth();

    if(widthWindow < 992) {
      $('.mobile-menu > li').addClass('mobile-nav-item');
      $('.mobile-menu > li:eq(0)').addClass('mobile-dropdown-item-toggler');
      $('.mobile-menu > li > a:eq(0)').attr('onclick', 'return false;');
      $('.sub-menu').addClass('mobile-dropdown-menu');
      $('.mobile-dropdown-menu li a').addClass('mobile-dropdown-item');

    } else if (widthWindow > 991) {
      $('.navbar-nav > li:eq(0)').addClass('dropdown-item-wrapper');
      $('.navbar-nav > li > a:eq(0)').attr('onclick', 'return false;');
      $('#desk_menu .sub-menu').removeClass('mobile-dropdown-menu');
      $('.nav-dropdown-menu li a').addClass('nav-dropdown-item');
      
    }

//Main menu

    $('.dropdown-item-wrapper').on({

      'mouseenter' : function () {
        $('#desk_menu .sub-menu').slideDown(200);
    },

      'mouseleave': function () {
        $('#desk_menu .sub-menu').hide();
      }

  });


// Dropdown menu in showcases-catalog page

  $('#drop_menu').on('click', function(){

    if($('.submenu-resp').hasClass('show')) {
      $('.submenu-resp').slideUp(200);
      } else { $('.submenu-resp').slideDown(200); }

  })

  $(window).on('click', function(){
      $('.submenu-resp').slideUp(200);
  })



// Dropdown header menu mobile

    $('.mobile-dropdown-item-toggler').on('click', function () {
      if ($(this).find('.mobile-dropdown-menu').hasClass('active')) {
        $(this).find('.mobile-dropdown-menu').removeClass('active').slideUp(200);
      } else {
        $(this).find('.mobile-dropdown-menu').addClass('active').slideDown(200);
      }
    });

    $('.navbar-toggler').on('click', function () {
      $('.mobile-menu-fixed').addClass('active').slideDown(200);
    });
    $('.close-button').on('click', function () {
      $('.mobile-menu-fixed').addClass('active').slideUp(200);
    });



// event on resize
  $(window).on('resize', function(){

    var widthWindow = $(window).innerWidth();

    if(widthWindow < 992) {
      $('.mobile-menu > li').addClass('mobile-nav-item');
      $('.mobile-menu > li:eq(0)').addClass('mobile-dropdown-item-toggler');
      $('.mobile-menu > li > a:eq(0)').attr('onclick', 'return false;');
      $('.sub-menu').addClass('mobile-dropdown-menu');
      $('.mobile-dropdown-menu li a').addClass('mobile-dropdown-item');

    } else if (widthWindow > 991) {
      $('.navbar-nav > li:eq(0)').addClass('dropdown-item-wrapper');
      $('.navbar-nav > li > a:eq(0)').attr('onclick', 'return false;');
      $('#desk_menu .sub-menu a').removeClass('mobile-dropdown-menu');
      $('.nav-dropdown-menu li a').addClass('nav-dropdown-item');
    }


//Main menu

    $('.dropdown-item-wrapper').on({

      'mouseenter' : function () {
        $('#desk_menu .sub-menu').slideDown(200);
    },

      'mouseleave': function () {
        $('#desk_menu .sub-menu').hide();
      }

  });


// Dropdown menu in showcases-catalog page

  $('#drop_menu').on('click', function(){

    if($('.submenu-resp').hasClass('show')) {
      $('.submenu-resp').slideUp(200);
      } else { $('.submenu-resp').slideDown(200); }

  })

  $(window).on('click', function(){
      $('.submenu-resp').slideUp(200);
  })



// Dropdown header menu mobile

    $('.mobile-dropdown-item-toggler').on('click', function () {
      if ($(this).find('.mobile-dropdown-menu').hasClass('active')) {
        $(this).find('.mobile-dropdown-menu').removeClass('active').slideUp(200);
      } else {
        $(this).find('.mobile-dropdown-menu').addClass('active').slideDown(200);
      }
    });

    $('.navbar-toggler').on('click', function () {
      $('.mobile-menu-fixed').addClass('active').slideDown(200);
    });
    $('.close-button').on('click', function () {
      $('.mobile-menu-fixed').addClass('active').slideUp(200);
    });

  })




/*Menu fixed*/

$(function () {

  $(window).on('scroll', function() {

    var scrollValue = $(window).scrollTop();
    
      if (scrollValue > 117) { 

        $('.navbar-brand').css({
          'padding-top': '25px',
          'padding-left': '5%',
      });

        $('.navbar').addClass('fixed-top').css({
          'background' : 'rgba(6,165,245,1)',
          'padding-right' : '2%'
        });

      } else {

        $('.navbar-brand').css({
          'padding-top': '',
          'padding-left': '',
        });

        $('.navbar').removeClass('fixed-top').css({
            'background': '',
            'padding-right' : ''
        });
    }

  });

});

