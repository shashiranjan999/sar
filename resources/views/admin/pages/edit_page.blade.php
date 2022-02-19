@extends('layouts.dashboardlayout')
@push('custom-css')


@endpush
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

                    <form action="{{ url('pages/'.$page->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Page Type</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$page->title}}">
                        </div>
                        <div class="form-group mb-3">

                        <h6>Status</h6>
                        <label class="switch">
                            <!-- <input type="checkbox" value="1" checked name="status"> -->
                            <input type="checkbox" value="1" name="status" {{$page->status ? 'checked' : ''}}>
                            <span class="slider round"></span>
                        </label>
                    </div>
                        <div class="form-group mb-3">
                            <label for="name">Page Body</label>
                            <textarea class="form-control" id="page_body" name="body" rows="20">
                                {{$page->body}}
                            </textarea>
                        </div>
                        {{-- <div class="form-group mb-3">
                            <h6>Status</h6>
                            <label class="switch">
                                <input type="checkbox" value="1" checked name="status">
                                <span class="slider round"></span>
                            </label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
 
    <script>
    window.onload = function() {
       CKEDITOR.replace('page_body');
    };
    </script>
@endpush
