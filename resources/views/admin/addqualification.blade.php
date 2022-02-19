@extends('layouts.dashboardlayout')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="list-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Qualification List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="add-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Qualification</a>
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
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($qualifications as $qualification)
                                <tr>
                                    <td>{{ $qualification->id }}</td>
                                    <td>{{ $qualification->qualifications }}</td>
                                    <td>{{ $qualification->position }}</td>
                                    <td>{{ $qualification->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ url('/qualification\\' . $qualification->id . '/edit') }}" class="btn-sm btn btn-outline-primary float-left mr-3">Edit</a>
                                        <form id="delete-frm" action="{{ url('/qualification/delete/' . $qualification->id) }}" method="POST">

                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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

                        <form action="{{url('Add-qualification')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Qualification Name</h6>
                                        <input type="text" class="form-control" id="qualification" name="qualification">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Position</h6>
                                        <input type="number" class="form-control" id="position" name="position" min="0">
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