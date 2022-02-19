@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Edit State</div>
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
                        <label for="name">State Name</label>
                        <input type="text" class="form-control" id="state" name="state_name" value="{{ $state->name }}">
                    </div>
                    <!-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1" id="status" name="status" {{$state->status == 1 ? 'checked' : ''}}>
                                <label class="form-check-label" for="status">
                                    Status
                                </label>
                            </div> -->

                    <div class="form-group mb-3">

                        <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$state->status ? 'checked' : ''}}>
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