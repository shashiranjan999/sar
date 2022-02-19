@extends('layouts.dashboardlayout')

@section('content')
<h2>Welcome To Shiksha Mr. {{ auth()->user()->name }}</h2>
@endsection