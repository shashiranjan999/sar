@extends('layouts.dashboardlayout')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="list-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">City List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="add-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add City</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    {{-- {{dd(request()->query())}} --}}
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->status ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        {{-- /city/{{ $city->id }}/edit --}}
                                        <a href="{{ url('city/'.$city->id.'/edit')}}" class="btn btn-outline-primary float-left mr-3 btn-sm">Edit</a>
                                        <form id="delete-frm" action="/city/delete/{{ $city->id }}" method="POST">

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
                    {!! $cities->links() !!}
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

                        <form action="{{url('Add-city')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <h6>City Name</h6>
                                        <input type="text" class="form-control" id="city" name="city_name" value="{{request()->get('city')}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h6>State</h6>
                                        <select class="form-control state_select" id="exampleFormControlSelect1" name="state_id">
                                            @foreach ($states as $state)
                                            <option {{ request()->get('state_id') == $state->id ? 'selected' : ''}} value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h6>Districts</h6>
                                        <select class="form-control " id="exampleFormControlSelect1" name="district_id">
                                            @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
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

@push('custom_scripts')
<script>
    $(document).ready(function() {
        $(".state_select").change(function() {
            document.location.href = '?state_id=' + $(this).val() + '&city=' + $("#city").val();
        })
    })
</script>
@endpush