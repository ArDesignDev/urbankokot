jQuery(document).ready(function($){
    navOnScroll();

    accordion();
    // sliders
    scrollingBanner();
    referencesSlider();
    referencesSlider2();
    videoSlider();
    videoSliderSingle();

    customFormButton();
    backToTop();
    smoothScroll();
    mobileMenu();

    splitTextIntoSpans();
    animateOnScroll();

    loader();
    videoPlayer();

    checkFadeIn();

    loadMorePost();
});


jQuery(window).scroll(function($){
    navOnScroll();
    animateOnScroll();
    checkFadeIn();
});

function isInViewport(element) {
    const elementTop = $(element).offset().top;
    const elementBottom = elementTop + $(element).outerHeight();
    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();
    
    // Define buffers for mobile and desktop
    const isMobile = window.innerWidth < 640;
    const topBuffer = isMobile ? 50 : 100;       // Adjust these values as needed
    const bottomBuffer = isMobile ? 150 : 300;   // Adjust these values as needed

    return elementBottom > viewportTop + topBuffer && elementTop < viewportBottom - bottomBuffer;
}

function checkFadeIn() {
    $('.fade-in').each(function () {
        if (isInViewport(this)) {
            $(this).addClass('active');
        }
    });
}

function loader() {
    jQuery('.loader').fadeOut('fast');
    jQuery('.loader-screen').delay(500).fadeOut('slow');
}

// Nav on scroll
function navOnScroll() {
    var headerWrapper = jQuery('.header');
  
    if (headerWrapper.offset().top > 50){
      headerWrapper.addClass('scrolled');
    } else {
      headerWrapper.removeClass('scrolled');
    }
}

// sliders
function scrollingBanner() {
    if ($('.scrolling-banner-slick').length) { // Check if element exists
        $('.scrolling-banner-slick').slick({
            dots: false,
            infinite: true,
            slidesToShow: 7,
            arrows: false,   
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: "linear",
            pauseOnHover: false,
            pauseOnFocus: false,
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 5,
                        speed: 4000,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }
}

function referencesSlider() {
    if ($('.references-slider-1').length) { // Check if element exists
        $('.references-slider-1').slick({
            dots: false,
            infinite: true,
            slidesToShow: 7,
            arrows: false,   
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: "linear",
            pauseOnHover: false,
            pauseOnFocus: false,
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 5,
                        speed: 4000,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    }
                }
            ]
        });
    }
}

function referencesSlider2() {
    if ($('.references-slider-2').length) { // Check if element exists
        $('.references-slider-2').slick({
            dots: false,
            infinite: true,
            slidesToShow: 7,
            arrows: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: "linear",
            pauseOnHover: false,
            pauseOnFocus: false,
            responsive: [
                {
                    breakpoint: 1500,
                    settings: {
                        slidesToShow: 5,
                        speed: 4000,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    }
}

function videoSlider() {
    if ($('.video-slider').length) { // Check if element exists
        $('.video-slider').each(function () {
            const $this = $(this);

            // Check if slider is already initialized
            if ($this.hasClass('slick-initialized')) {
                $this.slick('unslick'); // Destroy the existing slider
            }

            // Reinitialize slick slider
            $this.slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                arrows: true,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: 3,
                            speed: 4000,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    }
}

function videoSliderSingle() {
    if ($('.video-slider-single').length) { // Check if element exists
        $('.video-slider-single').each(function () {
            const $this = $(this);

            // Check if slider is already initialized
            if ($this.hasClass('slick-initialized')) {
                $this.slick('unslick'); // Destroy the existing slider
            }

            // Reinitialize slick slider
            $this.slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                arrows: true,
                slidesToScroll: 1,
            });
        });
    }
}


// accordian
function accordion() {
    if (self.innerWidth) {
      x = self.innerWidth;
    } else if (document.body) {
        x = 600;
    }
  
    jQuery('.accordion .accordion-q').on('click', function() {
      var answer = jQuery(this).next();
      var parentRow = jQuery(this).closest('.accordion-row');
  
      if (x > 601) { jQuery('.accordion-a').not(answer).slideUp(); }
  
      answer.slideToggle();
  
      if (x > 601) { jQuery('.accordion-row').not(parentRow).removeClass('accordion-active'); }
      parentRow.toggleClass('accordion-active');
  
  
    });
}

function customFormButton() {
    jQuery('.wpcf7-submit').after(`
        <button class="btn-flip-green">
            <span class="front">Send message</span>
            <span class="back">Send message</span>
        </button>
    `);
  
    // When the custom button is clicked, trigger the hidden submit button
    jQuery('.btn-flip-green').on('click', function(e) {
        e.preventDefault();
        jQuery(this).closest('.wpcf7-form').find('.wpcf7-submit').click();
    });
}
  
// back to top
function backToTop() {
    $('.back-to-top').on('click', function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        $('html, body').animate({ scrollTop: 0 }, 'slow'); // Smooth scroll to top
    });
}

function smoothScroll() {
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 700, function() {
              var $target = $(target);
              $target.focus();
              if (!$target.is(":focus")) {
                $target.attr('tabindex','-1');
                $target.focus();
              }
            });
          }
        }
    });
}

// mobile nav
function mobileMenu() {
    jQuery('.menu-icon').on('click', function() {
      var $this = jQuery(this);

      jQuery('.header-nav').toggleClass('header-nav-active');
      $this.toggleClass('menu-icon-close');

      jQuery('.header').toggleClass('header-active');
    });

    jQuery('.menu-item').on('click', function() {
      jQuery('.header-nav').removeClass('header-nav-active');
      jQuery('.menu-icon').removeClass('menu-icon-close');
      jQuery('.header').removeClass('header-active');
    });
}

// split words
function splitTextIntoSpans() {
    $('.split-text').each(function() {
        var $this = $(this); // Store the current element
        var text = $this.text(); // Get the text of the current element
        var letters = text.split(''); // Split text into letters
        $this.empty(); // Clear original text
        
        // Wrap each letter in a span and append it back to the current element only
        $.each(letters, function(index, letter) {
            $('<span>' + letter + '</span>').appendTo($this); // Append to the current element
        });
    });
}


function animateOnScroll() {
    const wScroll = jQuery(this).scrollTop();

    const about = jQuery('.about-section').length ? jQuery('.about-section').offset().top - 400 : null;
    const aboutDesc = jQuery('.about-section .section-content').length ? jQuery('.about-section .section-content').offset().top - 600 : null;
    const service = jQuery('.section-services').length ? jQuery('.section-services').offset().top - 600 : null;
    const contact = jQuery('.section-contact').length ? jQuery('.section-contact').offset().top - 600 : null;
    const references = jQuery('.references').length ? jQuery('.references').offset().top - 400 : null;

    function animateText(className) {
        jQuery(`.${className}`).each(function(i) {
            var $this = $(this); // Store the current span in a variable
            setTimeout(function() {
                $this.addClass('scrolled'); // Add the class only to the current span
            }, 140 * (i + 1));
        });
    }


    // about section   
    if(wScroll>about) {
        
        // animate img
        $('.about-section .section-image img').addClass('scrolled');

     } 

     if(wScroll>aboutDesc) {
        $('.about-section .pre-text').addClass('scrolled')
        animateText('about-section .pre-text span');
     } 

     // service
     if(wScroll>service) {

         // animate text
        $('.section-services .pre-text').addClass('scrolled');
        animateText('section-services .pre-text span');

        // animate accordion
        $('.section-services .accordion').addClass('scrolled');
     }

     // contact
    if(wScroll>contact) {

        // animate text
        $('.section-contact .pre-text').addClass('scrolled');
        animateText('section-contact .pre-text span');
    }

    if(wScroll>references) {
        $('.references-subtitle a').addClass('scrolled');
    }
}

function videoPlayer() {
    $('.play-button').on('click', function () {
        const $this = $(this);
        const $wrapper = $this.closest('.custom-video-wrapper');
        const $video = $wrapper.find('.custom-video');
        const $source = $video.find('source');
        const $overlay = $wrapper.find('.video-overlay');
    
        // Set the video source dynamically from data-src
        if ($source.attr('data-src') && !$source.attr('src')) {
            $source.attr('src', $source.attr('data-src'));
            $video[0].load(); // Reload video after setting the src
        }
    
        // Play the video and hide the overlay
        $video[0].play();
        $overlay.fadeOut(); // Hide the custom play button and background
    });
}

function loadMorePost() {
    $('#load-more').off('click').on('click', function () {
        let button = $(this);
        let page = button.data('page'); // Get the current page
        let newPage = page + 1; // Increment the page number
        let category = button.data('category'); // Get the category (ID or slug)

        button.text('Loading...');

        $.ajax({
            url: ajax_url,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                page: newPage,
                category: category, // Pass the category to the server
            },
            success: function (data) {
                if ($.trim(data)) {
                    $('#post-container').append(data);
                    button.data('page', newPage);
                    button.text('Load More');
                    videoPlayer();
                    videoSlider();
                    videoSliderSingle();
                } else {
                    button.remove();
                }
            },
            error: function () {
                alert('Something went wrong, please try again.');
                button.text('Load More');
            }
        });
    });
}
