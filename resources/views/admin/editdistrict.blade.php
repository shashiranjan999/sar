@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Edit District</div>
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

                <form action="{{url('/district\\'.$district->id.'/edit')}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">District Name</label>
                        <input type="text" class="form-control" id="district" name="district_name" value="{{$district->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">State</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="state_id">

                            @foreach ($states as $state)
                            <option {{$district->state_id == $state->id ? 'selected' : ''}} value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">

                        <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$district->status ? 'checked' : ''}}>
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