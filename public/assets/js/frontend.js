document.addEventListener("DOMContentLoaded", () => {
    Turbolinks.start()
    document.addEventListener("turbolinks:before-render", function (event) {
    });
    document.addEventListener("turbolinks:render", function (event) {
    });
    document.addEventListener("turbolinks:load", function (event) {
        console.log("page loaded");
        preloader();
        nav_active();
        counterInit();
        mainNav();
        stickyHeader();
        document.addEventListener('mousemove', cursorMovingAnimation);
    });
});

function nav_active(){
    $(`a[href="${window.location.pathname}"]`).parents('li').addClass('active')
}

function preloader() {
    $('.cs_preloader_in').fadeOut();
    $('.cs_preloader').delay(150).fadeOut('slow');
}

function cursorMovingAnimation(event) {
    try {
        const timing = gsap.timeline({
            defaults: {
                x: event.clientX,
                y: event.clientY,
            },
        });

        timing
            .to('.cs_cursor_lg', {
                ease: 'power2.out',
            })
            .to(
                '.cs_cursor_sm',
                {
                    ease: 'power2.out',
                },
                '-=0.4',
            );
    } catch (err) {
        console.log(err);
    }
}

function counterInit() {
    if ($.exists('.odometer')) {
        function winScrollPosition() {
            var scrollPos = $(window).scrollTop(),
                winHeight = $(window).height();
            var scrollPosition = Math.round(scrollPos + winHeight / 1.2);
            return scrollPosition;
        }

        $('.odometer').each(function () {
            var elemOffset = $(this).offset().top;
            if (elemOffset < winScrollPosition()) {
                $(this).html($(this).data('count-to'));
            }
        });
    }
}

function mainNav() {
    $('.cs_nav').append('<span class="cs_menu_toggle"><span></span></span>');
    $('.menu-item-has-children').append(
        '<span class="cs_menu_dropdown_toggle"></span>',
    );
    $('.cs_menu_toggle').on('click', function () {
        $(this)
            .toggleClass('cs_toggle_active')
            .siblings('.cs_nav_list')
            .slideToggle();
    });
    $('.cs_menu_dropdown_toggle').on('click', function () {
        $(this).toggleClass('active').siblings('ul').slideToggle();
        $(this).parent().toggleClass('active');
    });
}

function stickyHeader() {
    var $window = $(window);
    var lastScrollTop = 0;
    var $header = $('.cs_sticky_header');
    var headerHeight = $header.outerHeight() + 30;

    $window.scroll(function () {
        var windowTop = $window.scrollTop();

        if (windowTop >= headerHeight) {
            $header.addClass('cs_gescout_sticky');
        } else {
            $header.removeClass('cs_gescout_sticky');
            $header.removeClass('cs_gescout_show');
        }

        if ($header.hasClass('cs_gescout_sticky')) {
            if (windowTop < lastScrollTop) {
                $header.addClass('cs_gescout_show');
            } else {
                $header.removeClass('cs_gescout_show');
            }
        }

        lastScrollTop = windowTop;
    });
}
