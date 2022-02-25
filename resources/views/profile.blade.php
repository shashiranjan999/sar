@extends('layouts.dashboardlayout')

@section('content')
@role('teacher')
<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="card">

            <div class="card-content">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Professional Detail</a>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ url('update-personal-detail') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" id="teacher_reg">
                            @csrf
                            <div class="row">
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">First Name</label>
                                    <div class="input-group">
                                        <input name="first_name" class="form-control" type="text" placeholder="First Name" id="first_name" value="{{ $teacherdetail->first_name }}">
                                    </div>
                                    <div class="invalid-feedback" id="first_name_error">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Last Name</label>
                                    <div class="input-group">
                                        <input name="last_name" class="form-control" type="text" placeholder="Last Name" id="last_name" value="{{ $teacherdetail->last_name }}">
                                        <div class="invalid-feedback" id="last_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Father Name</label>
                                    <div class="input-group">
                                        <input name="father_name" class="form-control" type="text" placeholder="Father's Name" id="father_name" value="{{ $teacherdetail->father_name }}">
                                        <div class="invalid-feedback" id="father_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0">Mother Name</label>
                                    <div class="input-group">
                                        <input name="mother_name" class="form-control" type="text" placeholder="Mother's Name" id="mother_name" value="{{ $teacherdetail->mother_name }}">
                                        <div class="invalid-feedback" id="mother_name_error">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal -->
                            <div class="row">
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">I'm</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option hidden selected value="{{ $teacherdetail->gender }}">{{ $teacherdetail->gender }}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Birth Date</label>
                                    <input type="date" name="dob" id="dob" class="form-control" value="{{ $teacherdetail->dob }}">
                                    <div class="invalid-feedback" id="dob_error">
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Email</label>
                                    <div class="input-group">
                                        <input id="email" name="email" class="form-control" type="email" value="{{ $teacherdetail->email }}">
                                    </div>
                                    <div class="invalid-feedback" id="email_error">

                                    </div>
                                </div> -->

                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Phone Number</label>
                                    <div class="input-group">
                                        <input id="phone" name="phone" class="form-control" type="text" maxlength="10" value="{{ $teacherdetail->phone }}">
                                    </div>
                                    <div class="invalid-feedback" id="phone_number_error">
                                    </div>
                                </div>
                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Alt Phone Number</label>
                                    <div class="input-group">
                                        <input id="alt_phone" name="alt_phone" class="form-control" type="text" value="{{ $teacherdetail->alt_phone }}" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                    <div class="invalid-feedback" id="alt_phone_number_error">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0 mt-1">Avaliablity Period</label>
                                    <select class="form-control" name="avability_period" id="avability_period">
                                        <option hidden selected value="{{ $teacherdetail->avability_period }}">{{ $teacherdetail->avability_period }}</option>
                                        <option value="Online">Online</option>
                                        <option value="Offline">Offline</option>
                                        <option value="In-Door">In-Door</option>
                                    </select>
                                </div>
                                <div class="col-12 my-3 col-md-3">
                                    <label class="form-label mb-0 mt-1">Available time</label>
                                    <select class="form-control" name="available_time" id="available_time">
                                        <option hidden selected value="{{ $teacherdetail->available_time }}">{{ $teacherdetail->available_time }}</option>
                                        <option value="Morning">Morning</option>
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
                                        <select class="form-control" id="state" name="state">
                                            <option hidden selected value="{{ $teacherdetail->state }}">{{ $teacherdetail->state }}</option>

                                            @foreach ($states as $state)
                                            <option value="{{ $state->id }}-{{ $state->name }}">
                                                {{ $state->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 col-12">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">District</label>
                                        <select class="form-control" id="districts" name="district">
                                            <option hidden selected value="{{ $teacherdetail->district }}">{{ $teacherdetail->district }}</option>
                                            <!-- <option value="">Select District</option> -->
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 my-3 col-12">
                                    <div class="dropdown w-100">
                                        <label class="form-label mb-0 mt-1">City</label>
                                        <select class="form-control" id="cities" name="city">
                                            <option hidden selected value="{{ $teacherdetail->city }}">{{ $teacherdetail->city }}</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3 my-3 col-12">
                                    <label class="form-label mb-0 mt-1">Address</label>
                                    <div class="input-group">
                                        <input id="address" value="{{ $teacherdetail->address }}" name="address" class="form-control" type="text">
                                    </div>
                                    <div class="invalid-feedback" id="address_error">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn text-white bg-theme-1 col-md-2 btn-sm bg-theme-1 save-btn">Update</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{ url('update-bank-detail') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" id="teacher_reg">
                            @csrf
                            <div class="row">
                                <div class="col-12 my-3 col-md-4">
                                    <label class="form-label mb-0">Bank Name</label>
                                    <div class="input-group">
                                        <input class="form-control" name="bank_name" placeholder="Update Bank Name" type="text" id="first_name" value="{{ $teacherdetail->bank_name }}">
                                    </div>
                                    <div class="invalid-feedback" id="first_name_error">
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-4">
                                    <label class="form-label mb-0">Bank Account Number</label>
                                    <div class="input-group">
                                        <input class="form-control" name="bank_number" type="text" placeholder="Update Account Number" id="last_name" value="{{ $teacherdetail->bank_number }}">
                                        <div class="invalid-feedback" id="last_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-4">
                                    <label class="form-label mb-0">IFSC</label>
                                    <div class="input-group">
                                        <input class="form-control" name="bank_ifsc" type="text" placeholder="Update IFSC" id="father_name" value="{{ $teacherdetail->ifsc }}">
                                        <div class="invalid-feedback" id="father_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-4">
                                    <label class="form-label mb-0">Aadhar Number</label>
                                    <div class="input-group">
                                        <input class="form-control" name="aadhar_number" type="text" placeholder="Update Aadhar Number" id="mother_name" value="{{ $teacherdetail->adhar_number }}">
                                        <div class="invalid-feedback" id="mother_name_error">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-3 col-md-4">
                                    <label class="form-label mb-0">Pan Number</label>
                                    <div class="input-group">
                                        <input placeholder="Update Pan Number" name="pan_number" class="form-control" type="text" id="mother_name" value="{{ $teacherdetail->pan_number }}">
                                        <div class="invalid-feedback" id="mother_name_error">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Profile Image : </label>
                                        <!-- <input placeholder="Update Pan Number" name="pan_number" class="form-control" type="file" > -->
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($teacherdetail->profile_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/Profile/' . $teacherdetail->profile_img) }}">{{$teacherdetail->profile_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Cover Image</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    @if ($teacherdetail->cover_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/CoverImage/' . $teacherdetail->cover_img) }}">{{$teacherdetail->cover_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Update Profile Image : </label>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="profile_picture" class="form-control" type="file">
                                        <input value="{{$teacherdetail->profile_img}}" name="old_profile_picture" class="form-control" type="hidden">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0"> Update Cover Image : </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="cover_picture" class="form-control" type="file">
                                        <input value="{{$teacherdetail->cover_img}}" name="old_cover_picture" class="form-control" type="hidden">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Aadhar Front Image : </label>
                                        <!-- <input placeholder="Update Pan Number" name="pan_number" class="form-control" type="file" > -->
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($teacherdetail->adhar_front_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/adhar_front/' . $teacherdetail->adhar_front_img) }}">{{$teacherdetail->adhar_front_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Aadhar Back Image</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    @if ($teacherdetail->adhar_back_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/adhar_back/' . $teacherdetail->adhar_back_img) }}">{{$teacherdetail->adhar_back_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Update Aadhar Front Image : </label>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="aadhar_front_picture" class="form-control" type="file">
                                        <input value="{{$teacherdetail->adhar_front_img}}" name="old_aadhar_front_picture" class="form-control" type="hidden">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0"> Update Aadhar Back Image : </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="aadhar_back_picture" class="form-control" type="file">
                                        <input value="{{$teacherdetail->adhar_back_img}}" name="old_aadhar_back_picture" class="form-control" type="hidden">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Pan Card : </label>
                                        <!-- <input placeholder="Update Pan Number" name="pan_number" class="form-control" type="file" > -->
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($teacherdetail->pancard_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/pan/' . $teacherdetail->pancard_img) }}">{{$teacherdetail->pancard_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Bank Acoount Image</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    @if ($teacherdetail->bank_account_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/account_pic/' . $teacherdetail->bank_account_img) }}">{{$teacherdetail->bank_account_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Update Pan Card Image : </label>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="pancard_picture" class="form-control" type="file">
                                        <input value="{{$teacherdetail->pancard_img}}" name="old_pancard_picture" class="form-control" type="hidden">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0"> Update Bank Account Image : </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="bank_account_picture" class="form-control" type="file">
                                        <input value="{{$teacherdetail->bank_account_img}}" name="old_bank_account_picture" class="form-control" type="hidden">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Pan Card : </label>
                                        <!-- <input placeholder="Update Pan Number" name="pan_number" class="form-control" type="file" > -->
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($teacherdetail->pancard_img)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/pan/' . $teacherdetail->pancard_img) }}">{{$teacherdetail->pancard_img}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Resume</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                    @if ($teacherdetail->cv)
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/cv/' . $teacherdetail->cv) }}">{{$teacherdetail->cv}}</a>
                                        @else
                                        <span>No image Found</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Update Resume : </label>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input name="resume" class="form-control" type="file">
                                        <input value="{{$teacherdetail->cv}}" name="old_resume" class="form-control" type="hidden">
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn text-white bg-theme-1 col-md-2 btn-sm bg-theme-1 save-btn">Update</button>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <form action="{{ url('update-professional-detail') }}" enctype="multipart/form-data" method="POST" class="form-horizontal" id="teacher_reg">
                            @csrf
                            <div class="row">
                                <div class="col-5 align-self-center">
                                    <label class="form-label mb-0 mt-1">Experience</label>
                                    <input class="form-control" name="experience" id="experience" type="text" placeholder="Enter something" />
                                    <input class="form-control" name="experience" id="experience" type="text" placeholder="Enter something" />
                                </div>
                                <div class="col-5 my-3 align-self-center">
                                    <label class="form-label mb-0 mt-1">Years</label>
                                    <input class="form-control" name="experience" id="experience" type="text" placeholder="Enter something" />
                                    <input class="form-control" name="years" id="years" type="text" placeholder="Enter something" maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                </div>

                                <div class="col-md-2 my-3">
                                    <label class="form-label mb-0 mt-1">&nbsp;</label>
                                    <button class="form-control btn btn-md btn-primary bg-theme-1 px-1 " onclick="add_experience()" type="button">+</button>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn text-white bg-theme-1 col-md-2 btn-sm bg-theme-1 save-btn">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole
@endsection


@push('custom_scripts')
<script>
    $(document).ready(function() {

        $("#state").change(function() {
            var state_id = $(this).val();


            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: 'get-districts',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    state_id: state_id
                },
                dataType: 'JSON',
                success: function(response) {
                    var len = response.length;
                    $("#districts").empty();
                    for (var i = 0; i < len; i++) {
                        var id = response[i]['id'];
                        var name = response[i]['name'];
                        $("#districts").append("<option value='" + id + '-' + name + "'>" + name + "</option>");
                    }
                }
            });
        });

        $("#districts").change(function() {
            var district_id = $(this).val();
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: 'get-cities',
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    district_id: district_id
                },
                dataType: 'JSON',
                success: function(response) {
                    var len = response.length;
                    $("#cities").empty();
                    for (var i = 0; i < len; i++) {
                        var id = response[i]['id'];
                        var name = response[i]['name'];
                        $("#cities").append("<option value='" + id + '-' + name + "'>" + name + "</option>");
                    }
                }
            });
        });

    });
</script>
@endpush