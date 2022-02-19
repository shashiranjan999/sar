@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Edit Class</div>
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
                    <div class="form-group mb-3">
                        <label for="name">Class Name</label>
                        <input type="text" class="form-control" id="class" name="class_name" value="{{$masterclass->name}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Position</label>
                        <input type="number" class="form-control" id="position" name="position" min="0" value="{{$masterclass->position}}">
                    </div>
                    <div class="form-group mb-3">

                        <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$masterclass->status ? 'checked' : ''}}>
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