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
    <div class="cs_height_115 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_title_search_wrap">
            <h3 class="cs_title">All Courses</h3>
            <form class="cs_search_form cs_style_1 position-relative overflow-hidden cs_radius_10 cs_white_bg">
                <input class="form-control h-100 w-100 cs_white_bg" type="search" name="search-blog" id="search-blog"
                    placeholder="Search..." required="">
                <button type="submit" class="cs_center position-absolute h-100 top-0 end-0">
                    <img src="/assets/website/assets/img/icon/search_icon.svg" alt="search">
                </button>
            </form>
        </div>
        <div class="cs_height_60 cs_height_lg_30"></div>
        <div class="row">
            <div class="col-lg-3">
                <div class="cs_category cs_style_1 cs_white_bg cs_radius_10 overflow-hidden">
                    <h4 class="cs_category_title">Categories</h4>
                    <ul class="cs_mp_0">
                        <li class="active"><a href="#">All</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">React JS</a></li>
                        <li><a href="#">Vue JS</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">Crash Coruses</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="cs_height_lg_40"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card height-equal equal-height-lg shadow-sm">
                            <div class="text-center overflow-hidden">
                                <img src="http://127.0.0.1:9000/uploads/course/web-dev.jpg" class="img-fluid top-radius-blog" alt="">
                                <div class="blog-details-main border-top">
                                    <br>
                                    <h6 class="blog-bottom-details">web development batch 9</h6>
                                    <br>
                                    <div class="d-flex justify-content-evenly pb-3 flex-wrap">
                                        <a href="{{ route('frontend_single_course','web-development-batch-9') }}" class="cs_btn cs_style_1 cs_primary_font">
                                            <span>
                                                Watch
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_60 cs_height_lg_40"></div>
        <div class="cs_pagenation cs_style_1 cs_center">
            <ul class="cs_mp_0">
                <li class="prev"><a href="#"><span><i class="fa-solid fa-angle-left"></i></span></a></li>
                <li class="active"><a href="#"><span>1</span></a></li>
                <li><a href="#"><span>2</span></a></li>
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#"><span>...</span></a></li>
                <li><a href="#"><span>10</span></a></li>
                <li class="next"><a href="#"><span><i class="fa-solid fa-angle-right"></i></span></a></li>
            </ul>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>

@endsection
