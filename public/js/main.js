(function ($) {
  "use strict";
  $(window).on("load", function () { // makes sure the whole site is loaded
    //preloader
    $("#status").fadeOut(); // will first fade out the loading animation
    $("#preloader").delay(450).fadeOut("slow"); // will fade out the white DIV that covers the website.
  });


  $(document).ready(function () {

    //active menu
    $(document).on("scroll", onScroll);

    $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $('a').each(function () {
        $(this).removeClass('active');
      })
      $(this).addClass('active');

      var target = this.hash;
      $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top + 2
      }, 500, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onScroll);
      });
    });


    //scroll js
    smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
      selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
      speed: 500, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function (toggle, anchor) { } // Function to run after scrolling
    });

    //menu
    var bodyEl = document.body,
      content = document.querySelector('.content-wrap'),
      openbtn = document.getElementById('open-button'),
      closebtn = document.getElementById('close-button'),
      isOpen = false;

    function toggleMenu() {
      if (isOpen) {
        classie.remove(bodyEl, 'show-menu');
      }
      else {
        classie.add(bodyEl, 'show-menu');
      }
      isOpen = !isOpen;
    }

  });

  //header
  function inits() {
    window.addEventListener('scroll', function (e) {
      var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 300,
        header = document.querySelector(".for-sticky");
      if (distanceY > shrinkOn) {
        classie.add(header, "opacity-nav");
      } else {
        if (classie.has(header, "opacity-nav")) {
          classie.remove(header, "opacity-nav");
        }
      }
    });
  }

  window.onload = inits();

  //nav-active
  function onScroll(event) {
    var scrollPosition = $(document).scrollTop();
    $('.menu-list a').each(function () {
      var currentLink = $(this);
      var refElement = $(currentLink.attr("href"));
      if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
        $('.menu-list a').removeClass("active");
        currentLink.addClass("active");
      }
      else {
        currentLink.removeClass("active");
      }
    });
  }

})(jQuery);