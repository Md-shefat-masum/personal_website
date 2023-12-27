
            <div class="class">
                <h2>Equivalent to AIB Form-128</h2>
            </div>

            <div class="header">
                <div class="logo">
                    <img src="{{ asset('logo.jpg') }}" alt="">
                </div>
                <div class="information">
                    <h2 class="campus">
                        AERONAUTICAL INSTITUTE OF BANGLADESH
                    </h2>
                    <h3>
                        Registration Form
                    </h3>
                    <h4>
                        Part-66 Module Examination
                    </h4>
                </div>
                <div class="photo">
                    <label for="profile_pic">
                        <input type="file" name="image" accept="image/*"
                            onchange="profile_pic_preview.src = window.URL.createObjectURL(event.target.files[0])"
                            id="profile_pic">
                        <span>
                            Attach a Passport Size Photo
                        </span>
                        <img src="{{isset($data->image)?asset($data->image):''}}" id="profile_pic_preview">
                    </label>
                </div>
            </div>

            <div class="intro">
                <h2 class="heading">Instruction</h2>
                <p>
                    Please fill up the form in BLOCK CAPITALS as per NID/Birth Certificate/Passport using black ink.
                    Attach the required documents.
                </p>
            </div>

            <div class="p_details">
                <h2 class="heading">
                    Personal Details
                </h2>
                <table class="form_table">
                    <tbody>
                        <tr>
                            <td>
                                <label for="full_name"> Full Name </label>
                            </td>
                            <td>
                                <div>
                                    <input id="full_name" name="full_name" placeholder="..."
                                    value="{{ isset($data->full_name)? $data->full_name : '' }}"
                                    type="text">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="father's_name"> Father's Name </label>
                            </td>
                            <td>
                                <div>
                                    <input id="father's_name" name="father_name" placeholder="..."
                                    value="{{ isset($data->father_name)? $data->father_name : '' }}"
                                    type="text">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nid/b.c./passport_number"> NID/B.C./Passport Number </label>
                            </td>
                            <td>
                                <div>
                                    <input id="nid/b.c./passport_number" name="nid" placeholder="..."
                                    value="{{ isset($data->nid)? $data->nid : '' }}"
                                    type="text">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="date_of_birth">
                                    Date <span style="text-transform: lowercase;">of</span> Birth
                                </label>
                            </td>
                            <td>
                                <div>
                                    <input id="date_of_birth" name="date_of_birth" onfocus="event.target.showPicker()"
                                        placeholder="..."
                                        value="{{ isset($data->date_of_birth)? $data->date_of_birth : '' }}"
                                        type="date">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="gender"> Gender </label>
                            </td>
                            <td>
                                <select name="gender" id="">
                                    <option {{ isset($data->gender) && $data->gender == 'male'?'selected' : '' }} value="male">Male</option>
                                    <option {{ isset($data->gender) && $data->gender == 'female'?'selected' : '' }} value="female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="present_address"> Present Address </label>
                            </td>
                            <td>
                                <input id="present_address" name="present_address" placeholder="..."
                                value="{{ isset($data->present_address)? $data->present_address : '' }}"
                                type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="permanent_address"> Permanent Address </label>
                            </td>
                            <td>
                                <input id="permanent_address" name="permanent_address" placeholder="..."
                                value="{{ isset($data->permanent_address)? $data->permanent_address : '' }}"
                                type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nationality"> Nationality </label>
                            </td>
                            <td>
                                <input id="nationality" name="nationality" placeholder="..."
                                value="{{ isset($data->nationality)? $data->nationality : '' }}"
                                type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phone_number"> Phone Number </label>
                            </td>
                            <td>
                                <div>
                                    <input id="phone_number" name="phone_number" placeholder="..."
                                    value="{{ isset($data->phone_number)? $data->phone_number : '' }}"
                                    type="text">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email"> Email </label>
                            </td>
                            <td>
                                <input id="email" name="email" placeholder="..."
                                value="{{ isset($data->email)? $data->email : '' }}"
                                type="email">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="education">
                <h2 class="heading">
                    Educational Qualification(s)
                </h2>
                <table>
                    <tbody>
                        <tr>
                            <td>SI. No.</td>
                            <td>Qualification</td>
                            <td>Group/Subject </td>
                            <td>Result/Grade </td>
                            <td>Passing Year </td>
                        </tr>
                        @if (isset($data->education_qualification) && collect($data->education_qualification)->count())
                            @foreach ($data->education_qualification as $key=>$item)
                                @php
                                    $i = 1;
                                @endphp
                                <tr>
                                    <td>
                                        <input type="text" value="{{$item->si}}" readonly
                                            name="education_qualification[q{{$i}}][si]"
                                            placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][qualification]"
                                        value="{{$item->qualification}}"
                                        placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][subject]"
                                        value="{{$item->subject}}"
                                        placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][grade]"
                                        value="{{$item->grade}}"
                                        placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][year]"
                                            value="{{$item->year}}"
                                            placeholder="...">
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        @else
                            @for ($i = 1; $i <= 3; $i++)
                                <tr>
                                    <td>
                                        <input type="text" value="{{$i}}" readonly
                                            name="education_qualification[q{{$i}}][si]"
                                            placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][qualification]"
                                            placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][subject]" placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" name="education_qualification[q{{$i}}][grade]" placeholder="...">
                                    </td>
                                    <td>
                                        <input type="text" onfocus="event.target.showPicker()"
                                            name="education_qualification[q{{$i}}][year]" placeholder="...">
                                    </td>
                                </tr>
                            @endfor
                        @endif
                    </tbody>
                </table>
                <p>
                    N.B.: HSC/Diploma/Equivalent Qualification must be mentioned.
                </p>
            </div>

            <div class="category">
                <h2 class="heading">
                    Category / Subcategory of Examination (Tick as Appropriate)
                </h2>
                <div>
                    <div>
                        <div id="category_of_exam"></div>
                    </div>
                </div>
                <table>
                    <tbody>

                        <tr>
                            <td>Please Select</td>
                            <td colspan="2">Category / Subcategory</td>
                        </tr>
                        <tr>
                            <td>
                                @php
                                    // dd($data->category_of_exam,array_search("B1.3 - Helicopter Turbine",$data->category_of_exam));
                                @endphp
                                <input name="category_of_exam[]" value="B1.1 - Aeroplane Turbine"

                                {{isset($data->category_of_exam) && array_search("B1.1 - Aeroplane Turbine",$data->category_of_exam) !== false?'checked':''}}
                                type="radio">
                            </td>
                            <td>
                                B1.1
                            </td>
                            <td>
                                Aeroplane Turbine
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="category_of_exam[]" value="B1.3 - Helicopter Turbine"
                                {{isset($data->category_of_exam) && array_search("B1.3 - Helicopter Turbine",$data->category_of_exam) !== false?'checked':''}}
                                type="radio">
                            </td>
                            <td>
                                B1.3
                            </td>
                            <td>
                                Helicopter Turbine
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="category_of_exam[]" value="B2 - Avionics"
                                {{isset($data->category_of_exam) && array_search("B2 - Avionics",$data->category_of_exam)  !== false?'checked':''}}
                                type="radio">
                            </td>
                            <td>
                                B2
                            </td>
                            <td>
                                Avionics
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="application_for">
                <h2 class="heading">
                    Application for:
                </h2>
                <p>
                    Please tick the box corresponding to the module that you like to sit for:
                <div>
                    <div id="application_for"></div>
                </div>
                </p>
                <table>
                    <tbody>
                        <tr>
                            <td>Please Select</td>
                            <td>Module Number</td>
                            <td>Module Name</td>
                        </tr>
                        @php
                            $application_fors = [
                                [
                                    "module" => "1",
                                    "name" => "Mathematics"
                                ],
                                [
                                    "module" => "2",
                                    "name" => "Physics"
                                ],
                                [
                                    "module" => "3",
                                    "name" => "Electrical Fundamentals"
                                ],
                                [
                                    "module" => "4",
                                    "name" => "Electronic Fundamentals"
                                ],
                                [
                                    "module" => "5",
                                    "name" => "Digital Techniques / Electronic Instrument Systems"
                                ],
                                [
                                    "module" => "6",
                                    "name" => "Materials & Hardware"
                                ],
                                [
                                    "module" => "7A",
                                    "name" => "Maintenance Practices"
                                ],
                                [
                                    "module" => "8",
                                    "name" => "Basic Aerodynamics"
                                ],
                                [
                                    "module" => "9A",
                                    "name" => "Human Factors"
                                ],
                                [
                                    "module" => "10",
                                    "name" => "Aviation Legislation"
                                ],
                                [
                                    "module" => "11A",
                                    "name" => "Aeroplane Aerodynamics, Structures and Systems"
                                ],
                                // [
                                // "module" => "12",
                                // "name" => "Helicopter Aerodynamics, Structures and Systems"
                                // ],
                                [
                                    "module" => "13",
                                    "name" => "Aircraft Aerodynamics, Structures and Systems"
                                ],
                                [
                                    "module" => "12",
                                    "name" => "Helicopter Aerodynamics, Structures and Systems"
                                ],
                                [
                                    "module" => "14",
                                    "name" => "Propulsion"
                                ],
                                [
                                    "module" => "15",
                                    "name" => "Gas Turbine Engines"
                                ],
                                [
                                    "module" => "17A",
                                    "name" => "Propellers"
                                ],
                            ];
                        @endphp
                        @foreach ($application_fors as $key => $value)
                        <tr>
                            <td>
                                <div>
                                    @php
                                        $input_value = $value["module"]. ' - ' .$value["name"];
                                        if(isset($data->application_for)){
                                            $check = array_search($input_value, $data->application_for) != false;
                                        }
                                    @endphp
                                    <input name="application_for[]" value="{{$input_value}}"
                                    {{isset($data->application_for) && $check ? 'checked':''}}
                                    class="" type="checkbox">
                                </div>
                            </td>
                            <td>
                                {{ $value["module"] }}
                            </td>
                            <td>
                                {{ $value["name"] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="essay">
                <div class="left">
                    <b>ESSAY</b>
                </div>
                <div class="right">
                    @php
                    $essays = ["Module 7A", "Module 9A", "Module 10"];
                    @endphp

                    @foreach ($essays as $item)
                    <label for="">
                        <input name="essay[]" value="{{$item}}"
                        {{isset($data->essay) && array_search($item,$data->essay) != false ? 'checked':''}}
                        type="checkbox">
                        <?= $item ?>
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="previous_attemp_module">
                <h2 class="heading">
                    Information of Previously Attempted Modules:
                </h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Module No.</td>
                            <td>Date of 1st Attempt & Exam Center</td>
                            <td>Date of 2nd Attempt & Exam Center</td>
                            <td>Date of 3rd Attempt & Exam Center</td>
                        </tr>
                        @if (isset($data->previous_attemped))
                            @foreach ($data->previous_attemped as $item)
                                @php
                                    $i = 1;
                                @endphp
                                <tr>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][module_no]" type="text"
                                        value="{{$item->module_no}}"
                                        placeholder="...">
                                    </td>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][date_1_center]" type="text"
                                        value="{{$item->date_1_center}}"
                                        placeholder="...">
                                    </td>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][date_2_center]" type="text"
                                        value="{{$item->date_2_center}}"
                                        placeholder="...">
                                    </td>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][date_3_center]" type="text"
                                        value="{{$item->date_3_center}}"
                                        placeholder="...">
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        @else
                            @for ($i = 1; $i <= 4; $i++)
                                <tr>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][module_no]" type="text" placeholder="...">
                                    </td>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][date_1_center]" type="text" placeholder="...">
                                    </td>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][date_2_center]" type="text" placeholder="...">
                                    </td>
                                    <td>
                                        <input name="previous_attemped[at{{$i}}][date_3_center]" type="text" placeholder="...">
                                    </td>
                                </tr>
                            @endfor
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="previous_attemp_module">
                <h2 class="heading">
                    Declaration:
                </h2>
                <p>
                    I hereby declare that the information I have submitted is correct. I have not taken the above module
                    exam(s) within the last 90 days. I shall abide by the rules and regulations of the Aeronautical
                    Institute of
                    Bangladesh (AIB).
                </p>
            </div>

            <div class="signature">
                <div class="left">
                    <b>Signature of Applicant</b>
                </div>
                <div class="right">
                    <b>Date:</b>
                </div>
            </div>

            <div class="previous_attemp_module">
                <h2 class="heading">
                    For office use only:
                </h2>
                <div>
                    <b>Registration Number:</b> <br> <br>
                    <b>Comments:</b>
                </div>
            </div>

            <div class="signature signature2">
                <div class="left">
                    <b>Signature of Admin Officer</b>
                </div>
                <div class="right">
                    <b>Signature of Training Manager</b>
                </div>
            </div>
