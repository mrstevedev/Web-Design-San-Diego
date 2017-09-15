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
        // (function(d, t) {var g = d.createElement(t);var s = d.getElementsByTagName(t)[0];g.id = "yelp-biz-badge-script-rrc-58yAEFLuj7Qxrwzr8VTFwA";g.src = "//yelp.com/biz_badge_js/en_US/rrc/58yAEFLuj7Qxrwzr8VTFwA.js";s.parentNode.insertBefore(g, s);}(document, 'script'));
        
         //sticky back to top
         $(window).scroll(function(){
          var scrollPos = $(window).scrollTop();
          if(scrollPos >= 797){
            $('.back-to-top').addClass('fixed animated fadeInRight show');
              
          } else if(scrollPos < 800){
            $('.back-to-top').removeClass('fadeInRight show');
          }

          if(scrollPos <= 120){
            $('header')
              .css('background','rgba(43,65,96, 0)')
              .css('transition', '.35s ease-in-out');
          }
            else {
              $('header').css('background','rgba(43,65,96, 1)');
            }
        });
        //  end sticky navigation
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        $('.comment-form-comment label').html('Submit your comment');
        
        // var sectionTwoBtn1 = document.querySelector('.sectionTwoBtn1'); 
        // var sectionTwoBtn2 = document.querySelector('.sectionTwoBtn2'); 
        // var sectionTwoBtmBtn1 = document.querySelector('.sectionTwoBtmBtn1');
        // var sectionTwoBtmBtn2 = document.querySelector('.sectionTwoBtmBtn2');
        // var sectionThreeBtn1 = document.querySelector('.sectionThreeBtn1');
        // var sectionThreeBtn2 = document.querySelector('.sectionThreeBtn2');
        // var sectionFourBtn1 = document.querySelector('.sectionFourBtn1');
        // var sectionFourBtn2 = document.querySelector('.sectionFourBtn2');
        // var sectionFiveBtn1 = document.querySelector('.sectionFiveBtn1');
        // var sectionFiveBtn2 = document.querySelector('.sectionFiveBtn2');

        // var hamburger = document.querySelector('.hamburger');


        // var sectionOne = document.querySelector('.section-one');
        // var sectionTwo = document.querySelector('.section-two');  
        // var sectionTwoBtm = document.querySelector('.section-two-btm');
        // var sectionFour = document.querySelector('.section-four');
        // var sectionFive = document.querySelector('.section-five');
        
        // var backToTopBtn = document.querySelector('.backtotopBtn');
        
        // var backToTopHandler = function(event){
        //     event.preventDefault();
        //     smoothScroll(sectionOne, '800');
        // };
        // backToTopBtn.addEventListener('click', backToTopHandler);
        
        // var sectionTwoHandler = function(event) {
        //   event.preventDefault();        
        //   smoothScroll(sectionTwo, '1500');
        // };

        // var sectionTwoHandlerBtm = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionTwoBtm, '1500');
        // };

        // var sectionThreeHandler = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionThree,'1500');
        // };

        // var sectionThreeHandler2 = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionThree, '1500');
        // };

        // var sectionFourHandler = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionFour, '1500');
        // };

        // var sectionFourHandler2 = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionFour, '1500');
        // };

        // var sectionFiveHandler = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionFive, '1500');
        // };

        // var sectionFiveHandler2 = function(event){
        //   event.preventDefault();
        //   smoothScroll(sectionFive, '1500');
        // };

        // sectionTwoBtn1.addEventListener('click', sectionTwoHandler);
        // sectionTwoBtn2.addEventListener('click', sectionTwoHandler);
        // sectionTwoBtmBtn1.addEventListener('click', sectionTwoHandlerBtm);
        // sectionTwoBtmBtn2.addEventListener('click', sectionTwoHandlerBtm);
        // sectionFourBtn1.addEventListener('click', sectionFourHandler);
        // sectionFourBtn2.addEventListener('click', sectionFourHandler2);
        // sectionFiveBtn1.addEventListener('click', sectionFiveHandler);
        // sectionFiveBtn2.addEventListener('click', sectionFiveHandler2);

        // hamburger.addEventListener('click', function(){
        //   hamburger.classList.toggle('is-active');
        // });
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page     
         
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        $('.learn-more-btn-top-left').on('click', function(event){
          event.preventDefault();
          $('.left-side-top-left.over').addClass('animated fadeInLeft flex-show').removeClass('fadeOutLeft');                  
        });
        
        $('.left-side-top-left .backBtn-top-left').on('click', function(event){
          event.preventDefault(); 
          $('.left-side-top-left.over').removeClass('fadeInLeft').addClass('fadeOutLeft');
        });



        $('.learn-more-btn-top-right').on('click', function(event){
          event.preventDefault();
          $('.right-side-top-right.over').addClass('animated fadeInRight flex-show').removeClass('fadeOutRight');                  
        });
        
        $('.right-side-top-right .backBtn-top-right').on('click', function(event){
          event.preventDefault(); 
          $('.right-side-top-right.over').removeClass('fadeInRight').addClass('fadeOutRight');
        });

        //bottom left

        $('.learn-more-btn-btm-left').on('click', function(event){
          event.preventDefault();
          $('.left-side-btm-left.over').addClass('animated fadeInLeft flex-show').removeClass('fadeOutLeft');                  
        });
        
        $('.left-side-btm-left .backBtn-btm-left').on('click', function(event){
          event.preventDefault(); 
          $('.left-side-btm-left.over').removeClass('fadeInLeft').addClass('fadeOutLeft');
        });

        // end bottom left


        //bottom right

        $('.learn-more-btn-btm-right').on('click', function(event){
          event.preventDefault();
          $('.right-side-btm-right.over').addClass('animated fadeInRight flex-show').removeClass('fadeOutRight');                  
        });
        
        $('.right-side-btm-right .backBtn-btm-right').on('click', function(event){
          event.preventDefault(); 
          console.log('back button bottom right clicked');
          $('.right-side-btm-right.over').removeClass('fadeInRight').addClass('fadeOutRight');
        });

        // end bottom right

        
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
