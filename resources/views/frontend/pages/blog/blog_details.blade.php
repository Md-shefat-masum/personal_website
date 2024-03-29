@php
$meta = [
    "seo" => [
        "title" => $content->seo_title,
        "description" => $content->seo_description,
        "keywords" => $content->seo_keywords,
        "image" => asset($content->image),
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
@include("frontend.layouts.includes.page_banner",[
    "sub_heading" => "blog details",
    "heading" => "",
    'page' => "blog > details",
    'height' => '227px',
])

<section>
    <div class="cs_height_140 cs_height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cs_blog_details cs_style_1">
                    <h1 class="cs_blog_title cs_font_48 cs_semi_bold text-center">
                        {{$content->title}}
                    </h1>
                    <div class="cs_center cs_blog_meta_items">
                        <span>
                            <a class="cs_text_btn cs_type_2 cs_accent_color_2 cs_accent_color_2_hover" href="https://shefat.info">
                                {{$content->writer}}
                            </a>
                        </span>
                        <span>{{ carbon($content->date,'d F Y') }}</span>
                        <span>{{ rand(100, 1000) }} min read</span>
                    </div>
                    <div class="cs_image_box cs_style_5 cs_radius_15">
                        <img class="cs_radius_10 w-100" src="/{{ $content->image }}" alt="project-details" />
                    </div>
                    <div class="row">
                        <div class="col-xl-1 col-lg-2">
                            <div class="cs_social cs_style_2 cs_white_bg">
                                <div class="cs_social_title cs_accent_color_2">Share</div>
                                <div class="cs_social_wrap">
                                    <a target="_blank" href="https://www.facebook.com/sharer.php?u={{url()->full()}}">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00879 10.125L9.50871 6.86742H6.38297V4.75348C6.38297 3.86227 6.81961 2.99355 8.21953 2.99355H9.64055V0.220078C9.64055 0.220078 8.35102 0 7.11809 0C4.54395 0 2.86137 1.56023 2.86137 4.38469V6.86742H0V10.125H2.86137V18H6.38297V10.125H9.00879Z"
                                                fill="#1B74E4"
                                            ></path>
                                        </svg>
                                    </a>
                                    <a target="_blank" href="https://twitter.com/intent/tweet?text={{$content->title}}&url={{url()->full()}}">
                                        <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.92 2C20.15 2.35 19.32 2.58 18.46 2.69C19.34 2.16 20.02 1.32 20.34 0.31C19.51 0.81 18.59 1.16 17.62 1.36C16.83 0.5 15.72 0 14.46 0C12.11 0 10.19 1.92 10.19 4.29C10.19 4.63 10.23 4.96 10.3 5.27C6.74 5.09 3.57 3.38 1.46 0.79C1.09 1.42 0.88 2.16 0.88 2.94C0.88 4.43 1.63 5.75 2.79 6.5C2.08 6.5 1.42 6.3 0.84 6C0.84 6 0.84 6 0.84 6.03C0.84 8.11 2.32 9.85 4.28 10.24C3.92 10.34 3.54 10.39 3.15 10.39C2.88 10.39 2.61 10.36 2.35 10.31C2.89 12 4.46 13.26 6.35 13.29C4.89 14.45 3.04 15.13 1.02 15.13C0.68 15.13 0.34 15.11 0 15.07C1.9 16.29 4.16 17 6.58 17C14.46 17 18.79 10.46 18.79 4.79C18.79 4.6 18.79 4.42 18.78 4.23C19.62 3.63 20.34 2.87 20.92 2Z"
                                                fill="#1D9BF0"
                                            ></path>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{url()->full()}}">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.0292 18H0.297328V5.98232H4.0292V18ZM2.16125 4.343C0.967923 4.343 0 3.35458 0 2.16125C8.54134e-09 1.58805 0.227703 1.03833 0.633016 0.633017C1.03833 0.227703 1.58805 0 2.16125 0C2.73445 0 3.28418 0.227703 3.68949 0.633017C4.0948 1.03833 4.32251 1.58805 4.32251 2.16125C4.32251 3.35458 3.35418 4.343 2.16125 4.343ZM17.9964 18H14.2725V12.1499C14.2725 10.7556 14.2444 8.96766 12.3323 8.96766C10.392 8.96766 10.0947 10.4824 10.0947 12.0494V18H6.36684V5.98232H9.94602V7.62164H9.99826C10.4965 6.67743 11.7135 5.68097 13.5292 5.68097C17.3061 5.68097 18.0004 8.16808 18.0004 11.3985V18H17.9964Z"
                                                fill="#0A66C2"
                                            ></path>
                                        </svg>
                                    </a>
                                    <a target="_blank" href="https://wa.me/?text={{url()->full()}}">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.4915 0C3.8505 0 0.0680001 3.7825 0.0680001 8.4235C0.0680001 9.911 0.459 11.356 1.19 12.631L0 17L4.4625 15.827C5.695 16.4985 7.0805 16.8555 8.4915 16.8555C13.1325 16.8555 16.915 13.073 16.915 8.432C16.915 6.1795 16.0395 4.063 14.45 2.4735C12.8605 0.8755 10.744 0 8.4915 0ZM8.5 1.4195C10.37 1.4195 12.121 2.1505 13.447 3.4765C14.7645 4.8025 15.4955 6.562 15.4955 8.432C15.4955 12.291 12.3505 15.4275 8.4915 15.4275C7.2335 15.4275 6.001 15.096 4.93 14.45L4.675 14.3055L2.023 15.0025L2.7285 12.4185L2.5585 12.1465C1.8615 11.05 1.4875 9.7495 1.4875 8.4235C1.496 4.5645 4.6325 1.4195 8.5 1.4195ZM5.508 4.5305C5.372 4.5305 5.1425 4.5815 4.947 4.794C4.76 5.0065 4.2075 5.525 4.2075 6.5535C4.2075 7.5905 4.964 8.585 5.0575 8.7295C5.1765 8.874 6.5535 10.999 8.67 11.9C9.1715 12.1295 9.5625 12.257 9.8685 12.3505C10.37 12.512 10.829 12.4865 11.1945 12.4355C11.6025 12.376 12.4355 11.9255 12.614 11.4325C12.7925 10.9395 12.7925 10.523 12.7415 10.4295C12.682 10.3445 12.546 10.2935 12.3335 10.2C12.121 10.081 11.084 9.571 10.897 9.503C10.7015 9.435 10.5825 9.401 10.421 9.605C10.285 9.8175 9.877 10.2935 9.758 10.4295C9.6305 10.574 9.5115 10.591 9.3075 10.489C9.0865 10.3785 8.4065 10.1575 7.6075 9.4435C6.9785 8.8825 6.562 8.194 6.4345 7.9815C6.3325 7.7775 6.426 7.65 6.528 7.5565C6.6215 7.463 6.7575 7.31 6.8425 7.1825C6.953 7.0635 6.987 6.97 7.055 6.834C7.123 6.6895 7.089 6.5705 7.038 6.4685C6.987 6.375 6.562 5.321 6.3835 4.9045C6.2135 4.4965 6.0435 4.5475 5.9075 4.539C5.7885 4.539 5.6525 4.5305 5.508 4.5305Z"
                                                fill="#00BFA5"
                                            ></path>
                                        </svg>
                                    </a>
                                    <a target="_blank" href="https://telegram.me/share/url?url={{url()->full()}}&text={{$content->title}}">
                                        <svg width="17" height="17"  id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240 240"><defs><linearGradient id="linear-gradient" x1="120" y1="240" x2="120" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1d93d2"/><stop offset="1" stop-color="#38b0e3"/></linearGradient></defs><title>Telegram_logo</title><circle cx="120" cy="120" r="120" fill="url(#linear-gradient)"/><path d="M81.229,128.772l14.237,39.406s1.78,3.687,3.686,3.687,30.255-29.492,30.255-29.492l31.525-60.89L81.737,118.6Z" fill="#c8daea"/><path d="M100.106,138.878l-2.733,29.046s-1.144,8.9,7.754,0,17.415-15.763,17.415-15.763" fill="#a9c6d8"/><path d="M81.486,130.178,52.2,120.636s-3.5-1.42-2.373-4.64c.232-.664.7-1.229,2.1-2.2,6.489-4.523,120.106-45.36,120.106-45.36s3.208-1.081,5.1-.362a2.766,2.766,0,0,1,1.885,2.055,9.357,9.357,0,0,1,.254,2.585c-.009.752-.1,1.449-.169,2.542-.692,11.165-21.4,94.493-21.4,94.493s-1.239,4.876-5.678,5.043A8.13,8.13,0,0,1,146.1,172.5c-8.711-7.493-38.819-27.727-45.472-32.177a1.27,1.27,0,0,1-.546-.9c-.093-.469.417-1.05.417-1.05s52.426-46.6,53.821-51.492c.108-.379-.3-.566-.848-.4-3.482,1.281-63.844,39.4-70.506,43.607A3.21,3.21,0,0,1,81.486,130.178Z" fill="#fff"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-11 col-lg-10">
                            <div class="cs_pl_50">
                                <div>
                                    {!! $content->description !!}
                                </div>
                                <div class="cs_meta cs_style_1 d-flex cs_gap_25 cs_white_bg cs_radius_10">
                                    <div class="cs_meta_avater_image">
                                        <img class="w-100 h-100" src="/assets/website/assets/img/testmonial/a1.jpg" alt="Testmonial" />
                                    </div>
                                    <div class="cs_meta_info">
                                        <p class="cs_meta_author cs_font_16">About Author</p>
                                        <h3 class="cs_meta_title cs_font_20 cs_semi_bold">
                                            {{$content->writer}}
                                        </h3>
                                        <p class="cs_meta_text cs_font_16 m-0">
                                            Software Engineer
                                        </p>
                                    </div>
                                </div>
                                <div class="cs_comment_wrap cs_white_bg cs_radius_10">
                                    <div class="cs_comment cs_style_1 d-flex cs_gap_25">
                                        <div class="cs_comment_avater_image">
                                            <img class="w-100 h-100" src="/assets/website/assets/img/testmonial/a1.jpg" alt="Testmonial" />
                                        </div>
                                        <div class="cs_comment_info">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="cs_comment_date_and_title">
                                                    <h3 class="cs_comment_title cs_font_20 cs_semi_bold m-0">
                                                        {{fake()->name()}}
                                                    </h3>
                                                    <span>
                                                        {{ carbon(rand(1,28).'-'.rand(1,12).'-'.rand(2020,2023),'d F Y') }}
                                                    </span>
                                                </div>
                                                <a class="align-self-start cs_accent_color_2 cs_accent_color_2_hover d-flex align-items-center cs_gap_15" href="#">
                                                    <span class="cs_text_btn cs_type_2">Reply</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
                                                        <path d="M5.09091 9.18182L1 5.09091L5.09091 1" stroke="CurrentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M14.0909 9.99997V8.36361C14.0909 7.49563 13.7461 6.6632 13.1323 6.04944C12.5186 5.43569 11.6862 5.09088 10.8182 5.09088H1"
                                                            stroke="CurrentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <p class="cs_comment_text cs_font_16 m-0">
                                                {!! random_quote() !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="cs_comment cs_style_1 d-flex cs_gap_25 cs_ml_30">
                                        <div class="cs_comment_avater_image">
                                            <img class="w-100 h-100" src="/assets/website/assets/img/testmonial/a2.jpg" alt="Testimonial" />
                                        </div>
                                        <div class="cs_comment_info">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="cs_comment_date_and_title">
                                                    <h3 class="cs_comment_title cs_font_20 cs_semi_bold m-0">
                                                        {{fake()->name()}}
                                                    </h3>
                                                    <span>
                                                        {{ carbon(rand(1,28).'-'.rand(1,12).'-'.rand(2020,2023),'d F Y') }}
                                                    </span>
                                                </div>
                                                <a class="align-self-start cs_accent_color_2_hover d-flex align-items-center cs_gap_15" href="#">
                                                    <span>Reply</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="11" viewBox="0 0 16 11" fill="none">
                                                        <path d="M5.09091 9.18182L1 5.09091L5.09091 1" stroke="CurrentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M14.0909 9.99997V8.36361C14.0909 7.49563 13.7461 6.6632 13.1323 6.04944C12.5186 5.43569 11.6862 5.09088 10.8182 5.09088H1"
                                                            stroke="CurrentColor"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <p class="cs_comment_text cs_font_16 m-0">
                                                {!! random_quote() !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cs_form cs_style_1 cs_white_bg cs_radius_10">
                                    <form action="https://portm-html.vercel.app/post">
                                        <h4 class="cs_form_title cs_font_24 cs_semi_bold">Leave your question</h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" placeholder="Name" required="" />
                                            </div>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" placeholder="Email" required="" />
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea class="form-control" placeholder="Your message" required=""></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="cs_btn cs_style_1 cs_primary_font"><span>Post Comment</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_90 cs_height_lg_20"></div>
</section>

@endsection
