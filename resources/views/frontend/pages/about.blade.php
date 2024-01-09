@php
$meta = [
// "meta" => [],
"seo" => [
"title" => "about",
"image" => "/dummy/small/img-2.jpg",
]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')

@include("frontend.layouts.includes.page_banner",[
"sub_heading" => "Hi I am",
"heading" => "SHEFAT MASUM",
'page' => "about"
])
<section class="position-relative">
    <div class="cs_height_140 cs_height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="cs_font_48 cs_semi_bold mb-0">
                    I'm currently working as a.
                    <span class="cs_accent_color">
                        Software Engineer
                    </span>
                </h3>
                <div class="cs_height_20 cs_height_lg_10"></div>
                <p class="mb-0">
                    A dedicated software engineer passionate about crafting efficient,
                    innovative solutions for complex challenges in the tech industry.
                    A passionate and dedicated professional with a background in Full Stack Web Development.
                    With a keen eye for detail and a commitment to excellence,
                    Whether it's web or pursuing personal
                    projects, I always striving for growth and innovation.
                </p>
                <div class="cs_height_lg_15"></div>
            </div>
            <div class="col-lg-5 offset-lg-1 align-self-end">
                <div class="mb-0">
                    <ul>
                        <li>Proficient in programming languages such as PHP, Java Script</li>
                        <li>Experienced in full-stack development</li>
                        <li>Skilled in database management and optimization</li>
                        <li>Expertise in software architecture and design patterns</li>
                        <li>Strong problem-solving and debugging abilities</li>
                        <li>Effective collaboration and communication within cross-functional teams</li>
                        <li>Continuous learning and adaptation to new technologies</li>
                        <li>Project management and agile development methodologies expertise.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cs_height_55 cs_height_lg_30"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cs_image_box cs_radius_20 overflow-hidden">
                    <img class="w-100" src="/assets/website/assets/img/hero_img.png" alt="">
                </div>
                <div class="cs_height_lg_30"></div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="cs_about cs_style_1 cs_type_1">
                    <h4 class="cs_about_subtitle cs_font_36 cs_semi_bold">In summary</h4>
                    <ul class="cs_mp_0 cs_about_summary_list">
                        <li>
                            <p class="m-0 text-capitalize">Nickname</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold">Shefat</h5>
                        </li>
                        <li>
                            <p class="m-0 text-capitalize">Nationality</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold">Bangladesh</h5>
                        </li>
                        <li>
                            <p class="m-0 text-capitalize">Current Location</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold">Mirpur, Dhaka</h5>
                        </li>
                        <li>
                            <p class="m-0 text-capitalize">Education</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold">CSE in Computer Science &amp; Engineering</h5>
                        </li>
                        <li>
                            <p class="m-0 text-capitalize">Hobby</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold">Travelling</h5>
                        </li>
                        <li>
                            <p class="m-0 text-capitalize">Interests</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold">
                                Cricket, Football, Design,
                                Reading Book, Cooking,
                                Biking, Excercise
                            </h5>
                        </li>
                        <li>
                            <p class="m-0 text-capitalize">email</p>
                            <h5 class="cs_font_20 m-0 cs_semi_bold wow fadeInLeft" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">
                                mshefat924@gmail.com
                            </h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>

<section class="cs_100_bg position-relative" data-src="/assets/website/assets/img/bg/ed_and_skill_bg.png"
    style="background-image: url(&quot;assets/website/assets/img/bg/ed_and_skill_bg.png&quot;);">
    <div class="cs_slill_shape_1 position-absolute">
        <img src="/assets/website/assets/img/skills_shape_1.svg" alt="skill and education ">
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
        <div>
            <div class="d-lg-flex justify-content-between">
                <div class="cs_section_heading cs_style_1">
                    <h2 class="cs_section_title cs_font_48 cs_semi_bold wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">I'm great in what I do<br> and <span class="cs_accent_color">I'm
                            loving it</span>
                    </h2>
                </div>
                <div class="align-self-end">
                    <div class="cs_height_25 cs_height_lg_25"></div>
                    <a class="cs_portfolio_text_btn d-inline-flex cs_gap_25 align-items-center cs_font_24 cs_accent_color cs_semi_bold"
                        href="/contact">
                        <span class="cs_text_btn">Hire Me</span>
                        <span class="cs_circle_btn cs_style_1 cs_accent_color cs_center rounded-circle">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L14 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M1 1H14V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L14 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M1 1H14V14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="cs_height_70 cs_height_lg_40"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="cs_education_wrap">
                    <h3 class="cs_font_36 mb-0">Education</h3>
                    <div class="cs_height_25 cs_height_lg_15"></div>
                    <div class="cs_iconbox cs_style_3 cs_type_1 d-flex align-items-center">
                        <div class="cs_iconbox_icon cs_accent_color cs_filled_bg cs_center"
                            data-src="/assets/website/assets/img/bg/iconbox_bg_3.svg"
                            style="background-image: url(&quot;assets/website/assets/img/bg/iconbox_bg_3.svg&quot;);">
                            <svg width="37" height="32" viewBox="0 0 37 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.7148 26.5142C26.5064 26.1679 27.2705 25.762 28.0006 25.2999V30.8571C28.0006 31.1602 27.8802 31.4509 27.6659 31.6653C27.4515 31.8796 27.1608 32 26.8577 32C26.5546 32 26.2639 31.8796 26.0496 31.6653C25.8353 31.4509 25.7148 31.1602 25.7148 30.8571V26.5142ZM17.2719 9.74253C17.1334 10.0126 17.1052 10.3258 17.1932 10.6163C17.2811 10.9068 17.4783 11.1518 17.7433 11.2997L24.4291 14.8569L26.8577 13.5569L18.829 9.2711C18.559 9.13267 18.2457 9.10445 17.9553 9.19239C17.6648 9.28033 17.4198 9.47755 17.2719 9.74253ZM35.9721 9.2711L18.829 0.128104C18.6605 0.0438581 18.4746 0 18.2862 0C18.0977 0 17.9119 0.0438581 17.7433 0.128104L0.600192 9.2711C0.418457 9.37089 0.266872 9.51768 0.161288 9.69611C0.0557045 9.87454 0 10.0781 0 10.2854C0 10.4927 0.0557045 10.6962 0.161288 10.8747C0.266872 11.0531 0.418457 11.1999 0.600192 11.2997L4.00024 13.0997V20.2141C3.99809 20.7046 4.15889 21.182 4.45739 21.5713C5.58598 23.0856 9.9289 27.9999 18.2862 27.9999C20.8397 28.0212 23.3697 27.5104 25.7148 26.4999V15.5426L24.4291 14.8569L18.2862 18.1284L5.68598 11.414L3.57166 10.2854L18.2862 2.44242L33.0007 10.2854L30.8863 11.414L26.8577 13.5569L27.4006 13.8426C27.5938 13.9542 27.7521 14.1174 27.8577 14.314C27.9527 14.4791 28.0021 14.6665 28.0006 14.8569V25.2999C29.5792 24.3068 30.9717 23.0448 32.1149 21.5713C32.4134 21.182 32.5742 20.7046 32.5721 20.2141V13.0997L35.9721 11.2997C36.1539 11.1999 36.3055 11.0531 36.411 10.8747C36.5166 10.6962 36.5723 10.4927 36.5723 10.2854C36.5723 10.0781 36.5166 9.87454 36.411 9.69611C36.3055 9.51768 36.1539 9.37089 35.9721 9.2711Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="cs_iconbox_info">
                            <p class="cs_iconbox_text mb-0">Bangladesh Institute Of Science and Technology</p>
                            <h3 class="cs_iconbox_title cs_font_24 cs_semi_bold mb-0">BSC in CSE (2015 - 2019)
                            </h3>
                        </div>
                    </div>
                    <div class="cs_iconbox cs_style_3 cs_type_1 d-flex align-items-center">
                        <div class="cs_iconbox_icon cs_accent_color cs_filled_bg cs_center"
                            data-src="/assets/website/assets/img/bg/iconbox_bg_3.svg"
                            style="background-image: url(&quot;assets/website/assets/img/bg/iconbox_bg_3.svg&quot;);">
                            <svg width="37" height="32" viewBox="0 0 37 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.7148 26.5142C26.5064 26.1679 27.2705 25.762 28.0006 25.2999V30.8571C28.0006 31.1602 27.8802 31.4509 27.6659 31.6653C27.4515 31.8796 27.1608 32 26.8577 32C26.5546 32 26.2639 31.8796 26.0496 31.6653C25.8353 31.4509 25.7148 31.1602 25.7148 30.8571V26.5142ZM17.2719 9.74253C17.1334 10.0126 17.1052 10.3258 17.1932 10.6163C17.2811 10.9068 17.4783 11.1518 17.7433 11.2997L24.4291 14.8569L26.8577 13.5569L18.829 9.2711C18.559 9.13267 18.2457 9.10445 17.9553 9.19239C17.6648 9.28033 17.4198 9.47755 17.2719 9.74253ZM35.9721 9.2711L18.829 0.128104C18.6605 0.0438581 18.4746 0 18.2862 0C18.0977 0 17.9119 0.0438581 17.7433 0.128104L0.600192 9.2711C0.418457 9.37089 0.266872 9.51768 0.161288 9.69611C0.0557045 9.87454 0 10.0781 0 10.2854C0 10.4927 0.0557045 10.6962 0.161288 10.8747C0.266872 11.0531 0.418457 11.1999 0.600192 11.2997L4.00024 13.0997V20.2141C3.99809 20.7046 4.15889 21.182 4.45739 21.5713C5.58598 23.0856 9.9289 27.9999 18.2862 27.9999C20.8397 28.0212 23.3697 27.5104 25.7148 26.4999V15.5426L24.4291 14.8569L18.2862 18.1284L5.68598 11.414L3.57166 10.2854L18.2862 2.44242L33.0007 10.2854L30.8863 11.414L26.8577 13.5569L27.4006 13.8426C27.5938 13.9542 27.7521 14.1174 27.8577 14.314C27.9527 14.4791 28.0021 14.6665 28.0006 14.8569V25.2999C29.5792 24.3068 30.9717 23.0448 32.1149 21.5713C32.4134 21.182 32.5742 20.7046 32.5721 20.2141V13.0997L35.9721 11.2997C36.1539 11.1999 36.3055 11.0531 36.411 10.8747C36.5166 10.6962 36.5723 10.4927 36.5723 10.2854C36.5723 10.0781 36.5166 9.87454 36.411 9.69611C36.3055 9.51768 36.1539 9.37089 35.9721 9.2711Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="cs_iconbox_info">
                            <p class="cs_iconbox_text mb-0">Tamirul Millat Kamil Madrasha</p>
                            <h3 class="cs_iconbox_title cs_font_24 cs_semi_bold mb-0">
                                HSC (2012 - 2013)
                            </h3>
                        </div>
                    </div>
                    <div class="cs_iconbox cs_style_3 cs_type_1 d-flex align-items-center">
                        <div class="cs_iconbox_icon cs_accent_color cs_filled_bg cs_center"
                            data-src="/assets/website/assets/img/bg/iconbox_bg_3.svg"
                            style="background-image: url(&quot;assets/website/assets/img/bg/iconbox_bg_3.svg&quot;);">
                            <svg width="37" height="32" viewBox="0 0 37 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.7148 26.5142C26.5064 26.1679 27.2705 25.762 28.0006 25.2999V30.8571C28.0006 31.1602 27.8802 31.4509 27.6659 31.6653C27.4515 31.8796 27.1608 32 26.8577 32C26.5546 32 26.2639 31.8796 26.0496 31.6653C25.8353 31.4509 25.7148 31.1602 25.7148 30.8571V26.5142ZM17.2719 9.74253C17.1334 10.0126 17.1052 10.3258 17.1932 10.6163C17.2811 10.9068 17.4783 11.1518 17.7433 11.2997L24.4291 14.8569L26.8577 13.5569L18.829 9.2711C18.559 9.13267 18.2457 9.10445 17.9553 9.19239C17.6648 9.28033 17.4198 9.47755 17.2719 9.74253ZM35.9721 9.2711L18.829 0.128104C18.6605 0.0438581 18.4746 0 18.2862 0C18.0977 0 17.9119 0.0438581 17.7433 0.128104L0.600192 9.2711C0.418457 9.37089 0.266872 9.51768 0.161288 9.69611C0.0557045 9.87454 0 10.0781 0 10.2854C0 10.4927 0.0557045 10.6962 0.161288 10.8747C0.266872 11.0531 0.418457 11.1999 0.600192 11.2997L4.00024 13.0997V20.2141C3.99809 20.7046 4.15889 21.182 4.45739 21.5713C5.58598 23.0856 9.9289 27.9999 18.2862 27.9999C20.8397 28.0212 23.3697 27.5104 25.7148 26.4999V15.5426L24.4291 14.8569L18.2862 18.1284L5.68598 11.414L3.57166 10.2854L18.2862 2.44242L33.0007 10.2854L30.8863 11.414L26.8577 13.5569L27.4006 13.8426C27.5938 13.9542 27.7521 14.1174 27.8577 14.314C27.9527 14.4791 28.0021 14.6665 28.0006 14.8569V25.2999C29.5792 24.3068 30.9717 23.0448 32.1149 21.5713C32.4134 21.182 32.5742 20.7046 32.5721 20.2141V13.0997L35.9721 11.2997C36.1539 11.1999 36.3055 11.0531 36.411 10.8747C36.5166 10.6962 36.5723 10.4927 36.5723 10.2854C36.5723 10.0781 36.5166 9.87454 36.411 9.69611C36.3055 9.51768 36.1539 9.37089 35.9721 9.2711Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="cs_iconbox_info">
                            <p class="cs_iconbox_text mb-0">Muradpur Islamia Alim Madrasha</p>
                            <h3 class="cs_iconbox_title cs_font_24 cs_semi_bold mb-0">
                                SSC (2010 - 2011)
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="cs_height_lg_40"></div>
            </div>
            <div class="col-lg-6">
                <div class="cs_slill_wrap cs_pl_70">
                    <h3 class="cs_font_36 mb-0">Slills</h3>
                    <div class="cs_height_25 cs_height_lg_15"></div>
                    <div class="cs_progressbar cs_style_2">
                        <div class="label cs_font_20 cs_semi_bold">Communication</div>
                        <h3 class="cs_progressbar_head cs_ternary_color cs_normal cs_font_14 text-end">95%</h3>
                        <div class="cs_progress" data-progress="95">
                            <div class="cs_progress_in" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="cs_progressbar cs_style_2">
                        <div class="label cs_font_20 cs_semi_bold">Problem Solving</div>
                        <h3 class="cs_progressbar_head cs_ternary_color cs_normal cs_font_14 text-end">70%</h3>
                        <div class="cs_progress" data-progress="70">
                            <div class="cs_progress_in" style="width: 70%;"></div>
                        </div>
                    </div>
                    <div class="cs_progressbar cs_style_2">
                        <div class="label cs_font_20 cs_semi_bold">Web Application</div>
                        <h3 class="cs_progressbar_head cs_ternary_color cs_normal cs_font_14 text-end">90%</h3>
                        <div class="cs_progress" data-progress="90">
                            <div class="cs_progress_in" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="cs_progressbar cs_style_2">
                        <div class="label cs_font_20 cs_semi_bold">Algorithm &amp; Data Structure</div>
                        <h3 class="cs_progressbar_head cs_ternary_color cs_normal cs_font_14 text-end">75%</h3>
                        <div class="cs_progress" data-progress="75">
                            <div class="cs_progress_in" style="width: 75%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>

<section class="position-relative">
    <div class="cs_service_shape_1 position-absolute">
        <img src="/assets/website/assets/img/service_shape_1.svg" alt="">
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="container">
        <div class="row cs_tabs cs_style_1">
            <div class="col-lg-4">
                <div class="cs_section_heading cs_style_1">
                    <p class="cs_section_subtitle cs_accent_color_2 cs_font_16 wow fadeInLeft" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">
                        <span>How I Live</span>
                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.97591 14.5618C-0.971171 8.81681 -0.577793 3.06974 4.89025 1.37857C6.56088 0.858827 8.75716 1.23766 10.0143 2.25224L10.659 2.77411L11.539 2.18776C16.6218 -1.25827 23.3933 4.25223 20.9381 9.82952C18.7034 14.9013 10.8697 20.637 9.09113 18.5076C8.56387 17.8715 8.8053 17.7662 10.1306 18.0209C11.3936 18.2634 16.8827 12.8513 18.1731 10.0825C19.7277 6.75962 19.2971 5.02257 16.4256 2.95039C15.2389 2.1019 13.4897 2.59489 12.1834 4.176C11.1518 5.40313 10.0176 5.5552 9.00115 4.12668C6.12036 0.110156 1.92139 3.63334 3.44169 8.7862C4.07799 10.9138 4.70403 11.9614 7.02448 14.7108C8.60384 16.5728 8.65482 16.6628 8.17596 16.9503C7.26361 17.5074 5.75209 16.6451 3.97591 14.5618Z"
                                fill="#342EAD"></path>
                            <path
                                d="M14.9467 5.0654C14.1851 4.96639 14.7719 4.08671 15.4928 4.29588C16.0891 4.48073 16.9235 4.79201 17.2943 5.68325C17.6984 6.61905 17.0386 7.57974 16.6328 7.49297C16.2739 7.41916 16.1452 7.02459 16.1486 6.20635C16.1521 5.3881 15.7082 5.1644 14.9467 5.0654Z"
                                fill="#342EAD"></path>
                            <path
                                d="M16.9264 9.85448C15.938 10.1378 15.1442 9.42309 15.564 8.89173C15.8833 8.50455 17.1593 8.40681 17.5481 8.75687C17.8729 9.06399 17.7018 9.62863 16.9264 9.85448Z"
                                fill="#342EAD"></path>
                        </svg>

                    </p>
                    <h2 class="cs_section_title cs_font_48 cs_semi_bold">Moments<br> of <span class="cs_accent_color">my
                            life</span>
                    </h2>
                </div>
                <div class="cs_height_30 cs_height_lg_20"></div>
                <div>
                    <ul class="cs_tab_links cs_mp_0">
                        <li class="active"><a class="text-uppercase " href="404-5.html">travel</a></li>
                        <li><a class="text-uppercase " href="404-6.html">creativity</a></li>
                        <li><a class="text-uppercase " href="404-7.html">moments</a></li>
                    </ul>
                    <div class="cs_tab_body">
                        <div class="cs_tab active" data-id="travel">
                            <p class="m-0">Lorem ipsum dolor sit amet, <span class="cs_accent_color">consectetuer
                                    adipiscing
                                    elit</span>. Cum sociis natoque penatibus et magnis dis parturient
                                montes,<span class="cs_accent_color"> nascetur ridiculus</span> mus. Donec quam
                                felis, ultricies nec, <span class="cs_accent_color_2">pellentesque eu</span>,
                                pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                        <div class="cs_tab" data-id="creativity">
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa
                                deleniti adipisci culpa? Quos sit dolore magnam minima, optio nobis commodi!</p>
                        </div>
                        <div class="cs_tab" data-id="moments">
                            <p class="m-0">Lorem ipsum dolor sit amet, <span class="cs_accent_color">consectetuer
                                    adipiscing elit</span>. Cum sociis
                                natoque penatibus et magnis dis parturient montes,<span class="cs_accent_color">
                                    nascetur ridiculus</span> mus. Donec quam felis, ultricies nec, <span
                                    class="cs_accent_color_2">pellentesque eu</span>, pretium quis, sem. Nulla
                                consequat massa quis enim.</p>
                        </div>
                    </div>
                </div>
                <div class="cs_height_lg_30"></div>
            </div>
            <div class="col-lg-8">
                <div class="cs_pl_70 cs_tab active" data-id="travel">
                    <div class="cs_gallery_grid">
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_1.jpg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_3.jpg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_2.jpg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="cs_pl_70 cs_tab" data-id="creativity">
                    <div class="cs_gallery_grid">
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_5.jpeg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_6.jpeg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_7.jpeg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_8.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="cs_pl_70 cs_tab" data-id="moments">
                    <div class="cs_gallery_grid">
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_9.jpeg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_10.jpeg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_11.jpeg" alt="">
                        </div>
                        <div class="cs_gallery cs_style_1">
                            <img class="w-100" src="/assets/website/assets/img/gallery/gallery_12.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>
@endsection
