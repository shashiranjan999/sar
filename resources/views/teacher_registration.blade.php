@extends('templates.base1')
@push('custom-styles')
<link rel="stylesheet" href="{{ asset('css/teacher_reg.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .text-error {
        color: red !important;
    }

    .invalid-feedback {
        color: red !important;
    }
</style>
@endpush
@section('content')
<section class="bg-theme-1 section-head py-0 py-sm-5">
    <div class="container py-5 text-center text-white">
        <h2 class="text-white mb-0">Welcome To SAR</h2>
        <p class="pb-0">Fill this form so that we can start on-boarding process with you.</p>
    </div>
</section>
<section class="bg-theme-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-center pt-3"><span class="circle done-1">1</span> Personal Details</p>
            </div>

            {{-- <div class="col-md-4">
                <p class="text-center pt-3"><span class="circle done-2">2</span> Bank Account</p>
            </div> --}}

            <div class="col-md-6">
                <p class="text-center pt-3"><span class="circle done-3">2</span> Professional details</p>
            </div>
        </div>
    </div>
</section>
<div class="my-3 py-3 container">
    <form action="{{ url('teacher_reg') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" id="teacher_reg">
        @csrf
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-12 mt-lg-0 mt-1">
                <!-- Card Profile -->
                <!-- Card Basic Info -->
                <div class="card mt-1" id="basic-info">
                    <!-- <div class="card-header border-0 px-4"> -->
                    <div class="card-body pt-0">
                        <div class="step-1 teacher-steps active">
                            <div class="row">
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">First Name</label>
                                    <div class="input-group">
                                        <input  name="first_name" class="form-control" type="text" placeholder="First Name" id="first_name">
                                    </div>
                                    <div class="invalid-feedback" id="first_name_error">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Last Name</label>
                                    <div class="input-group">
                                        <input  name="last_name" class="form-control" type="text" placeholder="Last Name" id="last_name">
                                        <div class="invalid-feedback" id="last_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Father Name</label>
                                    <div class="input-group">
                                        <input  name="father_name" class="form-control" type="text" placeholder="Father's Name" id="father_name">
                                        <div class="invalid-feedback" id="father_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Mother Name</label>
                                    <div class="input-group">
                                        <input  name="mother_name" class="form-control" type="text" placeholder="Mother's Name" id="mother_name">
                                        <div class="invalid-feedback" id="mother_name_error">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal -->
                            <div class="row">
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">I'm</label>
                                    <select  class="form-control" name="gender" id="gender">
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Birth Date</label>
                                    <input  type="date" name="dob" id="dob" class="form-control">
                                    <div class="invalid-feedback" id="dob_error">
                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Email</label>
                                    <div class="input-group">
                                        <input  id="email" name="email" class="form-control" type="email" placeholder="example@email.com" >
                                    </div>
                                    <div class="invalid-feedback" id="email_error">

                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Password</label>
                                    <div class="input-group">
                                        <input  id="password" name="password" class="form-control" type="password">
                                    </div>
                                    <div class="invalid-feedback" id="password_error">
                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Phone Number</label>
                                    <div class="input-group">
                                        <input  id="phone" name="phone" class="form-control" type="text" placeholder="Phone Number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                    <div class="invalid-feedback" id="phone_number_error">
                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Alt Phone Number</label>
                                    <div class="input-group">
                                        <input  id="alt_phone" name="alt_phone" class="form-control" type="text" placeholder="9876543210" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                    <div class="invalid-feedback" id="alt_phone_number_error">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0 mt-1">Avaliablity Period</label>
                                    <select  class="form-control" name="avability_period" id="avability_period">
                                        <option value="Online" selected>Online</option>
                                        <option value="Offline">Offline</option>
                                        <option value="In-Door">In-Door</option>
                                    </select>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0 mt-1">Available time</label>
                                    <select  class="form-control" name="available_time" id="available_time">
                                        <option value="Morning" selected>Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="row">
                                <div class="col-md-3 my-3 col-12 mt-1">
                                    <div class="dropdown w-100">
                                        <label class="form-label mt-1">State</label>
                                        <select class="form-control" id="state">
                                            <option value="">Select State</option>
                                            @foreach ($states as $state)
                                            <option value="{{ $state->id }}">
                                                {{ $state->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">District</label>
                                        <select class="form-control" id="districts">
                                            <option value="">Select District</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 my-3 col-12">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">City</label>
                                        <select class="form-control" id="cities">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Address</label>
                                    <div class="input-group">
                                        <input  id="address" placeholder="address" name="address" class="form-control" type="text">
                                    </div>
                                    <div class="invalid-feedback" id="address_error">
                                    </div>
                                </div>

                            </div>
                            <div class="invalid-feedback" id="location_error">
                            </div>

                            <!-- Picture -->
                            <!-- <div class="row">
                                <div class="col-12 col-md-3 my-3">
                                    <label for="address" class="mb-0">Profile Picture</label>
                                    <input  type="file" class="form-control" id="profile_image" name="profileimage" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="profile_image_error">
                                        Invalid File
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 my-3">
                                    <label for="address" class="mb-0">Cover Picture</label>
                                    <input  type="file" class="form-control" id="cover_image" name="coverimage" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="cover_image_error">
                                        Invalid File
                                    </div>
                                </div>
                            </div> -->
                            <!-- <small><i>Please ensure to upload image and pdf only & file size should be less then 500Kb.</i></small> -->
                        </div>

                        {{-- <div class="step-2 teacher-steps">
                            <div class="row my-3">
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Bank Name</label>
                                    <div class="input-group">
                                        <input  id="bank_name" name="bank_name" class="form-control" type="text" placeholder="Bank Name">
                                    </div>
                                    <div class="invalid-feedback" id="bank_name_error">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Account Number</label>
                                    <div class="input-group">
                                        <input  id="bank_number" name="bank_number" class="form-control" type="text" maxlength="20" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Account Number">
                                    </div>
                                    <div class="invalid-feedback" id="bank_number_error">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Bank IFSC</label>
                                    <div class="input-group">
                                        <input  id="bank_ifsc" name="ifsc" class="form-control" type="text" maxlength="11" placeholder="Bank IFSC">
                                    </div>
                                    <div class="invalid-feedback" id="bank_ifsc_error">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Aadhar Number</label>
                                    <div class="input-group">
                                        <input  id="aadhar_number" name="adhar_number" class="form-control" type="text" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="0000 0000 0000">
                                    </div>
                                    <div class="invalid-feedback" id="aadhar_number_error">
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <label class="mt-1 form-label mb-0">Pan Number</label>
                                    <input  id="pan_number" name="pan_number" class="form-control" type="text" maxlength="10" placeholder="ABCDE1234A">
                                    <div class="invalid-feedback" id="pan_number_error">
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-12 col-md-3 my-3">
                                    <label for="address" class="mb-0">Bank Account Picture</label>
                                    <input  type="file" class="form-control" id="bankaccount_image" name="bankaccountimage" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="bank_account_image_error">
                                        Invalid File
                                    </div>
                                </div>
                                <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">Aadhar Front Picture</label>
                                    <input  type="file" class="form-control" id="aadhar_front_image" name="adharfrontimage" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="aadhar_front_image_error">
                                        Invalid File
                                    </div>
                                </div>
                                <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">Aadhar Back Picture</label>
                                    <input  type="file" class="form-control" id="aadhar_back_image" name="adharbackimage" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="aadhar_back_image_error">
                                        Invalid File
                                    </div>
                                </div>
                                <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">Pancard Picture</label>
                                    <input  type="file" class="form-control" id="pancard_image" name="pancardimage" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="pancard_image_error">
                                        Invalid File
                                    </div>
                                </div>
                            </div> 

                            <small><i>Please ensure to upload image and pdf only & file size should be less then 500Kb.</i></small>
                        </div> --}}

                        <div class="step-2 teacher-steps">
                            <div class="row">
                                <div class="col-5 align-self-center">
                                    <label class="form-label mb-0 mt-1">Experience</label>
                                    <input class="form-control" name="experience" id="experience" type="text" placeholder="Enter something" />
                                </div>
                                <div class="col-5 my-3 align-self-center">
                                    <label class="form-label mb-0 mt-1">Years</label>
                                    <input class="form-control" name="years" id="years" type="text" placeholder="Enter something" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                </div>

                                <div class="col-md-2 my-3">
                                    <label class="form-label mb-0 mt-1">&nbsp;</label>
                                    <button class="form-control btn btn-md btn-primary bg-theme-1 px-1 " onclick="add_experience()" type="button">+</button>
                                </div>
                            </div>
                            <div class="invalid-feedback" id="experiences_error">
                                Please Fill in all fields.
                            </div>
                            <div class="my-5">
                                <div class="row my-3 py-0">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Experience</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="experience_table_row">
                                            <tr>
                                                <td colspan="8">Click + to add Experience & year</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="my-5">
                                <div class="row my-3 py-0">
                                    <div class="col-md-2 align-self-center">
                                        <label class="form-label mb-0 mt-1">Qualification</label>
                                        <select class="form-control" id="qualification">
                                            <option value="">Select Qualification</option>
                                            @foreach ($qualifications as $qualification)
                                            <option value="{{ $qualification->id }}">
                                                {{ $qualification->qualifications }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <input class="form-control" id="choices-skills" type="text" name="course" value="vuejs, angular, react" placeholder="Enter something" /> -->
                                    <div class="col-md-2 align-self-center">
                                        <label class="form-label mb-0 mt-1">Year</label>
                                        <input class="form-control" name="qualification_year" id="qualification_year" type="text" placeholder="Year" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <label class="form-label mb-0 mt-1">Total Marks</label>
                                        <input class="form-control" name="total_marks" id="total_marks" type="text" placeholder="Total Marks" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <label class="form-label mb-0 mt-1">Marks Obtained</label>
                                        <input class="form-control" name="marks_obtained" id="marks_obtained" type="text" placeholder="Marks" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                    </div>
                                    <div class="col-md-1 align-self-center">
                                        <label class="form-label mb-0 mt-1">Rank</label>
                                        <input class="form-control" name="rank" id="rank" type="text" placeholder="Rank" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <label class="form-label mb-0 mt-1">Remarks</label>
                                        <input class="form-control" name="remarks" id="remarks" type="text" placeholder="Remarks" />
                                    </div>
                                    <div class="col-1 my-3">
                                        <label class="form-label mb-0 mt-1">&nbsp;</label>
                                        <button class="form-control btn btn-md btn-primary bg-theme-1 px-1 " onclick="add_qualification()" type="button">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="invalid-feedback" id="qualifications_error">
                                Please Fill in all fields.
                            </div>

                            <div class="my-5">
                                <div class="row my-3 py-0">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Qualification</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">Total Marks</th>
                                                <th scope="col">Mark Obtained</th>
                                                <th scope="col">Rank</th>
                                                <th scope="col">Remarks</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="qualification_table_row">
                                            <tr>
                                                <td colspan="8">Click + to add qualification</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-md-3 align-self-center">
                                    <!-- Example single danger button -->
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Specailization</label>
                                        <select class="form-control" id="specailization" multiple>
                                            <option value="">Select Specailization</option>
                                            @foreach ($specializations as $specialization)
                                            <option value="{{ $specialization->id }}">
                                                {{ $specialization->specializations }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 align-self-center">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Class</label>
                                        <select class="form-control" id="class" multiple>
                                            <option value="">Select Class</option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}"> {{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <input class="form-control" id="choices-language" name="language" type="text" value="english, hindi, punjabi " placeholder="Enter something" /> -->
                                </div>

                                <div class="col-md-3 align-self-center">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">Subject</label>
                                        <select class="form-control" id="subject" multiple>
                                            <option value="">Select Subject</option>
                                            @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <input class="form-control" id="choices-Subject" type="text" name="subject" value="english, hindi, punjabi " placeholder="Enter something" /> -->
                                </div>

                                <!-- <div class="col-md-3 col-12 my-3">
                                    <label for="address" class="mb-0">CV (Resume)</label>
                                    <input  type="file" class="form-control" id="resume" name="resume" accept="application/pdf, image/jpeg">
                                    <div class="invalid-feedback" id="resume_error"></div>
                                </div> -->
                                <div class="invalid-feedback" id="classes_error">
                                    Please Fill in all fields.
                                </div>
                            </div>
                        </div>
                        <div class="invalid-feedback" id="generic_error"></div>


                        <!-- Pre Next Submit -->
                        <div class="row d-flex justify-content-between my-5">
                            <button class="btn text-white bg-theme-2 btn-sm col-md-2 prev-btn" data-active="1">Prev</button>
                            <button class="btn text-white bg-theme-2 btn-sm col-md-2 next-btn" data-active="1">Next</button>
                            <button type="submit" id="submit_button" class="btn text-white bg-theme-1 col-md-2 btn-sm bg-theme-1 save-btn">Save</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </form>
</div>

<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<script src="{{ asset('admin') }}/js/core/popper.min.js"></script>
<script src="{{ asset('admin') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('admin') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('admin') }}/js/plugins/smooth-scrollbar.min.js"></script>
<script src="{{ asset('admin') }}/js/plugins/choices.min.js"></script>
<!-- Kanban scripts -->
<script src="{{ asset('admin') }}/js/plugins/dragula/dragula.min.js"></script>
<script src="{{ asset('admin') }}/js/plugins/jkanban/jkanban.js"></script>
<script src="https://unpkg.com/validator@latest/validator.min.js"></script>
<script>
  let basePath = "{{url('/')}}";
</script>
<script src="{{ asset('js/teacher_reg.js') }}"></script>
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
