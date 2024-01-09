    <link rel="shortcut icon" type="image/x-icon" href="{{$meta->fabicon ?? asset('favicon.ico')}}">

    <meta name="robots" content="index, follow">
    <!-- <meta http-equiv="refresh" content="5"> -->
    @php
        $des = "
            Hi I am Shefat, a dedicated software engineer passionate about crafting efficient,
            innovative solutions for complex challenges in the tech industry.
        ";
    @endphp

    <meta name="logo" content="{{$meta->logo ?? 'https://shefat.info/logo.png'}}">
    <meta name="Classification" content="Website">
    <meta name="identifier-URL" content="https://shefat.info">
    <meta name="directory" content="submission">
    <meta name="category" content="Internet">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="target" content="all">
    <meta name="HandheldFriendly" content="True">
    <meta name="author" content="{{$meta->author ?? 'md shefat ullah masum'}}">
    <meta name="developer" content="{{$meta->developer ?? 'md shefat ullah masum'}}">
    <meta name="developer-email" content="{{$meta->developer_email ?? 'mshefat924@gmail.com"'}}">
    <meta name="developer-company" content="{{$meta->developer_company ?? 'hungry coder'}}">
    <meta name="copyright" content="https://shefat.info">
    <meta name="price" content="Call for price - {{$meta->contact_number ?? '+8801646376015'}}">

    <meta name="keywords" content="{{($seo->keywords??'') .',
        shefat, shefat ullah, hungry, hungry-coder, hungry coder, shefat masum,
        shefat-ullah-masum, muhammad shefat ullah masum, web instructor, lws, learn with,
        learn-with-shefat, programming course, programming hero, creative it, md masum, techparkit,
        tech-park-it, techpark it, bangla course, tutorial, shefat tutorial, react, vue, php, laravel,node,
        express, mongo, mongoose, react native, sass, envato, themeforest, web instructor, freelancing,
        Web development services, Custom web development, Front-end development, html course, css course,
        Back-end development, Cross-platform development, Responsive web design, react course, php course,
        Mobile-friendly websites, E-commerce development, Content management systems (CMS), User experience (UX) design,
        Search engine optimization (SEO), Website maintenance and support, Website security, Performance optimization,
        Web application development, API integration, UI/UX design services, Web development agency,
        Professional web development, Full-stack development, Website revamp, Web development consultancy,
    '}}">
    <meta name="description" content="{{ $seo->description ?? $des}}">

    <title>{{$seo->title ?? 'Md Shefat Masum'}}</title>
    <meta property="og:title" content="{{ $seo->title ?? 'Md Shefat Masum'}}" />
    <meta property="og:site_name" content="{{ $meta->site_name ?? 'Md Shefat Masum'}}" />
    <meta property="og:description" content="{{ $seo->description ?? $des}}" />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="{{url('')}}" />
    <meta property="og:image" content="{{$seo->image??'https://shefat.info/assets/icons/meta-1200x630.png'}}" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />

    <meta name="twitter:title" content="{{ $seo->title ?? 'Md Shefat Masum'}}">
    <meta name="twitter:description" content="{{ $seo->description ?? $des}}">
    <meta name="twitter:image" content="{{ $seo->image ?? 'https://shefat.info/assets/icons/meta-1200x630.png'}}">
    <meta name="twitter:card" content="summary_large_image">

    @if (env('APP_ENV') != 'local')
    <link rel="manifest" href="/manifest.json">
    <script src="{{ asset('/main.js') }}" defer></script>
    @endif
