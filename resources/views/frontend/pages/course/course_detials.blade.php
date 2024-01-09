@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "course-details",
        "image" => "/dummy/small/img-2.jpg",
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
@include("frontend.layouts.includes.page_banner",[
    "sub_heading" => "skill up",
    "heading" => "course details",
    'page' => "course-details"
])

<section>
    <div class="cs_height_115 cs_height_lg_70"></div>
    <div class="container-fluid">
        <div class="lms_body">
            <div class="left">
                <div id="video_part">
                    <iframe
                        id="video_player"
                        class="iframe_player "
                        src="{{str_replace(['watch','?v='],['embed','/'],request()->v)}}"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="">
                    </iframe>
                </div>
            </div>
            <div class="right">
                {{-- @dump($course_contents) --}}
                <ul class="milestone">
                    @foreach ($course_contents as $milestone)
                        <li >
                            <h2 class="heading">{{ $milestone["milestone"] }}</h2>
                            <ul class="module">
                                @foreach ($milestone["modules"] as $module)
                                    <li >
                                        <h3 class="heading">{{ $module["title"] }}</h3>
                                        <ul class="contents active">
                                            @foreach ($module["contents"] as $content)
                                                <li>
                                                    <h4 class="heading content_heading">
                                                        {{ $content["title"] }}
                                                    </h4>
                                                    <ul class="content_list">
                                                        @foreach ($content["videos"] as $video)
                                                            <li>
                                                                <a data-turbolinks="false" href="?v={{$video["link"]}}">
                                                                    <i class="fa status_icon fa-play"></i>
                                                                    <span class="title">
                                                                        {{$video["title"]}}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>


{{-- <script src="https://cdn.jsdelivr.net/npm/@thelevicole/youtube-to-html5-loader@4.0.1/dist/YouTubeToHtml5.min.js"></script> --}}
<script src="/assets/website/assets/js/plugins/player.js"></script>
<script>

    function change_video(link) {
        $('#video_part').html(`
                <video
                    id="video_player"
                    controls
                    autoplay
                    class="youtube-video iframe_player w-100"
                    data-yt="www.youtube.com/watch?v=l7Db2yrJvZ4"></video>
        `);
        setTimeout(() => {
            let player = new YouTubeToHtml5({
                selector: '#video_player',
                attribute: 'data-yt',
                withAudio: true,
                formats: ['1080p','720p'],
            });
        }, 500);
    }

    let key = new URL(location.href).searchParams.get('v');
    $(`a[href="?v=${key}"]`).addClass('active');
    $(`a[href="?v=${key}"]`)[0].scrollIntoView();

    // change_video();
</script>
@endsection
