@extends('layouts.dashboardlayout')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">Edit Testimonial</div>
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
                <div class="card col-md-4" id="old-image-card">
                    <img class="card-img-top" src="{{ url('/storage/gallery/images/'.$testimonial->testimonial_image) }}" alt="Card image cap">
                    <div class="card-body">
                        <button id="change-image" class="btn btn-outline-primary btn-sm" onclick="remove()">Remove and upload new image</button>
                    </div>

                </div>

                <form action="{{url('/testimonial\\'.$testimonial->id.'/edit')}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    
                    <div class="form-group mb-3" id="new-image" style="display:none">
                    <div class="custom-file">
                        <input type="hidden" value="{{$testimonial->testimonial_image}}" name="oldimage">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose New Image</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Name</h6>
                                <input type="text" class="form-control" id="name" name="name" value="{{$testimonial->name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Designation</h6>
                                <input type="text" class="form-control" id="designation" name="designation" value="{{$testimonial->designation}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <h6>Testimonial Description</h6>
                                <input type="text" class="form-control" id="description" name="description" value="{{$testimonial->description}}">
                            </div>
                        </div>
                    <div class="form-group mb-3">
                        <label for="name">Position</label>
                        <input type="number" class="form-control" id="position" name="position" min="0" value="{{$testimonial->position}}">
                    </div>
                    <div class="form-group mb-3">

                        <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$testimonial->status ? 'checked' : ''}}>
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
<script src="{{ asset('js/imageupdate.js') }}"></script>
<script>
        $('.custom-file-input').on('change',function(){
            $(this).next('.custom-file-label').html('test');
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