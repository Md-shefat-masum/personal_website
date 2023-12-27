@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "part 66 module examination",
        "image" => "/dummy/small/img-4.jpg",
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
<style>
    nav{
        display: none;
    }
</style>
<section class="form_section mt-0" id="printableArea">
    <div class="form">
        <div class="form_body">
            @include("frontend.pages.exmination.Part66ModuleExamForm",[
                'data' => $data,
            ])
        </div>
    </div>
</section>
@endsection
