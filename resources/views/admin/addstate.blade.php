@extends('layouts.dashboardlayout')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="list-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">State List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="add-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add State</a>
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($states as $state)
                                <tr>
                                    <td>{{ $state->id }}</td>
                                    <td>{{ $state->name }}</td>
                                    <td>{{ $state->status == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ url('/state\\' . $state->id . '/edit') }}" class="btn btn-outline-primary float-left btn-sm mr-3">Edit</a>
                                        <form id="delete-frm" action="{{ url('/state/delete/' . $state->id) }}" method="POST">

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
                    {!! $states->links() !!}
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

                        <form action="{{url('Add-state')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <h6>State Name</h6>
                                        <input type="text" class="form-control" id="state" name="state_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
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