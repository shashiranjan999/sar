@extends('layouts.dashboardlayout')
@section('content')
{{-- <div class="row">
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
</div>
</div>
</div>
</div> --}}
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text" style="display: flex;
                    justify-content: space-between;
                    align-items: center;">
                <h4 class="card-title">Pages List</h4>
                <a href="{{url('create')}}" class="btn btn-success">Create Page</a>
            </div>
            {{-- {{dd(request()->query())}} --}}
            <div class="card-content table-responsive">
                <table class="table table-hover text-center">
                    <thead class="text-primary">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $index => $page)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->status ? 'Active' : 'Inactive'}}</td>
                            <td>
                                <div class="row justify-content-center">
                                    {{-- /city/{{ $city->id }}/edit --}}
                                    <a href="{{url('/pages\\'.$page->id.'/edit')}}" class="btn mx-2 btn-outline-primary  btn-sm">Edit</a>
                                    <form id="delete-frm" action="{{url('/pages\\'.$page->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                @if($page->status==1)
                                <a target="_blank" href="{{url('/pages\\'.$page->slug)}}" class="btn btn-outline-primary btn-sm">View Page</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">

        </div>
    </div>


</div>
@endsection

@push('custom_scripts')
<script>

</script>
@endpush