<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- @include('frontend.layouts.includes.pwa') --}}
    @if (!isset($seo))
        @include('frontend.layouts.includes.meta', [
            'seo' => (object) [
                'title' => 'Md Shefat Masum',
            ],
        ])
    @else
        @include('frontend.layouts.includes.meta', ['seo' => (object) $seo])
    @endif

    <link rel="fabicon" type="image/png" sizes="16x16" href="{{ asset('/cache/favicon.ico') }}">
    <link rel="stylesheet" href="/cache/assets/website/assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="/cache/assets/website/assets/css/style.css">
    <link rel="stylesheet" href="/cache/assets/website/assets/css/custom.css">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@graph": [
                {
                    "@type": "ImageObject",
                    "contentUrl": "{{ asset('assets/website/assets/img/hero_img.png') }}",
                    "description": "Muhammad Shefat Ullah Masum, Software Engineer, Full Stack Developer",
                    "name": "MD. Shefat Ullah Masum",
                    "author": {
                        "@type": "Person",
                        "name": "Shefat"
                    },
                    "datePublished": "2024-08-07",
                    "thumbnailUrl": "{{ asset('assets/website/assets/img/hero_img.png') }}",
                    "caption": "A Software Engineer, Full Stack Developer",
                    "width": "601",
                    "height": "840"
                }
            ]
        }
    </script>

    @stack('jsonld')
</head>

<body>
    @if (env('APP_ENV') != 'local')
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9MCWSJ7" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
    @endif

    {{-- <div class="cs_preloader cs_center">
        <div class="cs_preloader_in"></div>
    </div> --}}
    <span class="cs_cursor_lg d"></span>
    <span class="cs_cursor_sm"></span>

    <header class="cs_site_header cs_style_1 cs_sticky_header">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding" href="/">
                            <img src="/cache/assets/website/assets/img/logo.png" height="76px" width="86px"
                                alt="Logo">
                        </a>
                    </div>
                    <div class="cs_main_header_center">
                        @include('frontend.layouts.includes.nav')
                    </div>
                    <div class="cs_main_header_right">
                        <a href="/contact" class="cs_btn cs_style_1 cs_primary_font">
                            <span>Hire Me</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Main content inside start-->
    <main>
        @yield('contents')
    </main>
    <!-- Main content inside end-->

    <!-- Start Footer -->
    <footer class="cs_footer cs_style_1 cs_filled_bg position-relative">
        <div class="position-absolute cs_footer_shape_1">
            <img src="/cache/assets/website/assets/img/footer_shape.svg" alt="">
        </div>
        <div class="container">
            <div class="cs_footer_cta">
                <h2 class="cs_font_92 cs_gradient_text_2 cs_semi_bold">Have a project?</h2>
                <a href="/contact" class="cs_btn cs_style_1 cs_primary_font">
                    <span>
                        Let's Talk
                    </span>
                </a>
            </div>
            <div class="cs_copyright">© 2023 <a href="{{ url('') }}">MD Shefat Ullah Masum</a>. All rights
                reserved</div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start video popup -->
    {{-- <div class="cs_video_popup">
        <div class="cs_video_popup_overlay"></div>
        <div class="cs_video_popup_content">
            <div class="cs_video_popup_layer"></div>
            <div class="cs_video_popup_container">
                <div class="cs_video_popup_align">
                    <div class="ratio ratio-16x9">
                        <iframe src="about:blank"></iframe>
                    </div>
                </div>
                <div class="cs_video_popup_close"></div>
            </div>
        </div>
    </div> --}}
    <!-- End video popup -->

    {{-- <script src="{{ asset('/assets/js/plugins/turbolinks.min.js') }}"></script> --}}

    <link rel="stylesheet" href="/cache/assets/website/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="/cache/assets/website/assets/css/plugins/odometer-theme-default.css">
    <link rel="stylesheet" href="/cache/assets/website/assets/css/plugins/animate.css">

    <script src="{{ asset('/cache/assets/website/assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/cache/assets/js/plugins/localforage.min.js') }}"></script>
    <script src="{{ asset('/cache/assets/js/plugins/sweetalert.js') }}"></script>
    <script src="{{ asset('/cache/assets/js/plugins/axios.js') }}"></script>
    <script src="{{ asset('/cache/assets/website/assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('/cache/assets/website/assets/js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('/cache/assets/website/assets/js/main.js') }}"></script>
    @stack('cjs')
    <script defer src="{{ asset('/cache/assets/js/frontend.js') }}"></script>

    @if (env('APP_ENV') != 'local')
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YN023B9MCX"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-YN023B9MCX');
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-P9MCWSJ7');
        </script>
        <!-- End Google Tag Manager -->
    @endif
</body>

</html>
