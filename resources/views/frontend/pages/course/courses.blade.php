@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "courses",
        "image" => "/dummy/small/img-2.jpg",
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
@include("frontend.layouts.includes.page_banner",[
    "sub_heading" => "skill up",
    "heading" => "courses",
    'page' => "courses"
])
<section>
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_isotop cs_isotop_col_3">
            <div class="cs_grid_sizer"></div>
            <div class="cs_isotop_item cs_zoom">
                <a href="portfolio-details.html" class="cs_portfolio cs_style_1">
                    <div class="cs_portfolio_thumbnail">
                        <img class="cs_zoom_in w-100" src="/assets/website/assets/img/portfolio/p3.jpg" alt="">
                    </div>
                    <div class="cs_portfolio_info cs_white_color cs_medium position-absolute">
                        <h2 class="cs_font_28 cs_white_color cs_medium mb-0">Fitst Project</h2>
                        <div class="cs_font_16 cs_gap_15 d-inline-flex cs_medium align-items-center">
                            <span class="cs_text_btn cs_secondary_font cs_type_1 text-uppercase">View work</span>
                            <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0L5 4.5L0 9L0 0Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>
@endsection
