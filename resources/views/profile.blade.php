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
                        <div class="container">
                            {{-- {{ $teacherdetail }} --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">First Name</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->first_name }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Last Name</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->last_name }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Father's Name</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->father_name }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Mother's Name</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->mother_name }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Gender</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->gender }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">DOB</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->dob }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Phone</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->phone }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Email</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Alt Phone</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->alt_phone }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">State</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->state }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">District</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->district }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">City</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->city }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mb-0">Address</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->address }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mb-0">Avability Period</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->avability_period }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mb-0">Available Time</label>
                                                <input type="text" class="form-control" value="{{ $teacherdetail->available_time }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="mb-0">Aadhar Number</label>
                                                <input type="text" class="form-control" value="{{$teacherdetail->adhar_number == 'undefined' ? 'Update your profile' : $teacherdetail->adhar_number }}" disabled>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="mb-0">Pan Number</label>
                                                <input type="text" class="form-control" value="{{$teacherdetail->pan_number == 'undefined' ? 'Update your profile' : $teacherdetail->pan_number }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Profile Image</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                {{-- storage/gallery/teacher/Profile/1643273341.Jpeg --}}
                                                {{-- {{ $teacherdetail->profile_img }} --}}
                                                {{-- {{ url('/storage/gallery/teacher/Profile' . $teacherdetail->profile_img) }} --}}
                                                <a target="_blank" href="{{ url('/storage/gallery/teacher/Profile/' . $teacherdetail->profile_img) }}">{{$teacherdetail->profile_img}}</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Cover Image</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <a target="_blank" href="{{ url('/storage/gallery/teacher/CoverImage/' . $teacherdetail->cover_img) }}">{{$teacherdetail->cover_img}}</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Aadhar Front Image</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <a target="_blank" href="{{ url('/storage/gallery/teacher/adhar_front/' . $teacherdetail->adhar_front_img) }}">{{$teacherdetail->adhar_front_img}}</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Aadhar Back Image</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <a target="_blank" href="{{ url('/storage/gallery/teacher/adhar_back/' . $teacherdetail->adhar_back_img) }}">{{$teacherdetail->adhar_back_img}}</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Pancard Image</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <a target="_blank" href="{{ url('/storage/gallery/teacher/pan/' . $teacherdetail->pancard_img) }}">{{$teacherdetail->pancard_img}}</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="mb-0">Resume</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <a target="_blank" href="{{ url('/storage/gallery/teacher/cv/' . $teacherdetail->cv) }}">{{$teacherdetail->cv}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Bank Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {{ $teacherdetail->bank_name }}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Bank Number</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {{ $teacherdetail->bank_number }}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Bank IFSC</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {{ $teacherdetail->ifsc }}
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="mb-0">Bank Account Image</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <a target="_blank" href="{{ url('/storage/gallery/teacher/account_pic/' . $teacherdetail->bank_account_img) }}">{{$teacherdetail->bank_account_img}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        <div class="m-2"><strong>Specialization : </strong>
                            @foreach ($teacherspecialization as $Specialization)
                            @if ($Specialization->specailizations != null)
                            <span>{{ $Specialization->specailizations }},</span>
                            @endif
                            @endforeach
                        </div>
                        <div class="m-2"><strong>Subjects : </strong>
                            @foreach ($teacherspecialization as $Subjects)
                            @if ($Subjects->subjects != null)
                            <span>{{ $Subjects->subjects }},</span>
                            @endif
                            @endforeach
                        </div>
                        <div class="m-2"><strong>Classes : </strong>
                            @foreach ($teacherspecialization as $Classes)
                            @if ($Classes->classes != null)
                            <span>{{ $Classes->classes }},</span>
                            @endif
                            @endforeach
                        </div>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="bg-theme-1 border-0">Experience Name</th>
                                    <th scope="col" class="bg-theme-1 border-0">Experience year</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacherexperience as $experience)
                                <tr>
                                    <td class="col-sm-3">{{ $experience->experience_name }}</td>
                                    <td class="col-sm-3">{{ $experience->experiences_year }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="bg-theme-1 border-0 text-white">Qualification Name</th>
                                    <th scope="col" class="bg-theme-1 border-0 text-white">Qualification Year</th>
                                    <th scope="col" class="bg-theme-1 border-0 text-white">Total Marks</th>
                                    <th scope="col" class="bg-theme-1 border-0 text-white">Marks Obtained</th>
                                    <th scope="col" class="bg-theme-1 border-0 text-white">Rank</th>
                                    <th scope="col" class="bg-theme-1 border-0 text-white">Remarks</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacherqualification as $qualification)
                                <tr>
                                    <td class="col-sm-3">{{ $qualification->qualification_name }}</td>
                                    <td class="col-sm-3">{{ $qualification->qualification_year }}</td>
                                    <td class="col-sm-3">{{ $qualification->total_marks }}</td>
                                    <td class="col-sm-3">{{ $qualification->marks_obtained }}</td>
                                    <td class="col-sm-3">{{ $qualification->Rank }}</td>
                                    <td class="col-sm-3">{{ $qualification->Remarks }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole
<!-- <div class="row">
@role('teacher')
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
            <h3>Ishmam Ahasan Samin</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Roll</th>
                <td width="2%">:</td>
                <td>125</td>
              </tr>
              <tr>
                <th width="30%">Academic Year	</th>
                <td width="2%">:</td>
                <td>2020</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
              <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>B+</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endrole
</div> -->
@endsection