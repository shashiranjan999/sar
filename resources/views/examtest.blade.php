@extends('teacher.base') @section('content')
<style>
    .choices__inner {
    display: flex;
    align-items: center;
    vertical-align: top;
    width: 100%;
    padding: 0.1rem 0.7rem;
    border: 1px solid #d2d6da;
    border-radius: 0.5rem;
    font-size: 14px;
    min-height: 20px;
    overflow: hidden;
}
    </style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12 col-12 mx-auto">
            <form action="{{route('ratings_save')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
            <div class="card card-body mt-4">
                <h6 class="mb-0">New MCQ Test</h6>
                <p class="text-sm mb-0">Create new MCQ Test</p>
                <button class="btn btn-sm w-20 btn-soft bg-gradient-primary" style="position: absolute; right: 15px;">Import</button>
                <hr class="horizontal dark my-3">
                <div class="row">   
                    {{-- <div class="col-md-4 col-12">
                <label for="projectName" class="form-label">MCQ Question</label>
                <input type="text" name="mcq" class="form-control" id="projectName">
                    </div> --}}
                    <div class="col-md-3 col-12">
                <label class="form-label">Teacher</label>
                <select class="form-control py-0 " name="teacher" id="Course" multiple>
                @foreach($teacher as $tch)
                    <option value="{{$tch->ID}}">{{$tch->first_name}} {{$tch->last_name}}</option>
                @endforeach
            </select>
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label">Rating</label>
                        <input class="form-control" name="rating" type="text" placeholder="Please enter Tiem Durations" data-input>
                    </div>
                    <div class="col-3">
                        <label class="form-label">Reviews</label>
                        <input type="text" class="form-control" name="reviews" id="">
                    </div>
                    <div class="col-3">
                        <label class="form-label">Student</label>
                        <input type="text" class="form-control" name="student" id="">
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Create Project</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
<script src="{{asset('admin')}}/js/plugins/choices.min.js"></script>
<script>
    if (document.getElementById('Course')) {
        var element = document.getElementById('Course');
        const example = new Choices(element, {
            removeItemButton: true
        });
    }
</script>
@endsection