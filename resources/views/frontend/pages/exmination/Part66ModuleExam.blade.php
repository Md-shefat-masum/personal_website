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
    @media print {

        .reg_card_search,
        .swal2-container,
        nav,
        .action,
        footer {
            display: none !important;
        }
    }
</style>
<section class="my-5 reg_card_search">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Find your registration form</h3>
                    </div>
                    <div class="card-body">
                        <div id="search_form">
                            <label for="">Insert Your Registered email</label>
                            <div class="d-flex">
                                <input type="email" id="search_key" class="form-control me-2">
                                <button class="btn btn-primary" onclick="search()">Submit</button>
                            </div>
                        </div>
                        <div id="validation_form" class="d-none">
                            <br>
                            <label for="" style="text-transform: lowercase;color:green;">A verification code has been sent to your email.</label>
                            <div class="d-flex">
                                <input type="text" id="validate_key" class="form-control me-2">
                                <button class="btn btn-secondary" onclick="validate()">Validate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 search_card d-none">
                <div class="card mt-4">
                    <div class="card-body">
                        <div id="search_result">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form_section" id="printableArea">
    <form method="POST" id="reg_form" onsubmit="reg_form_submit()" action="/part-66-module-examination" enctype="multipart/form-data"
        class="form">
        @csrf
        <input name="id" type="hidden">
        <div class="form_body">
            @include("frontend.pages.exmination.Part66ModuleExamForm")

            <div class="action">
                <button type="submit" id="submit_button" class="btn px-4 rounded-pill btn-primary">Submit</button>

                <button type="button" id="preview" onclick="window.print()"
                    class="btn px-4 rounded-pill btn-info">Preview</button>

                <button type="button" id="print_button" onclick="window.print()"
                class="btn px-4 rounded-pill d-none btn-secondary">Print</button>

                <button type="reset" id="print_button" onclick="submit_button.innerHTML = 'Submit'" class="btn px-4 rounded-pill btn-warning">Reset</button>
            </div>
        </div>

    </form>

    <script>
        var xcsrftoken = document.querySelector('meta[name="csrf-token"]').attributes.content.value;
        var header = {
            headers: {
                'X-CSRF-TOKEN': xcsrftoken
            }
        };
        function reg_form_submit(){
            event.preventDefault();
            axios.post(event.target.action+'-submit',new FormData(event.target),header)
                .then(res=>{
                    window.toaster("Form submitted successfully")
                    document.getElementById('submit_button').classList.add('d-none');
                    document.getElementById('print_button').classList.remove('d-none');
                    window.print();
                })
                .catch(err=>{
                    document.getElementById('submit_button').classList.remove('d-none');
                })
        }

        function search(){
            axios.post('/part-66-module-examination-search',{email:search_key.value},header)
            .then(res=>{
                console.log(res.data);
                if(res.data && res.data != 'failed'){
                    window.toaster("Record Found");
                    search_form.classList.add('d-none');
                    validation_form.classList.remove('d-none');
                    return;
                }
                window.toaster("no record Found", "error");
            })
            .catch(err=>{

            })
        }

        function validate(){
            axios.post('/part-66-module-examination-validate-code',{code:validate_key.value},header)
            .then(res=>{
                // console.log(res.data);
                if(res.data){
                    search_form.classList.remove('d-none');
                    validation_form.classList.add('d-none');

                    window.toaster("success");
                    document.getElementById('submit_button').classList.remove('d-none');
                    validate_key.value == "";
                    // window.print();

                    document.querySelector('.search_card').classList.toggle('d-none');
                    document.querySelector('#search_result').innerHTML = res.data;

                    return ;
                }
                window.toaster("no record Found");
            })
            .catch(err=>{

            })
        }

        function find_data(id){
            event.preventDefault();
            axios.get(`/part-66-module-examination/${id}/json`)
                .then(res=>{
                    if(res.data){
                        let form = document.querySelector("#reg_form");
                        form.reset();

                        for (const key in res.data) {
                            if (Object.hasOwnProperty.call(res.data, key)) {
                                const value = res.data[key];
                                let el = document.querySelector(`input[name="${key}"]`);
                                let sl = document.querySelector(`select[name="${key}"]`);

                                if(el){
                                    if(el.type != "file"){
                                        el.value = value;
                                    }
                                }

                                if(sl){
                                    sl.value = value
                                }

                                if(key == 'image'){
                                    el = document.querySelector('#profile_pic_preview');
                                    el.src = location.origin+'/'+value;
                                }

                                if(["category_of_exam","application_for","essay"].includes(key)){
                                    // console.log(key, value);
                                    for (let index = 0; index < value.length; index++) {
                                        const value2 = value[index];
                                        el = document.querySelector(`input[value="${value2}"]`);
                                        if(el){
                                            el.checked = true;
                                        }
                                    }
                                }

                                if(key == "education_qualification" || key == "previous_attemped"){
                                    let i = 1;
                                    for (const key2 in value) {
                                        if (Object.hasOwnProperty.call(value, key2)) {
                                            const value2 = value[key2];
                                            for (const key3 in value2) {
                                                if (Object.hasOwnProperty.call(value2, key3)) {
                                                    const value3 = value2[key3];
                                                    el = document.querySelector(`input[name="${key}[${key2}][${key3}]"]`);
                                                    if(el){
                                                        el.value = value3
                                                    }
                                                }
                                            }
                                            i++;
                                        }
                                    }
                                }

                            }
                        }

                        form.scrollIntoView();
                        document.getElementById("submit_button").innerHTML = "update";
                        return;
                    }
                    window.toaster("no record Found");
                })
        }
    </script>
</section>
@endsection
