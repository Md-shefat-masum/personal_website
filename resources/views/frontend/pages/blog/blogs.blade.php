@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "blogs",
        // "image" => "/dummy/small/img-2.jpg",
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
@include("frontend.layouts.includes.page_banner",[
    "sub_heading" => "My latest",
    "heading" => "blogs",
    'page' => "blogs"
])
<section>
    <div class="cs_height_115 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_title_search_wrap">
            <h3 class="cs_title">Recent Articles</h3>
            <form class="cs_search_form cs_style_1 position-relative overflow-hidden cs_radius_10 cs_white_bg">
                <input class="form-control h-100 w-100 cs_white_bg" type="search" name="search-blog" id="search-blog" placeholder="Search..." required="" />
                <button type="submit" class="cs_center position-absolute h-100 top-0 end-0">
                    <img src="/assets/website/assets/img/icon/search_icon.svg" alt="search" />
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
                        <li><a href="#">UI/UX</a></li>
                        <li><a href="#">WordPress</a></li>
                        <li><a href="#">Branding Design</a></li>
                        <li><a href="#">Responsive Design</a></li>
                        <li><a href="#">Mobile Interface</a></li>
                        <li><a href="#">Web Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="cs_height_lg_40"></div>
                <div class="cs_blog_wrap">
                    @foreach ($contents as $blog)
                        @php
                            $blog = (object) $blog;
                        @endphp
                        <div class="cs_blog cs_style_1 cs_transition_4">
                            <div class="flex-none">
                                <a href="{{ route('frontend_blog_details',$blog->slug) }}" class="cs_blog_thumbnail cs_zoom">
                                    <img class="cs_zoom_in fit_square_image" src="/{{$blog->image}}" alt="{{$blog->image_meta}}" />
                                </a>
                            </div>
                            <div class="cs_blog_info">
                                <div class="cs_blog_date text-nowrap cs_secondary_color">
                                    <div class="cs_font_36 cs_semi_bold cs_primary_font">
                                        {{carbon($blog->date,'d')}}
                                    </div>
                                    <span class="cs_font_16 d-inline-block">
                                        {{carbon($blog->date,'M Y')}}
                                    </span>
                                </div>
                                <h2 class="cs_blog_title cs_font_20 cs_semi_bold">
                                    <a class="cs_accent_color_2_hover" href="{{ route('frontend_blog_details',$blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h2>
                                <span class="cs_secondary_color">{{rand(100,1000)}} mins read</span>
                                <a href="blog-details.html" class="cs_circle_btn cs_style_1 cs_type_1 cs_accent_color_2 cs_center rounded-circle">
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 10L10 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 1H10V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="cs_height_60 cs_height_lg_40"></div>
        <div class="cs_pagenation cs_style_1 cs_center">
            <ul class="cs_mp_0">
                <li class="prev">
                    <a href="#">
                        <span><i class="fa-solid fa-angle-left"></i></span>
                    </a>
                </li>
                <li class="active">
                    <a href="#"><span>1</span></a>
                </li>
                <li>
                    <a href="#"><span>2</span></a>
                </li>
                <li>
                    <a href="#"><span>3</span></a>
                </li>
                <li>
                    <a href="#"><span>...</span></a>
                </li>
                <li>
                    <a href="#"><span>10</span></a>
                </li>
                <li class="next">
                    <a href="#">
                        <span><i class="fa-solid fa-angle-right"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>

@endsection
