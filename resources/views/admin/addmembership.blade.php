@extends('layouts.dashboardlayout')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="list-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Membership List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="add-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Membership</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($memberships as $membership)
                                <tr>
                                    <td>{{ $membership->id }}</td>
                                    <td>{{ $membership->name }}</td>
                                    <td>{{ $membership->membership_type }}</td>
                                    <td>{{ $membership->price}}</td>
                                    <td>{{ $membership->duration}}</td>
                                    <td>{{ $membership->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ url('/membership\\' . $membership->id . '/edit') }}" class="btn btn-outline-primary float-left mr-3 btn-sm">Edit</a>
                                        <form id="delete-frm" action="{{ url('/membership/delete/' . $membership->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {!! $memberships->links() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form action="{{ url('membership') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h6>State</h6>
                                        <select class="form-control state_select" id="memebershiptype" name="memebershiptype">
                                            <option value="">Select Membership Type</option>
                                            <option value="student">Student</option>
                                            <option value="teacher">Teacher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <h6>Membership Name</h6>
                                        <input type="text" class="form-control" id="membershipname" name="membershipname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Membership price</h6>
                                        <input type="number" class="form-control" id="membershipprice" name="membershipprice">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Membership Duration</h6>
                                        <input type="text" class="form-control" id="membershipduration" name="membershipduration">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Status</h6>
                                        <label class="switch">
                                            <input type="checkbox" value="1" checked name="status">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>





                            <button type="submit" class="btn text-white bg-theme-1">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection