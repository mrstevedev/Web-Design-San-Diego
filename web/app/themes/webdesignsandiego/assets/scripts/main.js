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
          if ($(window).width() < 575) {
           $('#nf-field-5-container, #nf-field-6-container, #nf-field-7-container').removeClass('one-third');
           $('#nf-field-9-container, #nf-field-10-container').removeClass('one-fourth');
           $('#nf-field-11-container').removeClass('one-half');
           
          }
          else { 
            $('#nf-field-5-container, #nf-field-6-container, #nf-field-7-container').addClass('one-third');
            $('#nf-field-9-container, #nf-field-10-container').addClass('one-fourth');
            $('#nf-field-11-container').addClass('one-half');                      
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
        });

        //  end sticky navigation

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        $('.comment-form-comment label').html('Submit your comment');
        
        var sectionTwoBtn1 = document.querySelector('.sectionTwoBtn1'); 
        var sectionTwoBtn2 = document.querySelector('.sectionTwoBtn2'); 
        var sectionTwoBtn3 = document.querySelector('.sectionTwoBtn3');
        var sectionThreeBtn1 = document.querySelector('.sectionThreeBtn1');
        var sectionThreeBtn2 = document.querySelector('.sectionThreeBtn2');
        var sectionFourBtn1 = document.querySelector('.sectionFourBtn1');
        var sectionFourBtn2 = document.querySelector('.sectionFourBtn2');


        var sectionOne = document.querySelector('.section-one');
        var sectionTwo = document.querySelector('.section-two');  
        var sectionTwoBtm = document.querySelector('.section-two-btm');
        var sectionThree = document.querySelector('.section-three');
        var sectionFour = document.querySelector('.section-four');
        
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

        var sectionTwoHandlerBtm = function(event){
          event.preventDefault();
          smoothScroll(sectionTwoBtm, '1500');
        };

        var sectionThreeHandler = function(event){
          event.preventDefault();
          smoothScroll(sectionThree,'1500');
        };

        var sectionThreeHandler2 = function(event){
          event.preventDefault();
          smoothScroll(sectionThree, '1500');
        };

        var sectionFourHandler = function(event){
          event.preventDefault();
          smoothScroll(sectionFour, '1500');
        };

        var sectionFourHandler2 = function(event){
          event.preventDefault();
          smoothScroll(sectionFour, '1500');
        };

        sectionTwoBtn1.addEventListener('click', sectionTwoHandler);
        sectionTwoBtn2.addEventListener('click', sectionTwoHandler);
        sectionTwoBtn3.addEventListener('click', sectionTwoHandlerBtm);
        sectionThreeBtn1.addEventListener('click', sectionThreeHandler);
        sectionThreeBtn2.addEventListener('click', sectionThreeHandler2);
        sectionFourBtn1.addEventListener('click', sectionFourHandler);
        sectionFourBtn2.addEventListener('click', sectionFourHandler2);

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
