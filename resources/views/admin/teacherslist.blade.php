@extends('layouts.dashboardlayout')

@section('content')
<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Teachers List</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-primary">
                        <tr>
                            <th>ID</th>
                            <th>Teacher Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>District</th>
                            <th>City</th>
                            <th>View Details</th>
                            <th>Enable/Disable</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->first_name}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->state}}</td>
                            <td>{{$teacher->district}}</td>
                            <td>{{$teacher->city}}</td>
                            <td>
                                <a href="{{url('/teacher\\'.$teacher->id.'/detail')}}" class="btn btn-outline-primary float-left mr-3">View Details</a>
                            </td>
                            <td>
                                <div class="form-group mb-3">
                                    <label class="switch">
                                        <input id="teacherStatus" type="checkbox" value="1" name="status" {{$teacher->status ? 'checked' : ''}}>
                                        <span class="slider round" onclick="changeStatus({{$teacher->id}})"></span>
                                    </label>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $teachers->links() !!}
        </div>
    </div>


</div>
@endsection

@push('custom_scripts')
<script src="{{ asset('js/teacherstatusupdate.js') }}"></script>
@endpush