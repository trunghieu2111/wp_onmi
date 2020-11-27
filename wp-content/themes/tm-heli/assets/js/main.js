/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
jQuery(document).ready(function ($) {
    'use strict';
	$('nav#menu').mmenu();
    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });
    // ScrollTo
    function goToByScroll(id) {
        // Scroll
        $('html,body').animate({
                scrollTop: $(id).offset().top
            },
            'slow');
    }

    $("#site-navigation a, #mobile-menu").click(function (e) {
        var href = $(this).attr('href');
        var id = href.split("#");
        if (typeof id[1] != "undefined") {
            if ($('#' + id[1]).length > 0) {
                // Prevent a page reload when a link is pressed
                e.preventDefault();
                // Call the scroll function
                goToByScroll('#' + id[1]);
            }
        }
    });

    if ($('.onepage-scroll').length > 0) {
        if ($(window).width() > 969) {
            onePageScroll();
        }
        $(window).resize(function () {
            location.reload();
        });
    }
    // Set height for onepage-scroll
    function onePageScroll() {
        var $opScroll = $('.entry-content'),
            $hWindows = $(window).height(),
            $hHeader = $('.site-header').outerHeight(),
            $hFooter = $('.footer-wrapper').outerHeight();
        $opScroll.onepage_scroll({
            sectionContainer: '.onepage',
            loop: false
        });

        $opScroll.css('height', $hWindows + 'px');
    }
});
jQuery(document).ready(function ($) {
    'use strict';

    // Sider
    $('.header-icon-canvas').sidr({
        name: 'side-box-container',
        source: '#side-box-container',
        side: 'right',
        renaming: false,
        displace: false
    });
    $('.button-side-box-close').on('click', function (evt) {
        evt.preventDefault();

        $.sidr('close', 'side-box-container');
    });

    // mini-cart
    var $mini_cart = $('.mini-cart');
    $mini_cart.on('click', function (e) {
        $(this).addClass('open');
    });

    $(document).on('click', function (e) {
        if ($(e.target).closest($mini_cart).length == 0) {
            $mini_cart.removeClass('open');
        }
    });

    // Full screen search
    var $fullSearchContainer = $('.search-form-container-full');
    $('.header-icon-search').on('click', function (evt) {
        evt.preventDefault();

        $fullSearchContainer.addClass('open');
    });

    $fullSearchContainer.on('click', function (evt) {
        if (!$(evt.target).parents('.search-form').length) {
            $fullSearchContainer.removeClass('open');
        }
    });

    // search in menu
    var $search_btn = $('.search-box > i'),
        $search_form = $('form.search-form');

    $search_btn.on('click', function () {
        $search_form.toggleClass('open');
    });

    $(document).on('click', function (e) {
        if ($(e.target).closest($search_btn).length == 0
            && $(e.target).closest('input.search-field').length == 0
            && $search_form.hasClass('open')) {
            $search_form.removeClass('open');
        }
    });

    // Header 8 Menu
    $('.header08 #side-box-container .menu .sub-menu').slideUp();
    $('.header08 #side-box-container .menu .menu-item-has-children').each(function () {
        var $this = $(this);

        $this.append('<a href="#" class="menu-parent-toggle"><i class="pe-7s-angle-down"></i></a>');
        $this.addClass('menu-close')
        $this.children('.menu-parent-toggle').on('click', function () {
            var $menuItem = $(this).parent();

            if ($menuItem.hasClass('menu-open')) {
                $menuItem
                    .removeClass('menu-open')
                    .addClass('menu-close')
                    .children('.sub-menu')
                    .slideUp();
            } else {
                $menuItem
                    .removeClass('menu-close')
                    .addClass('menu-open')
                    .children('.sub-menu')
                    .slideDown();
            }

            return false;
        });
    });

    $('.header08 .mini-cart')
        .off('click')
        .on('click', function () {
            window.location = $(this).data('url');
        });


    var wow = new WOW(
        {
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 300,          // distance to the element when triggering the animation (default is 0)
            mobile: true,       // trigger animations on mobile devices (default is true)
            live: true,       // act on asynchronously loaded content (default is true)
            callback: function (box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();

	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
});
