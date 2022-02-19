@extends('layouts.dashboardlayout')

@section('content')
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

                <form action="{{ url('testimonial') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Image</h6>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Name</h6>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Designation</h6>
                                <input type="text" class="form-control" id="designation" name="designation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Description</h6>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Position</h6>
                                <input type="number" class="form-control" id="position" name="position" min="0">
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

<div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            @foreach($testimonial as $testmln)
            <div class="col-md-4">
                <div class="card rounded shadow-sm">
                    <img class="card-img-top" src="{{ url('/storage/gallery/images/'.$testmln->testimonial_image) }}" alt="Card image cap">
                    <div class="card-body">
                    <p><strong>Name: </strong>{{$testmln->name}}</p>
                    <p><strong>Designation: </strong>{{$testmln->designation}}</p>
                    <p><strong>Description: </strong>{{$testmln->description}}</p>
                        <p><strong>Status : </strong>{{ $testmln->status == 1 ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Position: </strong>{{$testmln->position}}</p>
                        <div class="row justify-content-between px-3">
                            <a href="{{ url('/testimonial\\' . $testmln->id . '/edit') }}" class="btn  btn-sm btn-outline-primary">Edit</a>
                            <form id="delete-frm" action="{{ url('/testimonial/delete/' . $testmln->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
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