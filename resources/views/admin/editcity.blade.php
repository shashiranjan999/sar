@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Edit City</div>
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
                        <label for="name">City Name</label>
                        <input type="text" class="form-control" id="city" name="city_name" value="{{$city->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">State</label>
                        <select class="form-control state_select" id="exampleFormControlSelect1" name="state_id">
                            @foreach ($states as $state)
                            @if (request()->get('state_id')){
                            <option {{$state->id == request()->get('state_id') ? 'selected' : ''}} value="{{ $state->id }}">{{ $state->name }}</option>}
                            @else
                            <option {{$state->id == $city->state_id ? 'selected' : ''}} value="{{ $state->id }}">{{ $state->name }}</option>
                            @endif

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Districts</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="district_id">
                            @foreach ($districts as $district)
                            <option {{$district->id == $city->district_id ? 'selected' : ''}} value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">

                        <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$city->status ? 'checked' : ''}}>
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

@push('custom_scripts')
<script>
    $(document).ready(function() {
        $(".state_select").change(function() {
            document.location.href = '?state_id=' + $(this).val();
        })
    })
</script>
@endpush