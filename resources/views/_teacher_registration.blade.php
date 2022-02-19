@extends('templates.base1') @section('content')
    <style>
        .row>* {
            padding-left: 4px !important;
            padding-right: 4px !important;
        }

        /* #removeqs {
            vertical-align: middle !important;
            padding-top: 8px !important;
            padding-left: 18px !important;
        } */

        #removeq {
            vertical-align: middle !important;
            /* padding-top: 28px !important; */
            padding-left: 18px !important;
        }

        #image {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        #cover_pic {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        #Adharfs {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        #Adharbs {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        #pans {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        #cvs {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        #Banks {
            display: block;
            visibility: hidden;
            width: 0;
            height: 0;
        }

        /* Dropdown Button */
        .dropbtn {

            color: #2f2d51;
            padding: 16px;
            font-size: 16px;
            border: 1px solid #e7e7ec;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        /* .dropbtn:hover, .dropbtn:focus {
            background-color: #3e8e41;
            } */

        /* The search field */
        #myInput {
            box-sizing: border-box;
            background-image: url('searchicon.png');
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            padding: 14px 20px 12px 45px;
            border: none;
            border-bottom: 1px solid #ddd;
        }

        /* The search field when it gets focus/clicked on */
        #myInput:focus {
            outline: 3px solid #ddd;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 230px;
            border: 1px solid #ddd;
            z-index: 1;
            height: 200px;
            overflow-y: auto;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }

        .down-image {
            filter: invert(1);
            position: absolute;
            right: 10px;
            margin-top: 5px;
        }

        .section-head {
            background-image: url('{{ asset('images/teacher-bg.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    </style>
    <section class="bg-theme-1 section-head py-0 py-sm-5">
        <div class="container py-5 text-center text-white">
            <h2 class="text-white mb-0">Welcome To Shiksha</h2>
            <p class="pb-0">Fill this form so that we can start on-boarding process with you.</p>
        </div>
    </section>
    <div class="my-3 py-3 container">
        <form action="{{ url('teacher_reg') }}" enctype="multipart/form-data" method="POST" class="form-horizontal">
            @csrf
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-12 mt-lg-0 mt-1">
                    <!-- Card Profile -->
                    <!-- Card Basic Info -->
                    <div class="card mt-1" id="basic-info">
                        <!-- <div class="card-header border-0 px-4">
                            <h4>Teacher Registration</h4>
                        </div> -->
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">First Name</label>
                                    <div class="input-group">
                                        <input required id="firstName" name="first_name" class="form-control" type="text"
                                            placeholder="Alec">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Last Name</label>
                                    <div class="input-group">
                                        <input required id="lastName" name="last_name" class="form-control" type="text"
                                            placeholder="Thompson">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Father Name</label>
                                    <div class="input-group">
                                        <input required id="firstName" name="father_name" class="form-control" type="text"
                                            placeholder="Alec">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Mother Name</label>
                                    <div class="input-group">
                                        <input required id="lastName" name="mother_name" class="form-control" type="text"
                                            placeholder="Thompson">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">I'm</label>
                                    <select required class="form-control" name="gender" id="choices-gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Birth Date</label>
                                    <input required type="date" name="dob" class="form-control">
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Email</label>
                                    <div class="input-group">
                                        <input required id="email" name="email" class="form-control" type="email"
                                            placeholder="example@email.com">
                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Password</label>
                                    <div class="input-group">
                                        <input required id="password" name="password" class="form-control"
                                            type="password">
                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Phone Number</label>
                                    <div class="input-group">
                                        <input required id="location" name="phone" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Alt Phone Number</label>
                                    <div class="input-group">
                                        <input id="phone" name="alt_phone" class="form-control" type="number"
                                            placeholder="+40 735 631 620">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Address</label>
                                    <div class="input-group">
                                        <input required id="phone" name="address" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12 mt-1">
                                    <div class="dropdown w-100">
                                        <label class="form-label mt-1">State</label>
                                        <label onclick="statedropdown()" class="dropbtn w-100"><span
                                                id="displaystate">Select State </span><img class="down-image"
                                                src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="mystatedropdown" class="dropdown-content w-100">
                                            <input style="width:100%" type="text" placeholder="Search.." id="mystateinput"
                                                onkeyup="searchFunction('mystate')" autocomplete=off>
                                            <input value="" id="state" name="state" class="form-control" type="hidden">
                                            <ul id="mystate" style="list-style:none;overflow-x:scroll;height:300px">
                                                @foreach ($states as $state)
                                                    <li onclick="setstate('{{ $state->name }}', '{{ $state->id }}')"
                                                        id="{{ $state->name }}">{{ $state->name }}</li>
                                                @endforeach
                                            </ul>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">District</label>
                                        <label onclick="districtdropdown()" class="dropbtn w-100"><span
                                                id="displaydistrict">Select District </span><img class="down-image"
                                                src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="mydistrictdropdown" class="dropdown-content w-100">
                                            <input style="width:100%" type="text" placeholder="Search.."
                                                id="mydistrictinput" onkeyup="searchFunction('mydistrict')">
                                            <input value="" id="district" name="district" class="form-control"
                                                type="hidden">
                                            <ul id="mydistrict" style="list-style:none;overflow-x:scroll;height:300px">

                                                @foreach ($districts as $district)
                                                    <li onclick="setdistrict('{{ $district->name }}', '{{ $district->id }}')"
                                                        id="{{ $district->name }}">{{ $district->name }}</li>
                                                @endforeach
                                            </ul>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-3 my-3 col-12">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">City</label>
                                        <label onclick="citydropdown()" class="dropbtn w-100"><span id="displaycity">Select
                                                City </span><img class="down-image"
                                                src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="mycitydropdown" class="dropdown-content w-100">
                                            <input style="width:100%" type="text" placeholder="Search.." id="mycityinput"
                                                onkeyup="searchFunction('mycity')">
                                            <input value="" id="city" name="city" class="form-control" type="hidden">
                                            <ul id="mycity" style="list-style:none;overflow-x:scroll;height:300px">

                                                @foreach ($cities as $city)
                                                    <li onclick="setcity('{{ $city->name }}')"
                                                        id="{{ $district->name }}">{{ $city->name }}</li>
                                                @endforeach
                                            </ul>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0 mt-1">Avaliablity Period</label>
                                    <select required class="form-control" name="avability_period"
                                        id="choices-Avaliablity">
                                        <option value="Online">Online</option>
                                        <option value="Offline">Offline</option>
                                        <option value="In-Door">In-Door</option>
                                    </select>
                                </div>

                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0 mt-1">Available time</label>
                                    <select required class="form-control" name="available_time" id="choices-Available">
                                        <option value="Morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Bank Name</label>
                                    <div class="input-group">
                                        <input required id="phone" name="bank_name" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Bank Number</label>
                                    <div class="input-group">
                                        <input required id="phone" name="bank_number" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Bank IFSC</label>
                                    <div class="input-group">
                                        <input required id="phone" name="ifsc" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Adhar Number</label>
                                    <div class="input-group">
                                        <input required id="phone" name="adhar_number" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="mt-1 form-label mb-0">Pan Number</label>
                                    <input required id="phone" name="pan_number" class="form-control" type="text">

                                </div>
                            </div>

                            <div id="room_fileds" class="my-5">
                                <div class="row my-3 py-0">
                                    <div class="col-md-5 col-5 align-self-center">
                                        <label class="form-label mb-0 mt-1">Experience</label>
                                        <input required class="form-control" name="experience[]" type="text"
                                            placeholder="Enter something" />
                                    </div>
                                    <div class="col-md-6 col-5 my-3 align-self-center">
                                        <label class="form-label mb-0 mt-1">Years</label>
                                        <input required class="form-control" name="years[]" type="text"
                                            placeholder="Enter something" />
                                    </div>
                                    <div class="col-md-1 col-2 my-3">
                                        <label class="form-label mb-0 mt-1">&nbsp;</label>
                                        <button class="form-control btn btn-md btn-primary bg-theme-1 px-1 "
                                            onclick="add_fields();" type="button">+</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-md-3 align-self-center">
                                    <!-- Example single danger button -->
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Specailization</label>
                                        <label onclick="specailizationdropdown()" class="dropbtn w-100">Select
                                            Specailizations <img class="down-image"
                                                src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="specailizationDropdown" class="dropdown-content w-100">
                                            <input style="width:100%" type="text" placeholder="Search.."
                                                id="specailizationDropdowninput"
                                                onkeyup="searchFunction('specailizationDropdown')">
                                            <div id="specailizationDropdownresult">
                                                @foreach ($specializations as $specialization)
                                                    <div class="form-check"
                                                        style="padding-left: 2.5em;margin-top:4px;text-align:center">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $specialization->specializations }}"
                                                            id="flexCheckDefault" name="specializations[]">
                                                        <label class="form-check-label" for="flexCheckDefault"
                                                            style="margin-left:2px">
                                                            {{ $specialization->specializations }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 align-self-center">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Class</label>
                                        <label onclick="classesdropdown()" class="dropbtn w-100">Select Classes <img
                                                class="down-image" src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="classesDropdown" class="dropdown-content w-100">
                                            <input style="width:100%" type="text" placeholder="Search.."
                                                id="classesDropdowninput" onkeyup="searchFunction('classesDropdown')">
                                            <div id="classesDropdownresult">
                                                @foreach ($classes as $class)
                                                    <div class="form-check"
                                                        style="padding-left: 2.5em;margin-top:4px;text-align:center">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $class->name }}" id="flexCheckDefault"
                                                            name="classes[]">
                                                        <label class="form-check-label" for="flexCheckDefault"
                                                            style="margin-left:2px">
                                                            {{ $class->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input required class="form-control" id="choices-language" name="language" type="text" value="english, hindi, punjabi " placeholder="Enter something" /> -->
                                </div>

                                <div class="col-md-3 align-self-center">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Subject</label>
                                        <label onclick="subjectdropdown()" class="dropbtn w-100">Select Subjects <img
                                                class="down-image" src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="subjectDropdown" class="dropdown-content w-100"
                                            style="height:300px;overflow-x:scroll">
                                            <input style="width:100%" type="text" placeholder="Search.."
                                                id="subjectDropdowninput" onkeyup="searchFunction('subjectDropdown')">
                                            <div id="subjectDropdownresult">
                                                @foreach ($subjects as $subject)
                                                    <div class="form-check"
                                                        style="padding-left: 2.5em;margin-top:4px;text-align:center">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $subject->name }}" id="flexCheckDefault"
                                                            name="subjects[]">
                                                        <label class="form-check-label" for="flexCheckDefault"
                                                            style="margin-left:2px">
                                                            {{ $subject->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input required class="form-control" id="choices-Subject" type="text" name="subject" value="english, hindi, punjabi " placeholder="Enter something" /> -->
                                </div>

                                <div class="col-md-3 ">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Qualification</label>
                                        <label onclick="qualificationdropdown()" class="dropbtn w-100">Select
                                            Qualifications <img class="down-image"
                                                src="{{ asset('images/br_down.png') }}"></label>
                                        <div id="qualificationDropdown" class="dropdown-content w-100">
                                            <input style="width:100%" type="text" placeholder="Search.."
                                                id="qualificationDropdowninput"
                                                onkeyup="searchFunction('qualificationDropdown')">
                                            <div id="qualificationDropdownresult">
                                                @foreach ($qualifications as $qualification)
                                                    <div class="form-check"
                                                        style="padding-left: 2.5em;margin-top:4px;text-align:center">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $qualification->qualifications }}"
                                                            id="flexCheckDefault" name="qualifications[]">
                                                        <label class="form-check-label" for="flexCheckDefault"
                                                            style="margin-left:2px">
                                                            {{ $qualification->qualifications }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <input required class="form-control" id="choices-skills" type="text" name="course" value="vuejs, angular, react" placeholder="Enter something" /> -->
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-12 col-md-3 my-3">
                                    <label for="address" class="mb-0">Profile Pic</label>
                                    <input required type="file" class="form-control" id="profileimage"
                                        name="profileimage">
                                </div>

                                <div class="col-12 col-md-3 my-3">
                                    <label for="address" class="mb-0">Cover Pic</label>
                                    <input required type="file" class="form-control" id="coverimage" name="coverimage">

                                </div>
                                <div class="col-12 col-md-3 my-3">
                                    <label for="address" class="mb-0">Bank Account Pic</label>
                                    <input required type="file" class="form-control" id="bankaccountimage"
                                        name="bankaccountimage">
                                </div>
                                <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">Aadhar Front Pic</label>
                                    <input required type="file" class="form-control" id="adharfrontimage"
                                        name="adharfrontimage">
                                </div>
                                <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">Aadhar Back Pic</label>
                                    <input required type="file" class="form-control" id="adharbackimage"
                                        name="adharbackimage">
                                </div>
                                <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">Pancard Pic</label>
                                    <input required type="file" class="form-control" id="pancardimage"
                                        name="pancardimage">
                                </div>
                                <div class="col-md-6 col-12 my-3">
                                    <label for="address" class="mb-0">CV (Resume)</label>
                                    <input required type="file" class="form-control" id="resume" name="resume">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <button type="submit"
                                        class="btn btn-primary btn-block bg-theme-1 py-1 mt-5 mx-0">Save</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </form>

    </div>

    <!--   Core JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <script src="{{ asset('admin') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('admin') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins/choices.min.js"></script>
    <!-- Kanban scripts -->

    <script src="{{ asset('admin') }}/js/plugins/dragula/dragula.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins/jkanban/jkanban.js"></script>
    <script type="text/javascript">
        function add_fields() {
            var dummy = '<div class="row new my-0 py-0" style="margin-top:5px !important; padding-top:0px !important;">' +
                '<div class="col-md-5 col-5 align-self-center" >' +
                '<input required class="form-control" name="experience[]" type="text" placeholder="Enter something" />' +
                '</div>' +
                '<div class="col-md-6 col-5 align-self-center" >' +
                '<input required class="form-control" name="years[]" type="text" placeholder="Enter something" />' +
                '</div>' +
                '<div class="col-md-1 col-2 ">' +
                '<div class="col-md-12" >' +
                '<button id="removeqs" class="form-control btn btn-md btn-primary bg-theme-1 px-1" type="button">x</button>' +
                '</div>' +
                '</div>'
            $('#room_fileds').append(dummy);
            // var dummy = '<div class="row new" style="margin-top:0px !important; padding-top:0px !important;" >'+
            // '<div class="col-11 " >'+
            // '<input required class="form-control mt-2" id="choices-Specilization" type="text"  placeholder="Enter something" /></div>
            // <div class="col-md-1 mt-2" >'+'<img id="removeqs" src="{{ asset('assets/png/24x24/delete.png') }}"></div></div>';
            // $('#room_fileds').append(dummy);   
        }
    </script>

    <script type="text/javascript">
        let selectedId = "";

        function changeLocationInputs(type, id) {
            if (type == 'district') {
                $("#mydistrict").empty();
                document.getElementById("displaydistrict").innerText = "Select District";
                $("#mycity").empty();
                document.getElementById("displaycity").innerText = "Select City";
                searchFunction("mydistrict")
            }
            if (type == 'cities') {
                $("#mycity").empty();
                document.getElementById("displaycity").innerText = "Select City";
                searchFunction("mycity")
            }
        }

        function setdistrict(val, district_id = null) {
            console.log(val)
            selectedId = district_id;
            changeLocationInputs("cities", district_id);

            document.getElementById("displaydistrict").innerText = val;
            // $("#displaydistrict").text(this.id)
            // $("#district").attr('value',this.id)
            document.getElementById("district").value = val;
            document.getElementById("mydistrictdropdown").classList.toggle("show");
        }

        function setstate(val, state_id = null) {
            console.log(val)
            console.log(state_id)
            selectedId = state_id
            changeLocationInputs("district", state_id);
            document.getElementById("displaystate").innerText = val;
            // $("#displaydistrict").text(this.id)
            // $("#district").attr('value',this.id)
            document.getElementById("state").value = val;
            document.getElementById("mystatedropdown").classList.toggle("show");
        }

        function setcity(val) {
            console.log(val)
            document.getElementById("displaycity").innerText = val;
            // $("#displaydistrict").text(this.id)
            // $("#district").attr('value',this.id)
            document.getElementById("city").value = val;
            document.getElementById("mycitydropdown").classList.toggle("show");
        }

        $("#room_filed").on("click", "#removeq", function(e) {
            $(this).parents('.new').remove();
            //the above method will remove the user_data div
        });
        $("#room_fileds").on("click", "#removeqs", function(e) {
            $(this).parents('.new').remove();
            //the above method will remove the user_data div
        });
    </script>
    <script>
        var d = new Date();
        var monthArray = new Array();
        monthArray[0] = "January";
        monthArray[1] = "February";
        monthArray[2] = "March";
        monthArray[3] = "April";
        monthArray[4] = "May";
        monthArray[5] = "June";
        monthArray[6] = "July";
        monthArray[7] = "August";
        monthArray[8] = "September";
        monthArray[9] = "October";
        monthArray[10] = "November";
        monthArray[11] = "December";
        for (m = 0; m <= 11; m++) {
            var optn = document.createElement("OPTION");
            optn.text = monthArray[m];
            // server side month start from one
            optn.value = (m + 1);
            // if june selected
            if (m == 1) {
                optn.selected = true;
            }
            month.options.add(optn);
        }



        if (document.querySelector('.datepicker')) {
            flatpickr('.datepicker', {
                mode: "range"
            });
        }

        function specailizationdropdown() {
            document.getElementById("specailizationDropdown").classList.toggle("show");
        }

        function classesdropdown() {
            document.getElementById("classesDropdown").classList.toggle("show");
        }

        function subjectdropdown() {
            document.getElementById("subjectDropdown").classList.toggle("show");
        }

        function qualificationdropdown() {
            document.getElementById("qualificationDropdown").classList.toggle("show");
        }

        function districtdropdown() {
            document.getElementById("mydistrictdropdown").classList.toggle("show");
        }

        function statedropdown() {
            document.getElementById("mystatedropdown").classList.toggle("show");
        }

        function citydropdown() {
            document.getElementById("mycitydropdown").classList.toggle("show");
        }

        // function filterFunction() {
        //     var input, filter, ul, li, a, i;
        //     input = document.getElementById("myInput");
        //     filter = input.value.toUpperCase();
        //     div = document.getElementById("myDropdown");
        //     a = div.getElementsByTagName("a");
        //     for (i = 0; i < a.length; i++) {
        //         txtValue = a[i].textContent || a[i].innerText;
        //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //             a[i].style.display = "";
        //         } else {
        //             a[i].style.display = "none";
        //         }
        //     }
        // }

        function searchFunction(type) {
            var searchinput = document.getElementById(type + 'input').value;
            console.log(type, searchinput)
            $.ajax({
                url: "search",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                type: "post",
                data: {
                    name: searchinput,
                    searchtype: type,
                    selectedId: selectedId
                },
                success: function(res) {

                    if (res.type == 'specailizationDropdown') {
                        $("#" + res.type + 'result').empty();
                        $.each(res.result, function(index, value) {
                            $("#" + res.type + 'result').append(
                                "" +
                                '<div class="form-check" style="padding-left: 2.5em;margin-top:4px;text-align:center">' +
                                '<input class="form-check-input" type="checkbox" value="' + value
                                .specializations +
                                '" id="flexCheckDefault" name="specializations[]">' +
                                '<label class="form-check-label" for="flexCheckDefault" style="margin-left:2px">' +
                                value.specializations +
                                '</label>' +
                                '</div>'
                            );
                        });
                    } else if (res.type == 'qualificationDropdown') {
                        $("#" + res.type + 'result').empty();
                        $.each(res.result, function(index, value) {
                            $("#" + res.type + 'result').append(
                                "" +
                                '<div class="form-check" style="padding-left: 2.5em;margin-top:4px;text-align:center">' +
                                '<input class="form-check-input" type="checkbox" value="' + value
                                .qualifications +
                                '" id="flexCheckDefault" name="qualifications[]">' +
                                '<label class="form-check-label" for="flexCheckDefault" style="margin-left:2px">' +
                                value.qualifications +
                                '</label>' +
                                '</div>'
                            );
                        });
                    } else if (res.type == 'subjectDropdown') {
                        $("#" + res.type + 'result').empty();
                        $.each(res.result, function(index, value) {
                            $("#" + res.type + 'result').append(
                                "" +
                                '<div class="form-check" style="padding-left: 2.5em;margin-top:4px;text-align:center">' +
                                '<input class="form-check-input" type="checkbox" value="' + value
                                .name + '" id="flexCheckDefault" name="subjects[]">' +
                                '<label class="form-check-label" for="flexCheckDefault" style="margin-left:2px">' +
                                value.name +
                                '</label>' +
                                '</div>'
                            );
                        });
                    } else if (res.type == 'classesDropdown') {
                        $("#" + res.type + 'result').empty();
                        $.each(res.result, function(index, value) {
                            $("#" + res.type + 'result').append(
                                "" +
                                '<div class="form-check" style="padding-left: 2.5em;margin-top:4px;text-align:center">' +
                                '<input class="form-check-input" type="checkbox" value="' + value
                                .name + '" id="flexCheckDefault" name="classes[]">' +
                                '<label class="form-check-label" for="flexCheckDefault" style="margin-left:2px">' +
                                value.name +
                                '</label>' +
                                '</div>'
                            );
                        });
                    } else if (res.type == 'mydistrict') {
                        $("#" + res.type).empty();
                        $.each(res.result, function(index, value) {
                            $("#" + res.type).append(
                                "" +
                                `<li onclick="setdistrict('${value.name}', '${value.id}')" id="${value.name}">${value.name}</li>`
                            );
                        });
                    } else if (res.type == 'mystate') {
                        $("#" + res.type).empty();
                        $.each(res.result, function(index, value) {
                            console.log(value)
                            $("#" + res.type).append(
                                "" +
                                `<li onclick="setstate('${value.name}', '${value.id}')" id="${value.name}">${value.name}</li>`
                            );
                        });
                    } else if (res.type == 'mycity') {
                        $("#" + res.type).empty();
                        $.each(res.result, function(index, value) {
                            $("#" + res.type).append(
                                "" +
                                "<li onclick=\"setcity(\'" + value.name + "\');\" id=" + value
                                .name + ">" + value.name + "</li>"
                            );
                        });
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin') }}/js/soft-ui-dashboard.min3447.js?v=1.0.5"></script>
@endsection

</body>

</html>
