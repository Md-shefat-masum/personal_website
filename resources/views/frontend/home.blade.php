@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "Md Shefat Masum",
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')

@include('frontend.pages.home.banner')
@include('frontend.pages.home.about')

<!-- Start Service Section -->
<section class="cs_100_bg position-relative" data-src="/assets/website/assets/img/bg/service_bg.png">
    <div class="cs_service_shape_1 position-absolute">
        <img src="/assets/website/assets/img/service_shape_1.svg" alt="">
    </div>
    <div class="cs_height_145 cs_height_lg_75"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_accent_color_2 cs_font_16 wow fadeInLeft" data-wow-duration="0.8s"
                data-wow-delay="0.2s">
                <span>Services</span>
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.3165 0.722028C7.59665 0.85855 7.46009 1.00749 7.3608 1.6529C7.28633 2.17419 7.27388 2.1866 7.01329 2.02525C5.33769 0.933026 1.46525 3.71325 2.66918 5.14059C3.30217 5.88533 3.48833 6.25767 3.57521 6.38178C1.5521 6.69201 0.96875 6.64236 0.96875 8.90136C0.96875 10.7755 1.46522 10.6762 3.82344 10.8376C3.61244 11.1355 2.7809 12.4387 2.30925 12.9848C1.8252 13.5433 1.84999 13.6674 2.59469 14.4494C4.76674 16.7455 5.90861 17.1179 7.05048 15.9015C7.5221 15.4051 7.6463 15.492 7.65866 16.3856C7.68349 17.4778 8.94951 17.7881 12.1889 17.4654C14.2245 17.2668 14.0382 17.031 13.8769 15.8643L15.1802 16.4104C16.5082 16.9689 17.0171 16.5966 19.636 13.1337C19.7973 12.9227 19.3133 12.5008 18.9161 12.5008C18.7671 12.5008 18.3699 12.2525 18.0348 11.9546L17.4142 11.4085C17.8487 11.3589 18.5685 11.2596 19.1519 11.1603C19.4497 11.1106 19.6608 10.8624 19.6856 10.5645C19.8097 8.78962 19.8594 8.0325 19.8594 8.04495C19.8718 7.84638 19.7725 7.64771 19.6111 7.53605C19.4249 7.41194 19.1147 7.25055 18.5686 7.1389C17.6997 6.96514 17.6873 7.05198 18.6678 6.00944C19.7228 4.86753 19.7477 4.942 17.8735 3.01819C16.26 1.35502 14.9692 0.833728 14.1748 1.49155L13.7901 1.81425L13.7155 1.50396C13.5294 0.759261 10.4513 0.312435 8.3165 0.722028ZM11.7918 3.30365C11.9034 5.94734 12.3627 6.17074 13.9266 4.35865C15.5526 2.48449 15.3044 2.55895 16.409 3.61395C17.5881 4.731 17.6253 4.55724 15.9993 6.08391C14.1624 7.79673 14.2866 8.15661 16.6199 7.90839C18.3327 7.72218 18.1465 8.10696 17.9728 10.2542C14.8698 10.4528 13.8273 10.4528 15.4656 11.6195C16.744 12.538 17.3149 13.084 17.166 13.2826C17.0915 13.3695 15.5898 15.2313 15.5898 15.2313C15.3912 15.0824 15.0933 14.9583 14.0755 13.9777C12.5861 12.5628 12.0897 12.7738 12.1393 14.8465L12.1766 16.3236C9.64453 16.6711 9.73145 16.8324 9.59489 14.5238C9.54524 13.6799 9.65699 12.1656 7.94417 12.8358C7.17459 13.1337 6.20649 13.9156 5.80931 14.6479C5.63555 14.9706 5.51145 14.921 4.70469 14.3004C3.81104 13.6178 3.78622 13.8163 4.89086 12.5131C5.25079 12.0912 5.61075 11.6071 5.83416 11.2719C6.70298 9.93153 5.39977 9.64603 3.81108 9.64603H3.09116C3.09116 9.64603 3.10358 8.2559 3.21528 7.63534C3.3394 7.63534 4.13374 7.64771 4.89086 7.66017C6.92637 7.68499 6.98845 7.63534 6.08239 6.64236C5.22599 5.71149 4.7419 5.09094 4.44403 4.74341C4.61779 4.58206 3.83589 5.33917 6.09482 3.1423C6.23134 3.29124 6.93879 4.03594 7.62148 4.85511C8.4778 5.88524 9.48323 5.50053 9.48323 4.80547V4.06077C9.4956 1.40467 9.38385 1.59084 10.9106 1.62807L11.7173 1.64049L11.7918 3.30365Z"
                        fill="#342EAD" />
                </svg>
            </p>
            <h2 class="cs_section_title cs_font_48 cs_semi_bold">How can <span class="cs_accent_color">I help
                    you</span>
            </h2>
        </div>
        <div class="cs_height_72 cs_height_lg_62"></div>
        <div class="row cs_gap_40 justify-content-md-center">
            <div class="col-lg-4 col-md-6">
                <div class="cs_iconbox cs_style_1 cs_transform_up_hover_5 cs_transition_4">
                    <div class="cs_iconbox_in">
                        <div class="cs_iconbox_icon cs_center rounded-circle cs_white_bg">
                            <svg width="32" height="30" viewBox="0 0 32 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.988 24H18.008C18.008 24.5339 18.2214 25.0457 18.6008 25.4213C18.9802 25.797 19.4941 26.0053 20.028 26H23.988C24.7025 25.9964 25.3647 26.3743 25.725 26.9913C26.0854 27.6084 26.0892 28.3708 25.735 28.9913C25.3809 29.6119 24.7225 29.9964 24.008 30H8.00799C6.90343 30 6.00799 29.1046 6.00799 28C6.01455 26.8982 6.90615 26.0066 8.00799 26H11.94C12.4739 26.0053 12.9877 25.797 13.3671 25.4213C13.7466 25.0457 13.96 24.5339 13.96 24H4.014C1.80304 23.9989 0.00880834 22.211 0 20V4.00002C-6.51263e-06 2.93673 0.423342 1.91718 1.17652 1.16664C1.92969 0.416086 2.95071 -0.003697 4.014 2.4535e-05H27.98C30.1942 -0.00440054 31.9934 1.78582 32 4.00002V20.02C31.989 22.226 30.194 24.0067 27.988 24ZM27.988 3.99997H4.008C4.008 3.99997 4.02 20 4.022 20H28.008L27.988 3.99997Z"
                                    fill="#342EAD" />
                            </svg>
                        </div>
                        <p class="cs_iconbox_mini_title cs_ternary_color text-uppercase cs_font_15">21 Projects
                        </p>
                        <h3 class="cs_iconbox_title cs_font_28 cs_medium">Web UI/UX Design</h3>
                        <p class="cs_iconbox_subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo
                            ligula eget dolor.</p>
                        <a href="portfolio-details.html"
                            class="cs_iconbox_btn cs_primary_color_hover cs_center_between">
                            <span
                                class="cs_iconbox_btn_text position-relative d-inline-block cs_font_16">Explore</span>
                            <span class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="cs_progressbar cs_style_1 text-center">
                        <h3 class="cs_progressbar_head cs_accent_color cs_normal cs_font_14"><span
                                class="odometer" data-count-to="85"></span>%</h3>
                        <div class="cs_progress" data-progress="85">
                            <div class="cs_progress_in"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_iconbox cs_style_1 cs_transform_up_hover_5 cs_transition_4">
                    <div class="cs_iconbox_in">
                        <div class="cs_iconbox_icon cs_center rounded-circle cs_white_bg">
                            <svg width="21" height="32" viewBox="0 0 21 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.4545 26.1818H2.90909V5.81818H17.4545M17.4545 0H2.90909C1.29455 0 0 1.29455 0 2.90909V29.0909C0 29.8624 0.306492 30.6024 0.852053 31.1479C1.39761 31.6935 2.13755 32 2.90909 32H17.4545C18.2261 32 18.966 31.6935 19.5116 31.1479C20.0571 30.6024 20.3636 29.8624 20.3636 29.0909V2.90909C20.3636 1.29455 19.0545 0 17.4545 0Z"
                                    fill="#342EAD" />
                            </svg>
                        </div>
                        <p class="cs_iconbox_mini_title cs_ternary_color text-uppercase cs_font_15">18 Projects
                        </p>
                        <h3 class="cs_iconbox_title cs_font_28 cs_medium">Mobile UI/UX Design</h3>
                        <p class="cs_iconbox_subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo
                            ligula eget dolor.</p>
                        <a href="portfolio-details.html"
                            class="cs_iconbox_btn cs_primary_color_hover cs_center_between">
                            <span
                                class="cs_iconbox_btn_text position-relative d-inline-block cs_font_16">Explore</span>
                            <span class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="cs_progressbar cs_style_1 text-center">
                        <h3 class="cs_progressbar_head cs_accent_color cs_normal cs_font_14"><span
                                class="odometer" data-count-to="75"></span>%</h3>
                        <div class="cs_progress" data-progress="75">
                            <div class="cs_progress_in"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_iconbox cs_style_1 cs_transform_up_hover_5 cs_transition_4">
                    <div class="cs_iconbox_in">
                        <div class="cs_iconbox_icon cs_center rounded-circle cs_white_bg">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.27615 22.4222V27.7238H7.57776L23.2139 12.0735L17.9123 6.77191L2.27615 22.4222ZM30 23.9915L23.9915 30L16.64 22.6484L19.1423 20.1461L20.5561 21.5598L24.0481 18.0537L26.0556 20.0613L23.9915 22.0688L25.4901 23.4826L27.4976 21.5033L30 23.9915ZM7.37983 13.3459L0 6.00848L6.00848 0L8.4967 2.50236L5.00471 6.00848L6.51744 7.50707L9.99529 4.00094L12.0028 6.00848L9.99529 8.00189L11.409 9.41565L7.37983 13.3459ZM27.3139 7.9312C27.8652 7.37983 27.8652 6.51744 27.3139 5.93779L24.0057 2.68615C23.4826 2.13478 22.5636 2.13478 22.0122 2.68615L19.4109 5.27333L24.7125 10.5749L27.3139 7.9312Z"
                                    fill="#342EAD" />
                            </svg>
                        </div>
                        <p class="cs_iconbox_mini_title cs_ternary_color text-uppercase cs_font_15">25 Projects
                        </p>
                        <h3 class="cs_iconbox_title cs_font_28 cs_medium">Branding Design</h3>
                        <p class="cs_iconbox_subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo
                            ligula eget dolor.</p>
                        <a href="portfolio-details.html"
                            class="cs_iconbox_btn cs_primary_color_hover cs_center_between">
                            <span
                                class="cs_iconbox_btn_text position-relative d-inline-block cs_font_16">Explore</span>
                            <span class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="cs_progressbar cs_style_1 text-center">
                        <h3 class="cs_progressbar_head cs_accent_color cs_normal cs_font_14"><span
                                class="odometer" data-count-to="93"></span>%</h3>
                        <div class="cs_progress" data-progress="93">
                            <div class="cs_progress_in"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_20"></div>
</section>
<!-- End Service Section -->

<!-- Start Portfolio Section -->
<section class="cs_100_bg" data-src="/assets/website/assets/img/bg/portfolio_bg.png">
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_grid_3">
            <div class="cs_grid_item">
                <div class="cs_portfolio cs_style_1 cs_zoom position-relative">
                    <div class="cs_section_heading cs_style_1">
                        <p class="cs_section_subtitle cs_violet_text cs_font_16 wow fadeInRight"
                            data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <span>Portfolio</span>
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.19081 0.0804121C2.96402 0.280944 3.78977 1.09487 4.80423 1.23643C5.65354 1.35439 7.28135 1.35439 10.7848 1.34259C15.0549 1.3308 16.8833 1.37797 17.1546 1.49593C17.827 1.80263 18.1219 2.98224 18.3107 6.17896C18.3814 7.31138 18.523 9.01 18.6291 9.95368C18.9594 12.9853 18.6527 13.2802 14.7719 13.4335C13.2738 13.4925 11.3274 13.6104 10.4545 13.693C6.37308 14.0823 3.83693 14.0115 2.42141 13.4453C1.24181 12.9734 1.30081 12.596 1.26542 11.8056C1.18285 10.2722 1.21823 7.14621 1.37157 4.30338C1.50133 1.92058 1.65467 1.44875 2.42141 1.09487C2.89325 0.882538 2.72812 0.634828 2.13831 0.65842C1.25361 0.705604 0.569457 1.0005 0.439701 2.38063C0.274556 4.07926 -0.775323 13.4099 1.11204 14.2002C2.35062 14.7193 4.50929 15.2265 5.3586 15.2265C5.9484 15.2265 5.92485 15.8871 5.33505 16.064C3.9785 16.4533 4.93396 17.397 6.72695 17.4677C10.3601 17.5857 15.6684 17.2908 15.7155 16.9487C15.7627 16.6066 14.996 15.8281 14.5949 15.8281C14.4652 15.8281 14.3826 15.6747 14.3826 15.4506C14.3826 15.1321 14.3826 14.6839 14.7482 14.6839C16.3171 14.6839 17.1546 14.6131 17.6265 14.5069C19.9267 14.0115 20.0211 12.4544 19.9975 11.5461C19.9149 7.8304 19.2189 4.27981 19.2189 3.44229C19.2071 1.99138 18.3578 0.564051 16.5413 0.304539C15.8335 0.092211 5.4058 -0.12012 4.19081 0.0804121ZM10.3484 7.29958C10.2068 7.14623 8.83846 5.62455 8.46099 5.23528C7.98915 4.75164 7.50549 4.90497 6.49103 5.83686C5.97201 6.32049 5.15809 7.04007 4.67446 7.45293C2.99942 8.86845 2.86966 9.50543 4.24979 9.50543C4.72163 9.50543 4.94579 9.34027 6.34951 7.90116C8.1661 6.03739 8.00095 6.04919 9.58161 7.58267C10.6433 8.60892 10.5135 8.62074 12.2357 7.27599C13.722 5.89586 14.5713 4.97576 15.6448 3.90232C16.7064 2.84068 15.0785 2.35704 14.2174 3.08839C13.203 3.92591 10.3601 7.28778 10.3484 7.29958ZM14.1702 6.74517C13.9579 7.28779 14.0641 10.9092 14.3 11.1333C14.878 11.7113 15.2319 10.4727 15.1965 8.01912C15.1729 6.66258 14.5123 5.84868 14.1702 6.74517ZM7.34037 8.21967C6.97469 9.18695 7.28136 11.8293 8.02451 11.6995C8.76766 11.5697 8.26045 8.65611 8.0953 8.23145C7.98914 7.92476 7.45833 7.91298 7.34037 8.21967ZM12.1413 8.49096C11.9408 8.73868 11.7403 10.5671 11.87 11.0625C12.0941 11.9472 13.026 11.5579 13.026 10.5789C13.026 8.93923 12.6014 7.93655 12.1413 8.49096ZM5.42939 9.75316C5.25245 9.9301 5.32322 11.2512 5.53554 11.5343C5.91302 12.0534 6.2433 11.7231 6.2433 10.8148C6.23151 9.87112 5.83046 9.34029 5.42939 9.75316ZM9.49901 9.75316C9.19232 10.0599 9.40464 11.322 9.78211 11.4989C10.3837 11.7703 10.5843 11.0271 10.2186 9.8475C10.1596 9.63517 9.67596 9.57621 9.49901 9.75316ZM12.5424 14.8844C13.0143 15.0142 12.8373 15.4388 12.8845 15.8281L7.43471 15.9224C7.43471 15.8871 7.52912 14.9552 7.52912 15.0142C7.90659 15.0024 11.3628 14.8608 11.8347 14.8254C12.0234 14.8018 12.3537 14.8372 12.5424 14.8844Z"
                                    fill="currentColor" />
                            </svg>
                        </p>
                        <h2 class="cs_section_title cs_font_48 cs_semi_bold"><span class="cs_white_blue_text">My
                                latest
                            </span><br><span class="cs_accent_color">Projects</span>
                        </h2>
                    </div>
                </div>
                <div class="cs_height_60 cs_height_lg_30"></div>
            </div>
            <div class="cs_grid_item">
                <a href="portfolio-details.html" class="cs_portfolio cs_style_1 cs_zoom position-relative">
                    <div class="cs_portfolio_thumbnail">
                        <img class="cs_zoom_in w-100" src="/assets/website/assets/img/portfolio/p3.jpg" alt="">
                    </div>
                    <div class="cs_portfolio_info cs_white_color cs_medium position-absolute">
                        <h2 class="cs_font_28 cs_white_color cs_medium mb-0">Fitst Project</h2>
                        <div class="cs_font_16 cs_gap_15 d-inline-flex cs_medium align-items-center">
                            <span class="cs_text_btn cs_secondary_font cs_type_1 text-uppercase">View
                                work</span>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0L5 4.5L0 9L0 0Z" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="portfolio-details.html" class="cs_portfolio cs_style_1 cs_zoom position-relative">
                    <div class="cs_portfolio_thumbnail">
                        <img class="cs_zoom_in w-100" src="/assets/website/assets/img/portfolio/p2.jpg" alt="">
                    </div>
                    <div class="cs_portfolio_info cs_white_color cs_medium position-absolute">
                        <h2 class="cs_font_28 cs_white_color cs_medium mb-0">Second Project</h2>
                        <div class="cs_font_16 cs_gap_15 d-inline-flex cs_medium align-items-center">
                            <span class="cs_text_btn cs_secondary_font cs_type_1 text-uppercase">View
                                work</span>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0L5 4.5L0 9L0 0Z" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <a href="portfolio-details.html" class="cs_portfolio cs_style_1 cs_zoom position-relative">
                    <div class="cs_portfolio_thumbnail">
                        <img class="cs_zoom_in w-100" src="/assets/website/assets/img/portfolio/p1.jpg" alt="">
                    </div>
                    <div class="cs_portfolio_info cs_white_color cs_medium position-absolute">
                        <h2 class="cs_font_28 cs_white_color cs_medium mb-0">Third Project</h2>
                        <div class="cs_font_16 cs_gap_15 d-inline-flex cs_medium align-items-center">
                            <span class="cs_text_btn cs_secondary_font cs_type_1 text-uppercase">View
                                work</span>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0L5 4.5L0 9L0 0Z" fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cs_grid_item">
                <div class="cs_portfolio_btn_wrap text-center wow fadeInUp" data-wow-duration="0.8s"
                    data-wow-delay="0.2s">
                    <a class="cs_portfolio_text_btn d-inline-flex cs_gap_25 align-items-center cs_font_24 cs_accent_color cs_semi_bold"
                        href="portfolio.html">
                        <span class="cs_text_btn">View All Project</span>
                        <span class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L14 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H14V14" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L14 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H14V14" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>
<!-- End Portfolio Section -->

<!-- Start Testimonial Section -->
<section class="position-relative">
    <div class="cs_testmonial_shape_1 position-absolute">
        <img src="/assets/website/assets/img/testmonial_shape_1.svg" alt="testmonial_shape">
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_isotop cs_isotop_col_2 cs_has_gutter_40">
            <div class="cs_grid_sizer"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cs_isotop_item">
                        <div class="cs_section_heading cs_style_1">
                            <p class="cs_section_subtitle cs_accent_color_2 cs_font_16 wow fadeInLeft"
                                data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <span>Testimonials</span>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.32185 0.162195C5.92711 0.458249 6.20673 1.29707 6.83174 1.70825C7.35805 2.05365 9.61133 2.16878 11.2561 1.95496C15.7627 1.34641 18.2298 2.57997 17.9831 5.2938C17.6377 9.27408 17.5719 12.0866 17.8186 13.4353C18.0982 14.9978 18.0653 14.8826 17.539 14.4879C17.0292 14.1096 15.8614 13.3366 15.2035 12.9254C14.6607 12.5965 13.7232 12.1195 13.5423 12.728C13.2462 13.7313 12.358 15.2774 11.5686 16.33C9.77579 18.7149 6.32185 19.2577 3.36131 18.7478C2.11131 18.534 2.07841 18.1063 2.12775 17.1688C2.29223 13.8136 2.52246 4.86616 2.9172 2.97471C3.11457 2.02076 3.34485 1.85628 4.08498 1.64246C5.38433 1.28062 4.4962 0.655619 2.96659 0.836541C1.89751 0.968121 1.28895 1.36286 0.910659 2.76089C0.334999 4.9484 0.400789 8.92867 0.0060502 17.0702C-0.0926344 18.9781 1.02579 19.636 2.63764 19.8004C3.59159 19.8991 5.03895 19.932 7.47317 19.9649C10.4995 19.9978 12.0126 20.0471 13.0324 19.8991C14.1837 19.7346 14.6936 19.3235 16.0588 18.4188C20.368 15.5241 20.2035 15.7873 20.2199 11.9714C20.2528 3.22142 19.0357 0.984568 14.0686 0.754304C12.6212 0.688514 11.2232 0.524037 10.6969 0.37601C9.3153 -0.00228091 6.71659 -0.133858 6.32185 0.162195ZM9.24946 4.83327C8.0488 4.93195 7.63768 5.82011 8.65742 6.09972C9.49624 6.32998 13.7067 6.37932 15.1048 6.2313C15.96 6.13261 15.6146 5.52406 14.9238 5.228C13.9041 4.78392 11.8153 4.61945 9.24946 4.83327ZM7.17715 8.18854C4.34819 8.32012 5.08831 9.09315 6.33831 9.33986C8.87122 9.83328 15.5982 9.89908 15.5982 9.24118C15.5982 8.33657 12.3745 7.94183 7.17715 8.18854ZM7.19353 13.6984C8.3613 13.6655 10.6969 13.4682 11.1245 13.3366C11.8647 13.1063 10.8449 12.3168 9.56203 12.1359C7.83504 11.8892 7.11129 11.8234 6.70011 11.8563C4.52905 11.9714 5.483 13.7478 7.19353 13.6984ZM17.8021 15.5405C17.6048 15.6886 15.7133 17.5965 13.4436 18.5504C12.5883 18.9123 12.1442 18.8629 12.7034 18.1392C13.1475 17.3333 14.6772 13.9287 15.0555 13.9287C15.2693 13.9451 17.8021 15.5405 17.8021 15.5405Z"
                                        fill="#342EAD" />
                                </svg>
                            </p>
                            <h2 class="cs_section_title cs_font_48 cs_semi_bold">What <span class="cs_accent_color">my
                                    client</span><br>have to say<br><span class="cs_accent_color_2">about me</span>
                            </h2>
                        </div>
                        <div class="cs_height_75"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs_isotop_item" style="width: unset;">
                        <div class="cs_testimonial cs_style_1 cs_radius_10 overflow-hidden cs_filled_bg" data-src="/assets/website/assets/img/bg/testimonial_bg.svg" style="background-image: url(&quot;assets/website/assets/img/bg/testimonial_bg.svg&quot;);">
                            <div class="cs_testimonial_in">
                                <div class="cs_testmonial_icon">
                                    <svg width="49" height="36" viewBox="0 0 49 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.777 2.44455L19.4939 1H17.8813H8.3525H7.73241L7.45675 1.55545L1.10425 14.3554L1 14.5655V14.8V34V35H2H21.0575H22.0575V34V14.8V13.8H21.0575H13.1414L18.777 2.44455ZM44.187 2.44455L44.904 1H43.2913H33.7625H33.1424L32.8668 1.55545L26.5143 14.3554L26.41 14.5655V14.8V34V35H27.41H46.4675H47.4675V34V14.8V13.8H46.4675H38.5514L44.187 2.44455Z" stroke="#342EAD" stroke-width="2"></path>
                                    </svg>

                                </div>
                                <p class="cs_testimonial_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo
                                    ligula eget dolor. Aenean massa.</p>
                                <div class="cs_tastimonial_avater d-flex align-items-center">
                                    <img src="/assets/website/assets/img/testmonial/a2.jpg" alt="avatar_img">
                                    <div class="cs_ml_20">
                                        <h2 class="cs_testmonial_name cs_font_20 cs_semi_bold mb-0">Adnan</h2>
                                        <p class="cs_testmonial_designation cs_font_16 cs_normal mb-0">Business Owner
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cs_isotop_item" style="width: unset;">
                        <div class="cs_testimonial cs_style_1 cs_radius_10 overflow-hidden cs_filled_bg" data-src="/assets/website/assets/img/bg/testimonial_bg.svg" style="background-image: url(&quot;assets/website/assets/img/bg/testimonial_bg.svg&quot;);">
                            <div class="cs_testimonial_in">
                                <div class="cs_testmonial_icon">
                                    <svg width="49" height="36" viewBox="0 0 49 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.777 2.44455L19.4939 1H17.8813H8.3525H7.73241L7.45675 1.55545L1.10425 14.3554L1 14.5655V14.8V34V35H2H21.0575H22.0575V34V14.8V13.8H21.0575H13.1414L18.777 2.44455ZM44.187 2.44455L44.904 1H43.2913H33.7625H33.1424L32.8668 1.55545L26.5143 14.3554L26.41 14.5655V14.8V34V35H27.41H46.4675H47.4675V34V14.8V13.8H46.4675H38.5514L44.187 2.44455Z" stroke="#342EAD" stroke-width="2"></path>
                                    </svg>

                                </div>
                                <p class="cs_testimonial_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo
                                    ligula eget dolor. Aenean massa.</p>
                                <div class="cs_tastimonial_avater d-flex align-items-center">
                                    <img src="/assets/website/assets/img/testmonial/a2.jpg" alt="avatar_img">
                                    <div class="cs_ml_20">
                                        <h2 class="cs_testmonial_name cs_font_20 cs_semi_bold mb-0">Adnan</h2>
                                        <p class="cs_testmonial_designation cs_font_16 cs_normal mb-0">Business Owner
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>
<!-- End Testimonial Section -->

<!-- Start Blog Section -->
<section class="cs_100_bg" style="background-image: url('/assets/website/assets/img/bg/blog_bg_1.png')" data-src="/assets/website/assets/img/bg/blog_bg_1.png">
    <div class="cs_height_150 cs_height_lg_75"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="cs_section_heading cs_style_1">
                    <p class="cs_section_subtitle cs_accent_color_2 cs_font_16 wow fadeInLeft"
                        data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <span>Blog Posts</span>
                        <svg width="17" height="21" viewBox="0 0 17 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.1794 0.136775C10.2881 0.345851 9.66098 0.907053 8.49451 2.56862C8.16439 3.04177 7.83427 3.42691 7.75723 3.42691C7.52618 3.42691 6.88797 3.82302 6.63489 4.37322C6.50283 4.65937 6.24975 5.03346 6.07372 5.22054C5.45753 6.02382 6.2938 6.05681 4.88531 7.87246C2.75059 10.6454 1.89221 12.0209 1.81517 12.7691C1.72715 13.6935 0.186681 18.6012 0.494775 19.4485C0.703801 20.0427 1.40809 20.1637 2.43144 19.8556C4.26904 19.3054 7.55926 16.8846 8.1865 16.3454C8.98977 15.6521 11.2455 11.6688 11.5206 11.6578C11.8287 11.6467 12.4669 11.3386 12.577 11.2286C13.0832 10.7224 14.5247 8.2906 14.6567 7.66336C14.7117 7.39931 14.6346 7.15721 14.6346 6.84911C14.6346 6.66203 14.9098 6.23292 15.449 5.56163C16.5273 4.23018 16.5383 4.19719 15.9001 2.87671C14.7557 0.576917 13.2152 -0.325383 11.1794 0.136775ZM12.621 0.686965C13.5673 0.918049 14.4697 1.71033 15.0088 2.7557C15.526 3.77906 15.4269 4.03213 13.7434 6.08989C13.6994 6.13385 13.5673 5.84779 13.3693 5.55066C12.6099 4.38427 11.3555 3.53695 9.67195 3.36092C9.02277 3.29485 8.86868 3.54792 10.0021 2.00745C10.3983 1.46824 10.6293 1.17113 10.8053 0.984064C11.1025 0.686965 11.7407 0.477898 12.621 0.686965ZM10.0461 4.14217C11.5756 4.63735 12.1148 4.95641 13.0061 6.61798C13.5783 7.68538 13.5233 7.56437 12.8741 8.34562C12.6209 8.65371 12.599 8.65371 12.5219 8.45566C12.2579 7.71838 12.0378 7.32227 11.4106 6.71705C10.2551 5.72669 9.93608 5.99082 10.8714 7.06919C11.9387 8.31262 12.1588 9.02788 11.7517 9.95216C11.5096 10.4914 11.3335 10.6784 11.2785 10.4473C10.5853 7.88344 9.05577 6.79409 7.33918 6.64C6.62392 6.57401 6.52485 6.40895 6.92104 5.9688C7.16307 5.70467 7.51521 5.82576 8.3735 5.9358C8.75864 5.99082 8.78067 5.46265 8.35148 5.35261C7.79031 5.20949 7.60322 5.02249 8.03233 4.36225C8.42852 3.77906 8.80269 3.73501 10.0461 4.14217ZM9.01172 4.67034C8.80269 4.80241 8.74759 5.07751 9.46284 5.33058C10.1451 5.57269 10.4973 5.39657 10.4973 5.08848C10.4973 4.96747 10.4092 4.78038 10.1121 4.71439C9.716 4.61532 9.13281 4.5933 9.01172 4.67034ZM7.93334 7.32227C8.05435 7.39931 8.06541 7.41028 7.65824 8.0155C6.65692 9.50104 6.24975 10.0732 5.95263 10.4143C5.78757 10.6014 5.41348 11.1626 5.11636 11.6578C4.159 13.2864 3.32281 13.8036 2.95962 12.9892C2.82763 12.7032 2.86055 12.373 3.02561 12.1199C3.49876 11.3937 6.06275 7.35526 6.68991 7.1902C7.20711 7.04717 7.74626 7.20126 7.93334 7.32227ZM9.22082 7.97145C10.0351 8.81877 10.1451 9.358 9.50689 10.1392C8.31848 11.6028 6.44781 14.1226 5.69955 14.6618C5.1934 15.025 4.9513 13.9685 5.09442 13.3084C5.28142 12.417 6.02967 11.2176 7.68027 9.04991C8.62658 7.78445 8.79164 7.53138 9.22082 7.97145ZM10.3542 10.6894C10.3872 10.9315 10.5193 11.2616 10.2551 11.6248C10.0681 11.8888 9.46284 12.8902 8.97872 13.6934C8.14245 15.1019 7.04206 16.0373 6.95404 15.7952C6.844 15.4981 7.47116 14.0896 8.05435 13.2864C9.51786 11.3167 10.2111 9.72112 10.3542 10.6894ZM4.23604 14.2106C4.26904 15.08 4.78624 15.4541 5.64453 15.223C6.19473 15.08 6.19473 15.0689 5.97465 15.5861C5.87567 15.8172 5.82065 16.1473 5.84259 16.3234C5.89761 16.6756 5.7766 16.7195 4.92936 17.2588C4.80827 17.3357 4.65418 17.3027 4.57722 17.1817C4.13706 16.5104 3.52078 16.1693 2.82755 16.0593C2.13432 15.9492 2.17837 16.0703 2.38739 14.9699L2.5635 14.0346C2.70654 14.0346 3.23471 14.1556 3.72989 13.9355C3.939 13.8475 4.15908 13.7595 4.15908 13.7595C4.15908 13.7595 4.23604 13.9685 4.23604 14.2106Z"
                                fill="#342EAD" />
                        </svg>
                    </p>
                    <h2 class="cs_section_title cs_font_48 cs_semi_bold">My Latest <span
                            class="cs_accent_color">articles</span>
                    </h2>
                    <div class="cs_height_25 cs_height_lg_10"></div>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                        ligula eget
                        dolor.
                        Aenean massa.
                    </p>
                    <div class="cs_height_45 cs_height_lg_10"></div>
                    <a href="blog.html"
                        class="cs_accent_color cs_font_16 cs_medium text-uppercase cs_gap_15 d-inline-flex align-items-center">
                        <span class="cs_text_btn">View All</span>
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0L5 4.5L0 9L0 0Z" fill="currentColor" />
                        </svg>
                    </a>
                </div>
                <div class="cs_height_lg_30"></div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="cs_blog cs_style_1 cs_transition_4">
                    <div class="flex-none">
                        <a href="blog-details.html" class="cs_blog_thumbnail cs_zoom">
                            <img class="cs_zoom_in" src="/assets/website/assets/img/blog/blog_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="cs_blog_info">
                        <div class="cs_blog_date text-nowrap cs_secondary_color">
                            <div class="cs_font_36 cs_semi_bold cs_primary_font">10</div>
                            <span class="cs_font_16 d-inline-block">Jul 2022</span>
                        </div>
                        <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover"
                                href="blog-details.html">How to
                                design a user-centric mobile
                                application?</a></h2>
                        <span class="cs_secondary_color">10 mins read</span>
                        <a href="blog-details.html"
                            class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="cs_blog cs_style_1 cs_transition_4">
                    <div class="flex-none">
                        <a href="blog-details.html" class="cs_blog_thumbnail cs_zoom">
                            <img class="cs_zoom_in" src="/assets/website/assets/img/blog/blog_2.jpg" alt="">
                        </a>
                    </div>
                    <div class="cs_blog_info">
                        <div class="cs_blog_date text-nowrap cs_secondary_color">
                            <div class="cs_font_36 cs_semi_bold cs_primary_font">09</div>
                            <span class="cs_font_16 d-inline-block">Jul 2022</span>
                        </div>
                        <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover"
                                href="blog-details.html">How to
                                design a user-centric mobile
                                application?</a></h2>
                        <span class="cs_secondary_color">7 mins read</span>
                        <a href="blog-details.html"
                            class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="cs_blog cs_style_1 cs_transition_4">
                    <div class="flex-none">
                        <a href="blog-details.html" class="cs_blog_thumbnail cs_zoom">
                            <img class="cs_zoom_in" src="/assets/website/assets/img/blog/blog_3.jpg" alt="">
                        </a>
                    </div>
                    <div class="cs_blog_info">
                        <div class="cs_blog_date text-nowrap cs_secondary_color">
                            <div class="cs_font_36 cs_semi_bold cs_primary_font">06</div>
                            <span class="cs_font_16 d-inline-block">Jul 2022</span>
                        </div>
                        <h2 class="cs_blog_title cs_font_20 cs_semi_bold"><a class="cs_accent_color_2_hover"
                                href="blog-details.html">How to
                                design a user-centric mobile
                                application?</a></h2>
                        <span class="cs_secondary_color">8 mins read</span>
                        <a href="blog-details.html"
                            class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 10L10 1" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1H10V10" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>
<!-- End Blog Section -->

<!-- Start Brand Section -->
<section>
    <div class="cs_height_150 cs_height_lg_75"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="cs_section_heading cs_style_1">
                    <p class="cs_section_subtitle cs_accent_color_2 cs_font_16 wow fadeInRight"
                        data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <span>Happy Client</span>
                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.63864 4.46024C5.74235 4.77137 5.82303 5.07098 5.82303 5.12859C5.82303 5.17469 5.43122 5.22079 4.94724 5.22079C4.20975 5.22079 2.4006 5.42821 1.50178 5.6241C1.19065 5.69324 0.418574 6.30397 0.165061 6.69576C-0.249779 7.31802 0.176573 9.39223 0.787309 9.71488C0.983206 9.81859 0.994774 9.85315 0.833448 10.1643C0.418608 10.9594 0.718203 12.1578 1.57093 13.0797C1.98577 13.5291 2.0434 13.6559 2.0434 14.1283C2.0434 14.8428 2.36603 15.4305 3.11504 16.1103C3.48379 16.4445 3.77188 16.8132 3.81798 17.0091C4.30196 18.9912 7.36716 19.7056 12.23 18.9681C14.8458 18.5763 14.8804 18.5648 15.1108 18.7953C15.4796 19.141 15.929 19.2677 16.7586 19.2677C17.4501 19.2677 17.5538 19.3023 17.7612 19.5673C18.0608 19.9476 18.8444 20.0859 19.8354 19.9476C20.2157 19.89 20.7342 19.8439 20.9993 19.8439C21.7368 19.8439 21.9903 19.5904 21.6331 19.2216C21.3795 18.9566 21.2643 18.922 20.4807 18.922C19.1671 18.922 19.2592 19.3138 18.9712 12.6994C18.902 11.2129 18.8213 9.27699 18.7752 8.40122C18.683 6.44226 18.5563 6.56902 20.6074 6.6612C22.382 6.74187 22.7277 6.6612 22.3359 6.22331C21.8519 5.68171 20.3309 5.33602 18.4756 5.33602H18.0838C17.9225 5.33602 17.7727 5.40516 17.669 5.52039C17.5653 5.63562 17.5077 5.78542 17.5077 5.94675C17.5192 6.20026 17.5307 6.41921 17.5307 6.38464L16.1479 6.40768C14.7882 6.43073 14.7651 6.43073 14.7767 6.68424C14.7882 7.02994 14.6845 7.01841 13.8894 6.53443C13.1634 6.09655 12.8523 5.65867 11.2505 2.82393C10.7089 1.85597 10.248 1.18762 9.83312 0.73821C8.18528 -1.05943 4.40565 0.519258 5.63864 4.46024ZM8.32361 0.807347C8.65779 1.07238 9.02653 1.83292 9.41833 3.07744C10.225 5.63562 12.0341 7.47936 14.5347 8.28599L14.8804 8.40122C14.9034 9.12719 15.0187 14.9349 15.0532 17.0437L13.9239 17.1129C12.7716 17.1935 9.56813 17.6545 8.55408 17.8964C7.02147 18.2537 5.25839 17.4355 5.25839 16.3754C5.25839 16.191 5.20078 16.0412 5.14316 16.0412C4.38262 16.0412 3.21878 14.0822 3.65666 13.5521C3.7258 13.4715 3.58751 13.2756 3.29943 12.9875C2.56194 12.2846 2.45821 11.9965 2.53888 10.8326C2.60802 9.86468 2.59652 9.83011 2.33148 9.64573C1.55942 9.13871 1.4096 7.53697 2.08948 7.09908C2.26233 6.98385 3.13807 6.85709 4.70524 6.70728C7.88568 6.40768 7.68978 6.63815 7.18276 3.81493C6.74487 1.55636 7.3326 0.0122374 8.32361 0.807347ZM17.6114 18.0001C17.5998 18.0001 16.5628 18.0001 16.5973 18.0001L16.1709 7.62915C16.194 7.62915 17.3579 7.62915 17.3118 7.62915C17.4616 13.2641 17.2657 11.0285 17.6114 18.0001Z"
                                fill="#342EAD" />
                        </svg>
                    </p>
                    <h2 class="cs_section_title cs_font_48 cs_semi_bold">I work with over 150+ <span
                            class="cs_accent_color">happy clients</span>
                    </h2>
                    <div class="cs_height_25 cs_height_lg_10"></div>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                        ligula eget
                        dolor.
                        Aenean massa.
                    </p>
                </div>
                <div class="cs_height_lg_30"></div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="cs_brands cs_style_1 cs_ml_30">
                    <div class="cs_brand overflow-hidden cs_radius_10 text-center">
                        <div class="cs_brand_logo_wrap cs_center cs_brand_bg_1">
                            <img class="cs_brand_logo" src="/assets/website/assets/img/client/c1.svg" alt="">
                        </div>
                        <p class="m-0 cs_white_bg">Border</p>
                    </div>
                    <div class="cs_brand overflow-hidden cs_radius_10 text-center">
                        <div class="cs_brand_logo_wrap cs_center cs_brand_bg_2">
                            <img class="cs_brand_logo" src="/assets/website/assets/img/client/c2.svg" alt="">
                        </div>
                        <p class="m-0 cs_white_bg">Rise</p>
                    </div>
                    <div class="cs_brand overflow-hidden cs_radius_10 text-center">
                        <div class="cs_brand_logo_wrap cs_center cs_brand_bg_3">
                            <img class="cs_brand_logo" src="/assets/website/assets/img/client/c3.svg" alt="">
                        </div>
                        <p class="m-0 cs_white_bg">eBook</p>
                    </div>
                </div>
                <div class="cs_height_50 cs_height_lg_30"></div>
                <div class="cs_brands cs_style_1 cs_mr_30">
                    <div class="cs_brand overflow-hidden cs_radius_10 text-center">
                        <div class="cs_brand_logo_wrap cs_center cs_brand_bg_4">
                            <img class="cs_brand_logo" src="/assets/website/assets/img/client/c4.svg" alt="">
                        </div>
                        <p class="m-0 cs_white_bg">Doctor Plus</p>
                    </div>
                    <div class="cs_brand overflow-hidden cs_radius_10 text-center">
                        <div class="cs_brand_logo_wrap cs_center cs_brand_bg_5">
                            <img class="cs_brand_logo" src="/assets/website/assets/img/client/c5.svg" alt="">
                        </div>
                        <p class="m-0 cs_white_bg">Pinpoint</p>
                    </div>
                    <div class="cs_brand overflow-hidden cs_radius_10 text-center">
                        <div class="cs_brand_logo_wrap cs_center cs_brand_bg_6">
                            <img class="cs_brand_logo" src="/assets/website/assets/img/client/c6.svg" alt="">
                        </div>
                        <p class="m-0 cs_white_bg">Recharge</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>
<!-- End Brand Section -->
@endsection
