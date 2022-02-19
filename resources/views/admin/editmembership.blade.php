@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Edit Membership</div>
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

                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">State</label>
                        <select class="form-control state_select" id="memebershiptype" name="memebershiptype">
                            <option {{$membership->membership_type=='student' ? 'selected' : ''}} value="student">Student</option>
                            <option {{$membership->membership_type=='teacher' ? 'selected' : ''}} value="teacher">Teacher</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Membership Name</label>
                        <input type="text" class="form-control" id="membershipname" name="membershipname" value="{{$membership->name}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Membership price</label>
                        <input type="number" class="form-control" id="membershipprice" name="membershipprice" value="{{$membership->price}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Membership Duration</label>
                        <input type="text" class="form-control" id="membershipduration" name="membershipduration" value="{{$membership->duration}}">
                    </div>
                   
                    <div class="form-group mb-3">
                
                            <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$membership->status ? 'checked' : ''}} >
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn text-white bg-theme-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection