@php
$meta = [
// "meta" => [],
"seo" => [
"title" => "contact",
"image" => "/dummy/small/img-4.jpg",
]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')
<section class="mt-5">
    <div class="container">
        <div class="card border-0">
            <div class="card-body">
                <h2 class="text-center heading">Contact Us</h2>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <form action="" class="contact_form">
                            <div class="form-group mb-4">
                                <div>
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" id="full_name">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div>
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div>
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div>
                                    <label for="message">Message</label>
                                    <input type="text" class="form-control" name="message" id="message">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info rounded-pill px-5">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

