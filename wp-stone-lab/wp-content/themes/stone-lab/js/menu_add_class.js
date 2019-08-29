
  var widthWindow = $(window).innerWidth();

    if(widthWindow < 992) {
      $('.mobile-menu > li').addClass('mobile-nav-item');
      $('.mobile-menu > li:eq(0)').addClass('mobile-dropdown-item-toggler');
      $('.mobile-menu > li > a:eq(0)').attr('onclick', 'return false;');
      $('.sub-menu').addClass('mobile-dropdown-menu').removeClass('nav-dropdown-menu');
      $('.mobile-dropdown-menu li a').addClass('mobile-dropdown-item');

    } else if (widthWindow > 991) {
      $('.navbar-nav li').addClass('nav-item');
      $('.navbar-nav > li:eq(0)').addClass('dropdown-item-wrapper');
      $('.navbar-nav > li > a:eq(0)').attr('onclick', 'return false;');
      $('.sub-menu').addClass('nav-dropdown-menu').removeClass('mobile-dropdown-menu');
      $('.nav-dropdown-menu li a').addClass('nav-dropdown-item');
      
    }

  $(window).on('resize', function(){

    var widthWindow = $(window).innerWidth();

    if(widthWindow < 992) {
      $('.mobile-menu > li').addClass('mobile-nav-item');
      $('.mobile-menu > li:eq(0)').addClass('mobile-dropdown-item-toggler');
      $('.mobile-menu > li > a:eq(0)').attr('onclick', 'return false;');
      $('.sub-menu').addClass('mobile-dropdown-menu').removeClass('nav-dropdown-menu');
      $('.mobile-dropdown-menu li a').addClass('mobile-dropdown-item');

    } else if (widthWindow > 991) {
      $('.navbar-nav li').addClass('nav-item');
      $('.navbar-nav > li:eq(0)').addClass('dropdown-item-wrapper');
      $('.navbar-nav > li > a:eq(0)').attr('onclick', 'return false;');
      $('.sub-menu').addClass('nav-dropdown-menu').removeClass('mobile-dropdown-menu');
      $('.nav-dropdown-menu li a').addClass('nav-dropdown-item');
    }

  })

