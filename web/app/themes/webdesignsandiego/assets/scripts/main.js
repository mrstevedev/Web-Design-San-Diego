/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        // Yelp Authentication Credentials
        var clientID = 'S4nFFgSD6bUm7Zuxrqz5Lw';
        var clientSecret = 'MiIQyIgaNYwcN1avfwYGRx5jPmdpYCL0KZWrgvnRB5HB9lMQHjt9tJMso4NnSWvF';
        //https://api.yelp.com/oauth2/token?grant_type=OAuth2&client_secret=MiIQyIgaNYwcN1avfwYGRx5jPmdpYCL0KZWrgvnRB5HB9lMQHjt9tJMso4NnSWvF&client_id=S4nFFgSD6bUm7Zuxrqz5Lw
        

        $(window).resize(function() {
          /*If browser resized, check width again */
          if ($(window).width() < 514) {
           $('.nf-field-container').removeClass('one-third');
          }
          else { 
            $('.nf-field-container').addClass('one-third');
         }
        });

         // sticky back to top
         $(window).scroll(function(){
          var scrollPos = $(window).scrollTop();
          if(scrollPos >= 797){
            $('.back-to-top').addClass('fixed animated fadeInRight show');
              
          } else if(scrollPos < 800){
            $('.back-to-top').removeClass('fadeInRight show');
          }

          // else if(scrollPos < 150){
          //   $('header').addClass('animated fadeInDown').css('background','rgba(255,255,255, 0)');
          // }
        });

        //  end sticky navigation

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
        
        var sectionTwoBtn1 = document.querySelector('.sectionTwoBtn1'); 
        var sectionTwoBtn2 = document.querySelector('.sectionTwoBtn2'); 
        var sectionOne = document.querySelector('.section-one');
        var sectionTwo = document.querySelector('.section-two');    
        
        var backToTopBtn = document.querySelector('.backtotopBtn');
        
        var backToTopHandler = function(event){
            event.preventDefault();
                smoothScroll(sectionOne, '800');
        };
        backToTopBtn.addEventListener('click', backToTopHandler);
        
        var sectionTwoHandler = function(event) {
          event.preventDefault();
         
          smoothScroll(sectionTwo, '1500');
        };

        sectionTwoBtn1.addEventListener('click', sectionTwoHandler);
        sectionTwoBtn2.addEventListener('click', sectionTwoHandler);


        
        
        // grab an element
        var myElement = document.querySelector("header");
        // construct an instance of Headroom, passing the element
        var headroom  = new Headroom(myElement);
        // initialise
        headroom.init(); 
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
