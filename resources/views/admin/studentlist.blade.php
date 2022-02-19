@extends('layouts.dashboardlayout')

@section('content')
<div class="row ">
    <div class="col-lg-12 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Students List</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-primary">
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Father Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->father_name}}</td>
                            <td>{{$student->mobile}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->state}}</td>
                            <td>{{$student->city}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $students->links() !!}
        </div>
    </div>


</div>
@endsection
