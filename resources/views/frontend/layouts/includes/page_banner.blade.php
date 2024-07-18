<section class="cs_hero cs_style_3 cs_filled_bg cs_center text-center">
    <div class="container">
        <div class="cs_height_45 cs_height_lg_45"></div>
        <p class="cs_white_color text-uppercase cs_mb_10">{{$sub_heading ?? ''}}</p>
        <h1 class="cs_hero_title cs_font_92 cs_extra_bold wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
            <span class="cs_gradient_text_2 text-uppercase">{{ $heading ?? '' }}</span>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">{{$page ?? ''}}</li>
        </ol>
    </div>
</section>
