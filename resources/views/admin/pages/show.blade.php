@extends('templates.base1')
@section('content')
    <!-- PAGE TITLE
        ================================================== -->
    <header class="py-8 py-md-11 d-none" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">{{ ucfirst($page->title) }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Pages
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        {{ ucfirst($page->title) }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>

    <!-- ICON BLOCKS
        ================================================== -->
    <section class="py-5 pt-md-11 pb-md-12 bg-white-ice text-center">
        <div class="p-3">
            {!! $page->body !!}
        </div>
    </section>
    <!-- CALL ACTION
        ================================================== -->
    <section class="py-6 py-md-12 jarallax" data-jarallax data-speed=".8"
        style="background-image: url({{ asset('assets') }}/img/illustrations/illustration-5.jpg)">
        <div class="container text-center py-xl-7 text-capitalize" data-aos="fade-up">
            <h1>Limitless learning, more possibilities</h1>
            <div class="font-size-lg mb-md-6 mb-4">Answer a few questions for your top picks</div>
            <div class="mx-auto">
                <a href="course-single-v5.html" class="btn btn-dark btn-x-wide lift d-inline-block rounded-xl">GET STARTED
                    NOW</a>
            </div>
        </div>
    </section>
@endsection
