!(function($) {
  "use strict";

  // Hero typed
  if ($('.typed').length) {
    var typed_strings = $(".typed").data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  $(document).on('click', '.mobile-nav-toggle', function(e) {
    $('body').toggleClass('mobile-nav-active');
    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
  });

  $(document).click(function(e) {
    var container = $(".mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Skills section
  $('.skills-content').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

/* date convertor */
$(document).ready(function(){
  
  $("input[name=convertchoose]").click(function(){  
    $('#ndate, #nyear').val('');
    if($(this).val()=='e2n'){
      $("#emonth").show();
      $("#nmonth").hide();			
      }
    else{
      $("#emonth").hide();
      $("#nmonth").show();
      }		
    });

  $("#nyear").focus(function(){
    if($(this).val()=="yyyy")
      $(this).val("");
    });
  
  $('#nyear').keyup(function(){
    if($(this).val().length==4)
      $("#ndate").focus();
    });
    
  $("#ndate").focus(function(){
    if(jQuery.trim($(this).val())=="dd")
      $(this).val("");
    });
    
  $('#ndate').keyup(function(){
    if($(this).val().length==2)
      $("#btnDateConversion").focus();
    });

  $('#nyear').blur(function(){
      $('#date-conversion').submit();
  });
  
  $("#date-conversion").submit(function(){
    var message='';
    
    if((parseInt($("#nyear").val())<2000 || parseInt($("#nyear").val())>2089) && $("input:radio[name=convertchoose]:checked").val()=='n2e'){
      message+=("OOPS! Range for Nepali year must be 2000 - 2089<br />");
      }
    if((parseInt($("#nyear").val())<1944 || parseInt($("#nyear").val())>2033) && $("input:radio[name=convertchoose]:checked").val()=='e2n'){
      message+=("OOPS! Range for English year must be 1944 - 2033<br />");
      }
    if(isNaN($("#nyear").val()) || $("#nyear").val().length!=4){				
        message+=("Please enter valid year<br />");
        }
    if(isNaN($("#ndate").val()) || $("#ndate").val()<1 || $("#ndate").val()>32){				
        message+=("Please enter valid date<br />");
        }
      
    if(message){
      $('.error-message').html(message).show();
      return false;
      } 
  
    var monthVal='emonth';
    if($("input:radio[name=convertchoose]:checked").val()=='n2e'){
      monthVal='nmonth';
      }
    
      if($.trim(message)==''){      
        var _this =$(this);
        jQuery.ajax({
          type: "POST",
          url: _SITE_PATH+"ajax-page.php", 
          data: "choice=convert-date&ct="+$("input:radio[name=convertchoose]:checked").val()+"&yr="+$("#nyear").val()+"&mn="+$("#"+monthVal).val()+"&dt="+$("#ndate").val(),
          beforeSend:function(){
            _this.parent().find('.loading').show();
            $('.error-message').hide();
            },	
          success: function(responseTxt){
            _this.parent().find('.loading').hide();
            $('.error-message').hide();
            _this.parent().find('.sent-message').html(responseTxt).show();
          }
        });	
        return false;	
        }
    });
});
/* end of date convertor */


  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out-back",
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);