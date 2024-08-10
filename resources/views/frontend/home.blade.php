@php
    $meta = [
        // "meta" => [],
        'seo' => [
            'title' => 'Md Shefat Masum',
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)

@section('contents')
    @include('frontend.pages.home.banner')
    @include('frontend.pages.home.about')
    @include('frontend.pages.home.skills')
    @include('frontend.pages.home.training_leadership')
    @include('frontend.pages.home.service')
    @include('frontend.pages.home.portfolio')
    @include('frontend.pages.home.testimonial')
    @include('frontend.pages.home.blog')
@endsection
