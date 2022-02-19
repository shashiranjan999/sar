@extends('layouts.dashboardlayout')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="list-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Subject List</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="add-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Subject</a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card" style="min-height: 485px">
                    <div class="card-header card-header-text">
                        <h4 class="card-title">Subject List</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Subjects as $Subject)
                                <tr>
                                    <td>{{ $Subject->id }}</td>
                                    <td>{{ $Subject->name }}</td>
                                    <td><img height="75" width="100" src="{{ url('/storage/gallery/images/'.$Subject->subject_image) }}" alt="Card image cap"></td>
                                    <td>{{ $Subject->position }}</td>
                                    <td>{{ $Subject->status == 1 ? 'Active' : 'Invactive' }}</td>
                                    <td>
                                        <a href="{{ url('/subject\\' . $Subject->id . '/edit') }}" class="btn btn-outline-primary btn-sm float-left mr-3">Edit</a>
                                        <form id="delete-frm" action="{{ url('/subject/delete/' . $Subject->id) }}" method="POST">

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

                        <form action="{{url('Add-subject')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Subject Name</h6>
                                        <input type="text" class="form-control" id="subject" name="subject_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Subject Image</h6>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose New Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <h6>Position</h6>
                                        <input type="number" class="form-control" id="position" name="position" min="0">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <h6>Status</h6>
                                    <label class="switch">
                                        <input type="checkbox" value="1" checked name="status">
                                        <span class="slider round"></span>
                                    </label>
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
        $('.custom-file-input').on('change',function(){
        var fileName = $(this).val();
        var myArray = fileName.split("\\");
            var arrlen=myArray.length;
           
        if(myArray[arrlen-1] != ""){
        $(this).next('.custom-file-label').html(myArray[arrlen-1]);
        }else{
        $(this).next('.custom-file-label').html('Choose File');
        }            
        })
        </script>
@endpush