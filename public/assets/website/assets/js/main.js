(function ($) {
    'use strict';

    /*
    |--------------------------------------------------------------------------
    | Template Name: Portm
    | Author: Laralink
    | Version: 1.0.0
    |--------------------------------------------------------------------------
    |--------------------------------------------------------------------------
    | TABLE OF CONTENTS:
    |--------------------------------------------------------------------------
    |
    | 1.
    | 2. Mobile Menu
    | 3. Sticky Header
    | 4. Dynamic Background
    | 5. Isotop Initialize
    | 6. Modal Video
    | 7. Tabs
    | 8. Counter Animation
    | 9. Progress Bar
    | 10. Cursor Animation
    |
    */

    /*--------------------------------------------------------------
      Scripts initialization
    --------------------------------------------------------------*/
    $.exists = function (selector) {
        return $(selector).length > 0;
    };

    $(window).on('load', function () {
        $(window).trigger('scroll');
        $(window).trigger('resize');
    });

    $(function () {
        $(window).trigger('resize');


        dynamicBackground();
        modalVideo();
        tabs();
        progressBar();
        if ($.exists('.wow')) {
            // new WOW().init();
        }
    });


})(jQuery); // End of use strict




/*--------------------------------------------------------------
  4. Dynamic Background
--------------------------------------------------------------*/
function dynamicBackground() {
    $('[data-src]').each(function () {
        var src = $(this).attr('data-src');
        $(this).css({
            'background-image': 'url(' + src + ')',
        });
    });
}

/*--------------------------------------------------------------
  5. Isotop Initialize
--------------------------------------------------------------*/
function isotopInit() {
    if ($.exists('.cs_isotop')) {

        // $('.cs_isotop').isotope({
        //     itemSelector: '.cs_isotop_item',
        //     transitionDuration: '0.60s',
        //     percentPosition: true,
        //     masonry: {
        //         columnWidth: '.cs_grid_sizer',
        //     },
        // });

        // /* Active Class of Portfolio*/
        // $('.cs_isotop_filter ul li').on('click', function (event) {
        //     $(this).siblings('.active').removeClass('active');
        //     $(this).addClass('active');
        //     event.preventDefault();
        // });

        // /*=== Portfolio filtering ===*/
        // $('.cs_isotop_filter ul').on('click', 'a', function () {
        //     var filterElement = $(this).attr('data-filter');
        //     $('.cs_isotop').isotope({
        //         filter: filterElement,
        //     });
        // });
    }
}



/*--------------------------------------------------------------
  6. Modal Video
--------------------------------------------------------------*/
function modalVideo() {
    $(document).on('click', '.cs_video_open', function (e) {
        e.preventDefault();
        var video = $(this).attr('href');
        $('.cs_video_popup_container iframe').attr('src', video);
        $('.cs_video_popup').addClass('active');
    });
    $('.cs_video_popup_close, .cs_video_popup_layer').on('click', function (e) {
        $('.cs_video_popup').removeClass('active');
        $('html').removeClass('overflow_hidden');
        $('.cs_video_popup_container iframe').attr('src', 'about:blank');
        e.preventDefault();
    });
}

/*--------------------------------------------------------------
  7. Tabs
--------------------------------------------------------------*/
function tabs() {
    $('.cs_tabs .cs_tab_links a').on('click', function (e) {
        var currentAttrValue = $(this).attr('href');
        $('.cs_tabs ' + `[data-id="${currentAttrValue}"]`)
            .fadeIn(400)
            .siblings()
            .hide();
        $(this).parents('li').addClass('active').siblings().removeClass('active');
        isotopInit();
        e.preventDefault();
    });
}



/*--------------------------------------------------------------
  9. Progress Bar
--------------------------------------------------------------*/
function progressBar() {
    $('.cs_progress').each(function () {
        var progressPercentage = $(this).data('progress') + '%';
        $(this).find('.cs_progress_in').css('width', progressPercentage);
    });
}

/*--------------------------------------------------------------
  10. Cursor Animation
--------------------------------------------------------------*/
$(function () {
    // $('body').append('<span class="cs_cursor_lg d"></span>');
    // $('body').append('<span class="cs_cursor_sm"></span>');
    $('a, button').on('mouseenter', function () {
        $('.cs_cursor_lg').addClass('opacity-0');
        $('.cs_cursor_sm').addClass('opacity-0');
    });
    $('a, button').on('mouseleave', function () {
        $('.cs_cursor_lg').removeClass('opacity-0');
        $('.cs_cursor_sm').removeClass('opacity-0');
    });
});


