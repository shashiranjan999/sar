@extends('templates.base',['subject' => $subjects])
@section('content')
<!-- HERO
    ================================================== -->
<section class="py-15 pt-xl-14 mt-n14 pb-lg-15 bg-cover bg-theme-1 position-relative">
    <!-- Cursor position parallax -->
    <div class="position-absolute right-0 left-0 top-0 bottom-0">
        <div class="cs-parallax">
            <div class="cs-parallax-layer" data-depth="0.1">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-01.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.3">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-02.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.2">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-03.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.2">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-04.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.4">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-05.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.3">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-06.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.2">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-07.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.2">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-08.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.4">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-09.svg')}}" alt="Layer">
            </div>
            <div class="cs-parallax-layer" data-depth="0.3">
                <img class="img-fluid" src="{{asset('assets/img/parallax/layer-10.svg')}}" alt="Layer">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2" data-aos="fade-in">

                <!-- Image -->
                <img src="{{asset('assets/img/illustrations/Illustration1.png')}}" class="img-fluid ms-xl-5 mw-md-100 mw-lg-100 mb-6 mb-md-0" alt="...">

            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1">
                <!-- Heading -->
                <h1 class="display-2 text-white mb-6" data-aos="fade-left" data-aos-duration="150">
                    More Than 48.259 <span class="display-1 text-orange fw-bold">Online Courses</span>
                </h1>

                <!-- Form -->
                <form class="mb-6 me-xl-9" data-aos="fade-up" data-aos-duration="200">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-right-0 text-primary icon-xs rounded-left-xl">
                                <!-- Icon -->
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor" />
                                    <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor" />
                                </svg>

                            </span>
                        </div>
                        <input type="search" class="form-control ps-2 border-left-0 rounded-right-xl border-0" placeholder="Search for a job">
                    </div>
                </form>

                <!-- Text -->
                <p class="text-white text-capitalize" data-aos="fade-up" data-aos-duration="200">
                    Trending Search: Development, Business, Design, Merketing
                </p>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <!-- Shape -->
    <div class="shape shape-blur mb-n-1 shape-bottom shape-fluid-x svg-shim text-white-ice">
        <svg viewBox="0 0 1920 230" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M0,229l1920,0V-0.4c0,25.8-19.6,47.3-45.2,49.8L54.8,223.8C25.4,226.6,0,203.5,0,174V229z" />
        </svg>

    </div>
</section>

<!-- ICON BLOCKS
    ================================================== -->
<section class="py-5 pt-md-11 pb-md-12 bg-white-ice text-center">
    <div class="container">
        <div class="mb-md-8 mb-4">
            <h1 class="mb-1 text-theme-1">Why Study With SAR</h1>
            <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
        </div>

        <div class="row row-cols-md-3">
            <div class="col-md mb-4 mb-md-0">
                <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                    <div class="icon-circle icon-circle-lg" style="color: #00C27C;">
                        <!-- Icon -->
                        <img src="{{asset('assets/img/illustrations/icon-1.png')}}" class="w-75">
                    </div>
                </div>

                <h4 class="text-theme-1">Learn Anything</h4>
                <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
            </div>

            <div class="col-md mb-4 mb-md-0">
                <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                    <div class="icon-circle icon-circle-lg" style="color: #00C27C;">
                        <!-- Icon -->
                        <img src="{{asset('assets/img/illustrations/icon-2.png')}}" class="w-75">
                    </div>
                </div>

                <h4 class="text-theme-1">Flexible Learning</h4>
                <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
            </div>

            <div class="col-md mb-4 mb-md-0">
                <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                    <div class="icon-circle icon-circle-lg" style="color: #00C27C;">
                        <!-- Icon -->
                        <img src="{{asset('assets/img/illustrations/icon-3.png')}}" class="w-75">
                    </div>
                </div>

                <h4 class="text-theme-1">Learn With Experts</h4>
                <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED PRODUCT
    ================================================== -->
<section class="pt-5 pb-9 py-md-11 bg-white">
    <div class="container">
        <div class="text-center mb-5 mb-md-8">
            <h1 class="mb-1 text-theme-1">Our Subjects</h1>
            <p class="font-size-lg text-capitalize">Discover your perfect program in our courses</p>
        </div>

        <div class="row mb-2">
            <div class="" data-flickity='{"pageDots": false, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                @for($i=0;$i<=4;$i++) <div class="col-md-4 mx-3 pb-4 pb-md-7">
                    <!-- Featured Card -->
                    <div class="card border rounded-xl shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <img class="w-100 rounded shadow-light-lg" src="{{ url('/storage/gallery/images/'.$subjects[$i]->subject_image) }}" alt="{{$subjects[$i]->name}} Image">
                            <!-- <a href="course-single-v5.html" class="card-img sk-thumbnail d-block"></a> -->
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <!-- Heading -->
                            <div class="position-relative">
                                <h4 class="line-clamp-2 me-md-6 me-lg-10 me-xl-4 mb-2 text-theme-1">{{$subjects[$i]->name}}</h4>
                                <!-- <a href="course-single-v5.html" class="d-block stretched-link"></a> -->
                                <!-- <p class="mb-0">Specilalized in Biological Science</p>
                            <p>07 yrs of Experience</p>
                            <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                    <div class="rating" style="width:50%;"></div>
                                </div>

                                <div class="font-size-sm">
                                    <span>5.45 (5.8k+ reviews)</span>
                                </div>
                            </div> -->
                            </div>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>

<!-- CALL ACTION
    ================================================== -->
<section class="py-6 py-md-12 jarallax" data-jarallax data-speed=".8" style="background-image: url({{asset('assets')}}/img/illustrations/illustration-5.jpg)">
    <div class="container text-center py-xl-7 text-capitalize" data-aos="fade-up">
        <h1 class="text-theme-1">Limitless learning, more possibilities</h1>
        <div class="font-size-lg mb-md-6 mb-4">Answer a few questions for your top picks</div>
        <div class="mx-auto">
            <a href="course-single-v5.html" class="btn btn-dark bg-theme-1 btn-x-wide lift d-inline-block rounded-xl">GET STARTED NOW</a>
        </div>
    </div>
</section>

<!-- TESTIMONIAL
    ================================================== -->
<section class="py-8 py-md-11 pb-xl-12 bg-white">
    <div class="container-fluid px-xl-9">
        <div class="text-center mb-2" data-aos="fade-up">
            <h1 class="mb-1 text-theme-1">What Our Students Have To Say</h1>
            <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
        </div>

        <div class="mx-n4 bg-is-selected" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "center", "wrapAround": true, "imagesLoaded": true}'>
            @foreach($testimonials as $testimonial)
            <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="200">
                <!-- Card -->
                <div class="card text-center p-8 py-lg-8 px-lg-9 w-lg-96 mx-auto rounded-xl lift-md">
                    <!-- Image -->
                    <div class="position-relative">
                        <div class="card-float top-0 left-0">
                            <!-- Icon -->
                            <svg width="36" height="23" viewBox="0 0 36 23" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 23L15.5 -4.76837e-06H10L2.98023e-08 23H9.5ZM29.5 23L35.5 -4.76837e-06H30L20 23H29.5Z" fill="currentColor" />
                            </svg>

                        </div>

                        <div class="avatar avatar-custom mb-5">
                            <img src="{{ url('/storage/gallery/images/'.$testimonial->testimonial_image) }}" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="media-body">
                            <h5 class="mb-0">{{$testimonial->name}}</h5>
                            <span>{{$testimonial->designation}}</span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-0 pb-0 pt-4">
                        <p class="mb-0 text-capitalize">“ {{$testimonial->description}} “</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FEATURED PRODUCT V2
    ================================================== -->
<section class="pt-5 pb-9 pt-md-11 bg-dark bg-cover jarallax d-none" data-jarallax data-speed=".8" style="background-image: url({{asset('assets')}}/img/illustrations/illustration-3.svg)">
    <div class="container">
        <div class="text-center mb-5 mb-md-8">
            <h1 class="text-white mb-1">Popular Course</h1>
            <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
        </div>

        <div class="mx-n4 flickity-button-outset" data-flickity='{"pageDots": false, "prevNextButtons": true, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
            <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                <!-- Card -->
                <div class="card border rounded-xl shadow p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                            <a href="course-single-v5.html" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z" fill="currentColor" />
                                    <path d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z" fill="currentColor" />
                                </svg>

                            </a>
                            <a href="course-single-v5.html" class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                <!-- Icon -->
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z" fill="currentColor" />
                                </svg>

                            </a>
                        </div>

                        <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="{{asset('assets')}}/img/products/product-1.jpg" alt="...">
                        </a>

                        <span class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                            <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <a href="instructors-single.html" class="d-block">
                            <div class="avatar sk-fade-right avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                <img src="{{asset('assets')}}/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>

                        <!-- Preheading -->
                        <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="course-single-v5.html" class="d-block stretched-link">
                                <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion Photography From Professional</h4>
                            </a>

                            <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                    <div class="rating" style="width:50%;"></div>
                                </div>

                                <div class="font-size-sm">
                                    <span>5.45 (5.8k+ reviews)</span>
                                </div>
                            </div>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">5 lessons</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor" />
                                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8h 12m</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    <del class="font-size-sm">$959</del>
                                    <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                <!-- Card -->
                <div class="card border rounded-xl shadow p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="{{asset('assets')}}/img/products/product-2.jpg" alt="...">
                        </a>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <a href="instructors-single.html" class="">
                            <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                <img src="{{asset('assets')}}/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>

                        <!-- Preheading -->
                        <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Development</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="course-single-v5.html" class="d-block stretched-link">
                                <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete JavaScript Course 2020: Build Real Projects!</h4>
                            </a>

                            <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                    <div class="rating" style="width:50%;"></div>
                                </div>

                                <div class="font-size-sm">
                                    <span>5.45 (5.8k+ reviews)</span>
                                </div>
                            </div>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">5 lessons</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor" />
                                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8h 12m</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    <del class="font-size-sm">$959</del>
                                    <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                <!-- Card -->
                <div class="card border rounded-xl shadow p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="{{asset('assets')}}/img/products/product-3.jpg" alt="...">
                        </a>

                        <span class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                            <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                        </span>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <a href="instructors-single.html" class="">
                            <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                <img src="{{asset('assets')}}/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>

                        <!-- Preheading -->
                        <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="course-single-v5.html" class="d-block stretched-link">
                                <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma: User Interface Design Essentials - UI/UX Design</h4>
                            </a>

                            <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                    <div class="rating" style="width:50%;"></div>
                                </div>

                                <div class="font-size-sm">
                                    <span>5.45 (5.8k+ reviews)</span>
                                </div>
                            </div>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">5 lessons</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor" />
                                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8h 12m</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    <del class="font-size-sm">$959</del>
                                    <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" style="padding-right:15px;padding-left:15px;">
                <!-- Card -->
                <div class="card border rounded-xl shadow p-2 sk-fade">
                    <!-- Image -->
                    <div class="card-zoom position-relative">
                        <a href="course-single-v5.html" class="card-img sk-thumbnail d-block">
                            <img class="rounded shadow-light-lg" src="{{asset('assets')}}/img/products/product-4.jpg" alt="...">
                        </a>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                        <a href="instructors-single.html" class="">
                            <div class="avatar avatar-xl sk-fade-right badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                <img src="{{asset('assets')}}/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>

                        <!-- Preheading -->
                        <a href="course-single-v5.html"><span class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                        <!-- Heading -->
                        <div class="position-relative">
                            <a href="course-single-v5.html" class="d-block stretched-link">
                                <h4 class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete Financial Analyst Course 2020</h4>
                            </a>

                            <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                    <div class="rating" style="width:50%;"></div>
                                </div>

                                <div class="font-size-sm">
                                    <span>5.45 (5.8k+ reviews)</span>
                                </div>
                            </div>

                            <div class="row mx-n2 align-items-end">
                                <div class="col px-2">
                                    <ul class="nav mx-n3">
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">5 lessons</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex icon-uxs text-secondary">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor" />
                                                        <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor" />
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8h 12m</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto px-2 text-right">
                                    <del class="font-size-sm">$959</del>
                                    <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APP FEATURES
    ================================================== -->
<section class="py-6 pt-md-11 pb-md-12 bg-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-lg-7 col-xl-6 mx-auto">
                <h1 class="mb-7 text-capitalize">We are driven to deliver results for all your businesses.</h1>
                <div class="d-md-flex justify-content-between mx-1">
                    <a href="#apple_link" class="btn p-0 lift mb-4 mb-md-0">
                        <svg width="250" height="80" viewBox="0 0 250 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="250" height="80" rx="15" fill="#E85901" />
                            <path d="M99.12 23.2V33H100.31V23.2H99.12ZM102.06 33C102.779 33 103.437 32.8833 104.034 32.65C104.631 32.4167 105.145 32.0853 105.574 31.656C106.013 31.2173 106.353 30.6993 106.596 30.102C106.839 29.4953 106.96 28.828 106.96 28.1C106.96 27.372 106.839 26.7093 106.596 26.112C106.353 25.5053 106.013 24.9873 105.574 24.558C105.145 24.1193 104.631 23.7833 104.034 23.55C103.437 23.3167 102.779 23.2 102.06 23.2H99.778V24.39H102.06C102.611 24.39 103.115 24.4787 103.572 24.656C104.029 24.824 104.421 25.0713 104.748 25.398C105.075 25.7153 105.327 26.1027 105.504 26.56C105.681 27.0173 105.77 27.5307 105.77 28.1C105.77 28.6693 105.681 29.1827 105.504 29.64C105.327 30.0973 105.075 30.4893 104.748 30.816C104.421 31.1333 104.029 31.3807 103.572 31.558C103.115 31.726 102.611 31.81 102.06 31.81H99.778V33H102.06ZM108.006 29.78C108.006 30.424 108.15 31.0027 108.44 31.516C108.738 32.02 109.14 32.4167 109.644 32.706C110.148 32.9953 110.712 33.14 111.338 33.14C111.972 33.14 112.537 32.9953 113.032 32.706C113.536 32.4167 113.932 32.02 114.222 31.516C114.52 31.0027 114.67 30.424 114.67 29.78C114.67 29.1267 114.52 28.548 114.222 28.044C113.932 27.54 113.536 27.1433 113.032 26.854C112.537 26.5647 111.972 26.42 111.338 26.42C110.712 26.42 110.148 26.5647 109.644 26.854C109.14 27.1433 108.738 27.54 108.44 28.044C108.15 28.548 108.006 29.1267 108.006 29.78ZM109.14 29.78C109.14 29.332 109.233 28.9353 109.42 28.59C109.616 28.2353 109.877 27.96 110.204 27.764C110.54 27.568 110.918 27.47 111.338 27.47C111.758 27.47 112.131 27.568 112.458 27.764C112.794 27.96 113.055 28.2353 113.242 28.59C113.438 28.9353 113.536 29.332 113.536 29.78C113.536 30.228 113.438 30.6247 113.242 30.97C113.055 31.3153 112.794 31.5907 112.458 31.796C112.131 31.992 111.758 32.09 111.338 32.09C110.918 32.09 110.54 31.992 110.204 31.796C109.877 31.5907 109.616 31.3153 109.42 30.97C109.233 30.6247 109.14 30.228 109.14 29.78ZM115.023 26.56L117.823 33.49L119.657 28.8L121.603 33.49L124.403 26.56H123.143L121.519 30.774L119.643 26.07L117.893 30.746L116.283 26.56H115.023ZM129.649 29.08V33H130.769V28.94C130.769 28.4173 130.675 27.9693 130.489 27.596C130.311 27.2227 130.059 26.9333 129.733 26.728C129.406 26.5227 129.014 26.42 128.557 26.42C128.137 26.42 127.763 26.5133 127.437 26.7C127.119 26.8867 126.853 27.176 126.639 27.568V26.56H125.519V33H126.639V29.08C126.639 28.7627 126.704 28.4827 126.835 28.24C126.975 27.9973 127.166 27.8107 127.409 27.68C127.661 27.54 127.95 27.47 128.277 27.47C128.575 27.47 128.827 27.5307 129.033 27.652C129.238 27.7733 129.392 27.9553 129.495 28.198C129.597 28.4313 129.649 28.7253 129.649 29.08ZM132.874 22.08V33H133.994V22.08H132.874ZM135.541 29.78C135.541 30.424 135.685 31.0027 135.975 31.516C136.273 32.02 136.675 32.4167 137.179 32.706C137.683 32.9953 138.247 33.14 138.873 33.14C139.507 33.14 140.072 32.9953 140.567 32.706C141.071 32.4167 141.467 32.02 141.757 31.516C142.055 31.0027 142.205 30.424 142.205 29.78C142.205 29.1267 142.055 28.548 141.757 28.044C141.467 27.54 141.071 27.1433 140.567 26.854C140.072 26.5647 139.507 26.42 138.873 26.42C138.247 26.42 137.683 26.5647 137.179 26.854C136.675 27.1433 136.273 27.54 135.975 28.044C135.685 28.548 135.541 29.1267 135.541 29.78ZM136.675 29.78C136.675 29.332 136.768 28.9353 136.955 28.59C137.151 28.2353 137.412 27.96 137.739 27.764C138.075 27.568 138.453 27.47 138.873 27.47C139.293 27.47 139.666 27.568 139.993 27.764C140.329 27.96 140.59 28.2353 140.777 28.59C140.973 28.9353 141.071 29.332 141.071 29.78C141.071 30.228 140.973 30.6247 140.777 30.97C140.59 31.3153 140.329 31.5907 139.993 31.796C139.666 31.992 139.293 32.09 138.873 32.09C138.453 32.09 138.075 31.992 137.739 31.796C137.412 31.5907 137.151 31.3153 136.955 30.97C136.768 30.6247 136.675 30.228 136.675 29.78ZM144.247 31.012C144.247 30.7787 144.303 30.578 144.415 30.41C144.527 30.242 144.695 30.1113 144.919 30.018C145.153 29.9247 145.451 29.878 145.815 29.878C146.207 29.878 146.576 29.9293 146.921 30.032C147.267 30.1253 147.603 30.284 147.929 30.508V29.85C147.864 29.766 147.738 29.6587 147.551 29.528C147.365 29.388 147.113 29.2667 146.795 29.164C146.487 29.052 146.1 28.996 145.633 28.996C145.111 28.996 144.658 29.0847 144.275 29.262C143.902 29.43 143.613 29.668 143.407 29.976C143.211 30.284 143.113 30.648 143.113 31.068C143.113 31.5067 143.216 31.88 143.421 32.188C143.627 32.496 143.897 32.734 144.233 32.902C144.579 33.0607 144.947 33.14 145.339 33.14C145.694 33.14 146.049 33.0747 146.403 32.944C146.767 32.8133 147.071 32.6127 147.313 32.342C147.565 32.0713 147.691 31.7307 147.691 31.32L147.467 30.48C147.467 30.816 147.383 31.1147 147.215 31.376C147.057 31.628 146.837 31.824 146.557 31.964C146.287 32.104 145.979 32.174 145.633 32.174C145.363 32.174 145.12 32.132 144.905 32.048C144.7 31.9547 144.537 31.8193 144.415 31.642C144.303 31.4647 144.247 31.2547 144.247 31.012ZM144.079 28.044C144.182 27.9693 144.322 27.8807 144.499 27.778C144.677 27.6753 144.891 27.5867 145.143 27.512C145.405 27.4373 145.694 27.4 146.011 27.4C146.207 27.4 146.394 27.4187 146.571 27.456C146.749 27.4933 146.903 27.554 147.033 27.638C147.173 27.722 147.281 27.8387 147.355 27.988C147.43 28.128 147.467 28.31 147.467 28.534V33H148.587V28.38C148.587 27.96 148.48 27.6053 148.265 27.316C148.06 27.0267 147.766 26.8073 147.383 26.658C147.01 26.4993 146.571 26.42 146.067 26.42C145.47 26.42 144.957 26.5087 144.527 26.686C144.107 26.8633 143.776 27.0407 143.533 27.218L144.079 28.044ZM155.314 22.08V33H156.434V22.08H155.314ZM149.924 29.78C149.924 30.4707 150.068 31.068 150.358 31.572C150.647 32.076 151.034 32.4633 151.52 32.734C152.005 33.0047 152.537 33.14 153.116 33.14C153.517 33.14 153.881 33.0653 154.208 32.916C154.544 32.7573 154.828 32.5333 155.062 32.244C155.304 31.9547 155.491 31.6047 155.622 31.194C155.752 30.774 155.818 30.3027 155.818 29.78C155.818 29.2573 155.752 28.7907 155.622 28.38C155.491 27.96 155.304 27.6053 155.062 27.316C154.828 27.0267 154.544 26.8073 154.208 26.658C153.881 26.4993 153.517 26.42 153.116 26.42C152.537 26.42 152.005 26.5553 151.52 26.826C151.034 27.0967 150.647 27.484 150.358 27.988C150.068 28.4827 149.924 29.08 149.924 29.78ZM151.058 29.78C151.058 29.2853 151.156 28.8653 151.352 28.52C151.557 28.1747 151.828 27.9133 152.164 27.736C152.5 27.5587 152.864 27.47 153.256 27.47C153.498 27.47 153.741 27.5213 153.984 27.624C154.226 27.7267 154.446 27.876 154.642 28.072C154.847 28.268 155.01 28.5107 155.132 28.8C155.253 29.08 155.314 29.4067 155.314 29.78C155.314 30.1533 155.253 30.4847 155.132 30.774C155.01 31.054 154.847 31.292 154.642 31.488C154.446 31.684 154.226 31.8333 153.984 31.936C153.741 32.0387 153.498 32.09 153.256 32.09C152.864 32.09 152.5 32.0013 152.164 31.824C151.828 31.6467 151.557 31.3853 151.352 31.04C151.156 30.6947 151.058 30.2747 151.058 29.78ZM162.105 29.78C162.105 30.424 162.25 31.0027 162.539 31.516C162.838 32.02 163.239 32.4167 163.743 32.706C164.247 32.9953 164.812 33.14 165.437 33.14C166.072 33.14 166.637 32.9953 167.131 32.706C167.635 32.4167 168.032 32.02 168.321 31.516C168.62 31.0027 168.769 30.424 168.769 29.78C168.769 29.1267 168.62 28.548 168.321 28.044C168.032 27.54 167.635 27.1433 167.131 26.854C166.637 26.5647 166.072 26.42 165.437 26.42C164.812 26.42 164.247 26.5647 163.743 26.854C163.239 27.1433 162.838 27.54 162.539 28.044C162.25 28.548 162.105 29.1267 162.105 29.78ZM163.239 29.78C163.239 29.332 163.333 28.9353 163.519 28.59C163.715 28.2353 163.977 27.96 164.303 27.764C164.639 27.568 165.017 27.47 165.437 27.47C165.857 27.47 166.231 27.568 166.557 27.764C166.893 27.96 167.155 28.2353 167.341 28.59C167.537 28.9353 167.635 29.332 167.635 29.78C167.635 30.228 167.537 30.6247 167.341 30.97C167.155 31.3153 166.893 31.5907 166.557 31.796C166.231 31.992 165.857 32.09 165.437 32.09C165.017 32.09 164.639 31.992 164.303 31.796C163.977 31.5907 163.715 31.3153 163.519 30.97C163.333 30.6247 163.239 30.228 163.239 29.78ZM174.438 29.08V33H175.558V28.94C175.558 28.4173 175.464 27.9693 175.278 27.596C175.1 27.2227 174.848 26.9333 174.522 26.728C174.195 26.5227 173.803 26.42 173.346 26.42C172.926 26.42 172.552 26.5133 172.226 26.7C171.908 26.8867 171.642 27.176 171.428 27.568V26.56H170.308V33H171.428V29.08C171.428 28.7627 171.493 28.4827 171.624 28.24C171.764 27.9973 171.955 27.8107 172.198 27.68C172.45 27.54 172.739 27.47 173.066 27.47C173.364 27.47 173.616 27.5307 173.822 27.652C174.027 27.7733 174.181 27.9553 174.284 28.198C174.386 28.4313 174.438 28.7253 174.438 29.08ZM180.881 26.56V27.61H184.101V26.56H180.881ZM181.931 24.32V33H183.051V24.32H181.931ZM186.344 22.08H185.224V33H186.344V22.08ZM189.354 29.08V33H190.474V28.94C190.474 28.38 190.38 27.9133 190.194 27.54C190.016 27.1667 189.76 26.8867 189.424 26.7C189.097 26.5133 188.71 26.42 188.262 26.42C187.814 26.42 187.417 26.5367 187.072 26.77C186.736 27.0033 186.47 27.3207 186.274 27.722C186.078 28.114 185.98 28.5667 185.98 29.08H186.344C186.344 28.772 186.409 28.4967 186.54 28.254C186.68 28.0113 186.871 27.82 187.114 27.68C187.366 27.54 187.655 27.47 187.982 27.47C188.29 27.47 188.542 27.5307 188.738 27.652C188.943 27.7733 189.097 27.9553 189.2 28.198C189.302 28.4313 189.354 28.7253 189.354 29.08ZM195.071 33.14C195.762 33.14 196.359 33.0047 196.863 32.734C197.377 32.454 197.801 32.0433 198.137 31.502L197.227 30.928C196.994 31.32 196.709 31.614 196.373 31.81C196.037 31.9967 195.65 32.09 195.211 32.09C194.773 32.09 194.399 31.9967 194.091 31.81C193.783 31.6233 193.55 31.3527 193.391 30.998C193.233 30.6433 193.153 30.214 193.153 29.71C193.153 29.346 193.2 29.0193 193.293 28.73C193.387 28.4407 193.522 28.198 193.699 28.002C193.877 27.806 194.091 27.6567 194.343 27.554C194.605 27.4513 194.894 27.4 195.211 27.4C195.575 27.4 195.893 27.4793 196.163 27.638C196.434 27.7967 196.644 28.016 196.793 28.296C196.952 28.576 197.031 28.9073 197.031 29.29C197.031 29.3553 197.017 29.4393 196.989 29.542C196.961 29.6353 196.933 29.7053 196.905 29.752L197.353 29.108H192.733V30.06H198.235C198.235 30.0413 198.235 29.9993 198.235 29.934C198.245 29.8593 198.249 29.7893 198.249 29.724C198.249 29.0427 198.128 28.4547 197.885 27.96C197.643 27.4653 197.293 27.0873 196.835 26.826C196.387 26.5553 195.846 26.42 195.211 26.42C194.735 26.42 194.301 26.504 193.909 26.672C193.517 26.8307 193.181 27.0593 192.901 27.358C192.621 27.6473 192.402 27.9973 192.243 28.408C192.094 28.8187 192.019 29.276 192.019 29.78C192.019 30.4427 192.145 31.026 192.397 31.53C192.659 32.034 193.018 32.4307 193.475 32.72C193.942 33 194.474 33.14 195.071 33.14Z" fill="white" />
                            <path d="M81.9805 47.9392C80.4989 47.4872 79.168 46.4325 78.0128 44.7751C76.8577 43.1177 76.2801 41.2344 76.2801 39.1752C76.2801 37.2667 76.8326 35.534 77.9124 33.9771C78.5151 33.0982 79.4693 32.1189 80.7751 31.0139C79.9213 29.9593 79.0424 29.1055 78.1635 28.5028C76.6066 27.423 74.8237 26.8705 72.8147 26.8705C71.5843 26.8705 70.1278 27.1719 68.4704 27.7243C66.8131 28.3019 65.6077 28.5781 64.8795 28.5781C64.3019 28.5781 63.1468 28.327 61.4141 27.8248C59.6562 27.3225 58.1998 27.0714 56.9693 27.0714C54.0815 27.0714 51.721 28.2768 49.8376 30.6875C47.9542 33.1233 47 36.2372 47 40.0792C47 44.1975 48.2556 48.3912 50.6914 52.7104C53.1775 57.0296 55.6635 59.2143 58.25 59.2143C59.0787 59.2143 60.1836 58.9381 61.5647 58.3605C62.9208 57.808 64.1261 57.5318 65.1306 57.5318C66.1602 57.5318 67.4408 57.7829 68.9224 58.3354C70.4291 58.8627 71.5843 59.139 72.4381 59.139C74.5725 59.139 76.7321 57.5067 78.8917 54.2171C80.3482 52.0324 81.3527 49.923 81.9805 47.9392ZM72.5385 18.4833C72.5385 18.3075 72.5134 18.1568 72.5134 17.981C72.4883 17.8304 72.4381 17.6546 72.3878 17.4286C69.4749 18.1066 67.3655 19.3371 66.1099 21.1451C64.8544 22.9531 64.2015 25.1127 64.1512 27.5988C65.3315 27.4983 66.1853 27.3477 66.7628 27.1719C67.6669 26.8705 68.5709 26.2679 69.4749 25.3638C70.5296 24.3092 71.308 23.154 71.8103 21.8984C72.2874 20.668 72.5385 19.5128 72.5385 18.4833Z" fill="white" />
                            <path d="M101.24 53.4H108.64L108.18 51.4H101.7L101.24 53.4ZM104.9 46.96L107.12 52.16L107.18 52.74L109.08 57H111.74L104.9 42.22L98.06 57H100.72L102.66 52.62L102.7 52.1L104.9 46.96ZM115.289 61.4V47.8H113.109V61.4H115.289ZM122.909 52.4C122.909 51.3733 122.702 50.5 122.289 49.78C121.875 49.06 121.329 48.5133 120.649 48.14C119.969 47.7533 119.229 47.56 118.429 47.56C117.842 47.56 117.309 47.6733 116.829 47.9C116.362 48.1267 115.955 48.4533 115.609 48.88C115.275 49.2933 115.015 49.8 114.829 50.4C114.655 50.9867 114.569 51.6533 114.569 52.4C114.569 53.1467 114.655 53.82 114.829 54.42C115.015 55.0067 115.275 55.5133 115.609 55.94C115.955 56.3533 116.362 56.6733 116.829 56.9C117.309 57.1267 117.842 57.24 118.429 57.24C119.229 57.24 119.969 57.0533 120.649 56.68C121.329 56.2933 121.875 55.74 122.289 55.02C122.702 54.3 122.909 53.4267 122.909 52.4ZM120.669 52.4C120.669 53.0133 120.542 53.5333 120.289 53.96C120.035 54.3867 119.702 54.7133 119.289 54.94C118.875 55.1667 118.415 55.28 117.909 55.28C117.602 55.28 117.289 55.22 116.969 55.1C116.662 54.9667 116.382 54.78 116.129 54.54C115.875 54.3 115.669 54 115.509 53.64C115.362 53.28 115.289 52.8667 115.289 52.4C115.289 51.9333 115.362 51.52 115.509 51.16C115.669 50.8 115.875 50.5 116.129 50.26C116.382 50.02 116.662 49.84 116.969 49.72C117.289 49.5867 117.602 49.52 117.909 49.52C118.415 49.52 118.875 49.6333 119.289 49.86C119.702 50.0867 120.035 50.4133 120.289 50.84C120.542 51.2667 120.669 51.7867 120.669 52.4ZM127.046 61.4V47.8H124.866V61.4H127.046ZM134.666 52.4C134.666 51.3733 134.46 50.5 134.046 49.78C133.633 49.06 133.086 48.5133 132.406 48.14C131.726 47.7533 130.986 47.56 130.186 47.56C129.6 47.56 129.066 47.6733 128.586 47.9C128.12 48.1267 127.713 48.4533 127.366 48.88C127.033 49.2933 126.773 49.8 126.586 50.4C126.413 50.9867 126.326 51.6533 126.326 52.4C126.326 53.1467 126.413 53.82 126.586 54.42C126.773 55.0067 127.033 55.5133 127.366 55.94C127.713 56.3533 128.12 56.6733 128.586 56.9C129.066 57.1267 129.6 57.24 130.186 57.24C130.986 57.24 131.726 57.0533 132.406 56.68C133.086 56.2933 133.633 55.74 134.046 55.02C134.46 54.3 134.666 53.4267 134.666 52.4ZM132.426 52.4C132.426 53.0133 132.3 53.5333 132.046 53.96C131.793 54.3867 131.46 54.7133 131.046 54.94C130.633 55.1667 130.173 55.28 129.666 55.28C129.36 55.28 129.046 55.22 128.726 55.1C128.42 54.9667 128.14 54.78 127.886 54.54C127.633 54.3 127.426 54 127.266 53.64C127.12 53.28 127.046 52.8667 127.046 52.4C127.046 51.9333 127.12 51.52 127.266 51.16C127.426 50.8 127.633 50.5 127.886 50.26C128.14 50.02 128.42 49.84 128.726 49.72C129.046 49.5867 129.36 49.52 129.666 49.52C130.173 49.52 130.633 49.6333 131.046 49.86C131.46 50.0867 131.793 50.4133 132.046 50.84C132.3 51.2667 132.426 51.7867 132.426 52.4ZM136.704 41.4V57H138.864V41.4H136.704ZM145.626 57.2C146.693 57.2 147.606 56.9933 148.366 56.58C149.139 56.1533 149.766 55.5267 150.246 54.7L148.366 53.96C148.073 54.4533 147.706 54.82 147.266 55.06C146.826 55.3 146.313 55.42 145.726 55.42C145.166 55.42 144.693 55.3 144.306 55.06C143.919 54.8067 143.626 54.4533 143.426 54C143.226 53.5333 143.126 52.9733 143.126 52.32C143.126 51.8133 143.186 51.3733 143.306 51C143.426 50.6133 143.593 50.2933 143.806 50.04C144.033 49.7733 144.299 49.5733 144.606 49.44C144.926 49.3067 145.293 49.24 145.706 49.24C146.159 49.24 146.553 49.34 146.886 49.54C147.233 49.74 147.499 50.02 147.686 50.38C147.886 50.74 147.986 51.1667 147.986 51.66C147.986 51.7533 147.959 51.8667 147.906 52C147.866 52.1333 147.819 52.24 147.766 52.32L148.446 51.4H142.206V52.9H150.306C150.306 52.8467 150.306 52.7667 150.306 52.66C150.319 52.54 150.326 52.42 150.326 52.3C150.326 51.3133 150.139 50.4733 149.766 49.78C149.406 49.0733 148.886 48.5333 148.206 48.16C147.526 47.7867 146.699 47.6 145.726 47.6C144.993 47.6 144.333 47.7133 143.746 47.94C143.159 48.1667 142.653 48.4933 142.226 48.92C141.813 49.3333 141.493 49.84 141.266 50.44C141.039 51.0267 140.926 51.68 140.926 52.4C140.926 53.36 141.119 54.2 141.506 54.92C141.893 55.64 142.439 56.2 143.146 56.6C143.853 57 144.679 57.2 145.626 57.2ZM159.484 52.48L157.724 53.72C158.031 54.3733 158.444 54.9733 158.964 55.52C159.497 56.0533 160.111 56.4867 160.804 56.82C161.511 57.14 162.271 57.3 163.084 57.3C163.684 57.3 164.257 57.2 164.804 57C165.364 56.8133 165.864 56.54 166.304 56.18C166.744 55.82 167.091 55.3867 167.344 54.88C167.611 54.36 167.744 53.7733 167.744 53.12C167.744 52.5067 167.637 51.9733 167.424 51.52C167.224 51.0533 166.944 50.6533 166.584 50.32C166.237 49.9867 165.857 49.7067 165.444 49.48C165.031 49.2533 164.611 49.0667 164.184 48.92C163.624 48.72 163.137 48.5267 162.724 48.34C162.324 48.1533 161.997 47.96 161.744 47.76C161.491 47.56 161.304 47.3467 161.184 47.12C161.064 46.8933 161.004 46.64 161.004 46.36C161.004 46.0933 161.071 45.8467 161.204 45.62C161.337 45.3933 161.544 45.2133 161.824 45.08C162.117 44.9333 162.477 44.86 162.904 44.86C163.384 44.86 163.797 44.9533 164.144 45.14C164.491 45.3267 164.791 45.5667 165.044 45.86C165.311 46.1533 165.537 46.4733 165.724 46.82L167.644 45.74C167.404 45.2467 167.071 44.7733 166.644 44.32C166.231 43.8667 165.717 43.4933 165.104 43.2C164.491 42.9067 163.771 42.76 162.944 42.76C162.104 42.76 161.351 42.92 160.684 43.24C160.031 43.5467 159.511 43.9867 159.124 44.56C158.737 45.12 158.544 45.7733 158.544 46.52C158.544 47.1733 158.671 47.7333 158.924 48.2C159.177 48.6667 159.497 49.06 159.884 49.38C160.271 49.6867 160.677 49.94 161.104 50.14C161.531 50.34 161.917 50.5 162.264 50.62C162.851 50.8333 163.364 51.0533 163.804 51.28C164.257 51.4933 164.611 51.76 164.864 52.08C165.117 52.3867 165.244 52.8 165.244 53.32C165.244 53.6933 165.151 54.02 164.964 54.3C164.791 54.58 164.544 54.8 164.224 54.96C163.904 55.1067 163.524 55.18 163.084 55.18C162.564 55.18 162.084 55.0667 161.644 54.84C161.217 54.6133 160.824 54.3 160.464 53.9C160.117 53.4867 159.791 53.0133 159.484 52.48ZM168.666 47.8V49.7H173.886V47.8H168.666ZM170.206 44.6V57H172.346V44.6H170.206ZM174.676 52.4C174.676 53.3333 174.889 54.1667 175.316 54.9C175.756 55.62 176.349 56.1867 177.096 56.6C177.856 57 178.703 57.2 179.636 57.2C180.583 57.2 181.429 57 182.176 56.6C182.923 56.1867 183.509 55.62 183.936 54.9C184.376 54.1667 184.596 53.3333 184.596 52.4C184.596 51.4533 184.376 50.62 183.936 49.9C183.509 49.18 182.923 48.62 182.176 48.22C181.429 47.8067 180.583 47.6 179.636 47.6C178.703 47.6 177.856 47.8067 177.096 48.22C176.349 48.62 175.756 49.18 175.316 49.9C174.889 50.62 174.676 51.4533 174.676 52.4ZM176.896 52.4C176.896 51.8267 177.016 51.3267 177.256 50.9C177.496 50.46 177.823 50.12 178.236 49.88C178.649 49.6267 179.116 49.5 179.636 49.5C180.156 49.5 180.623 49.6267 181.036 49.88C181.449 50.12 181.776 50.46 182.016 50.9C182.256 51.3267 182.376 51.8267 182.376 52.4C182.376 52.9733 182.256 53.48 182.016 53.92C181.776 54.3467 181.449 54.6867 181.036 54.94C180.623 55.18 180.156 55.3 179.636 55.3C179.116 55.3 178.649 55.18 178.236 54.94C177.823 54.6867 177.496 54.3467 177.256 53.92C177.016 53.48 176.896 52.9733 176.896 52.4ZM188.786 47.8H186.646V57H188.786V47.8ZM191.526 50.12L192.586 48.28C192.372 48.04 192.119 47.8667 191.826 47.76C191.532 47.6533 191.219 47.6 190.886 47.6C190.419 47.6 189.966 47.7667 189.526 48.1C189.099 48.4333 188.746 48.8867 188.466 49.46C188.199 50.02 188.066 50.6667 188.066 51.4L188.786 51.82C188.786 51.38 188.839 50.9933 188.946 50.66C189.052 50.3267 189.212 50.0733 189.426 49.9C189.652 49.7133 189.946 49.62 190.306 49.62C190.572 49.62 190.792 49.6667 190.966 49.76C191.139 49.84 191.326 49.96 191.526 50.12ZM197.755 57.2C198.822 57.2 199.735 56.9933 200.495 56.58C201.268 56.1533 201.895 55.5267 202.375 54.7L200.495 53.96C200.202 54.4533 199.835 54.82 199.395 55.06C198.955 55.3 198.442 55.42 197.855 55.42C197.295 55.42 196.822 55.3 196.435 55.06C196.048 54.8067 195.755 54.4533 195.555 54C195.355 53.5333 195.255 52.9733 195.255 52.32C195.255 51.8133 195.315 51.3733 195.435 51C195.555 50.6133 195.722 50.2933 195.935 50.04C196.162 49.7733 196.428 49.5733 196.735 49.44C197.055 49.3067 197.422 49.24 197.835 49.24C198.288 49.24 198.682 49.34 199.015 49.54C199.362 49.74 199.628 50.02 199.815 50.38C200.015 50.74 200.115 51.1667 200.115 51.66C200.115 51.7533 200.088 51.8667 200.035 52C199.995 52.1333 199.948 52.24 199.895 52.32L200.575 51.4H194.335V52.9H202.435C202.435 52.8467 202.435 52.7667 202.435 52.66C202.448 52.54 202.455 52.42 202.455 52.3C202.455 51.3133 202.268 50.4733 201.895 49.78C201.535 49.0733 201.015 48.5333 200.335 48.16C199.655 47.7867 198.828 47.6 197.855 47.6C197.122 47.6 196.462 47.7133 195.875 47.94C195.288 48.1667 194.782 48.4933 194.355 48.92C193.942 49.3333 193.622 49.84 193.395 50.44C193.168 51.0267 193.055 51.68 193.055 52.4C193.055 53.36 193.248 54.2 193.635 54.92C194.022 55.64 194.568 56.2 195.275 56.6C195.982 57 196.808 57.2 197.755 57.2Z" fill="white" />
                        </svg>

                    </a>

                    <a href="#android_link" class="btn p-0 lift">
                        <svg width="250" height="80" viewBox="0 0 250 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="250" height="80" rx="15" fill="#E85901" />
                            <path d="M102.67 29.15H105.932C105.848 29.5327 105.713 29.892 105.526 30.228C105.349 30.564 105.12 30.8627 104.84 31.124C104.56 31.3853 104.224 31.5907 103.832 31.74C103.449 31.88 103.015 31.95 102.53 31.95C102.017 31.95 101.531 31.8567 101.074 31.67C100.626 31.4833 100.234 31.222 99.898 30.886C99.562 30.5407 99.296 30.1347 99.1 29.668C98.9133 29.192 98.82 28.6693 98.82 28.1C98.82 27.5307 98.9133 27.0127 99.1 26.546C99.296 26.07 99.562 25.664 99.898 25.328C100.234 24.9827 100.626 24.7167 101.074 24.53C101.531 24.3433 102.017 24.25 102.53 24.25C103.277 24.25 103.925 24.3993 104.476 24.698C105.027 24.9873 105.456 25.3933 105.764 25.916L106.604 25.146C106.324 24.6887 105.979 24.306 105.568 23.998C105.167 23.69 104.709 23.4567 104.196 23.298C103.692 23.1393 103.137 23.06 102.53 23.06C101.821 23.06 101.163 23.186 100.556 23.438C99.9493 23.6807 99.422 24.0307 98.974 24.488C98.526 24.936 98.176 25.468 97.924 26.084C97.6813 26.7 97.56 27.372 97.56 28.1C97.56 28.828 97.6813 29.5 97.924 30.116C98.176 30.732 98.526 31.2687 98.974 31.726C99.422 32.174 99.9493 32.524 100.556 32.776C101.163 33.0187 101.821 33.14 102.53 33.14C103.277 33.14 103.939 33.0047 104.518 32.734C105.106 32.454 105.601 32.076 106.002 31.6C106.403 31.124 106.707 30.5827 106.912 29.976C107.117 29.36 107.22 28.7113 107.22 28.03H102.67V29.15ZM111.397 33.14C112.088 33.14 112.685 33.0047 113.189 32.734C113.703 32.454 114.127 32.0433 114.463 31.502L113.553 30.928C113.32 31.32 113.035 31.614 112.699 31.81C112.363 31.9967 111.976 32.09 111.537 32.09C111.099 32.09 110.725 31.9967 110.417 31.81C110.109 31.6233 109.876 31.3527 109.717 30.998C109.559 30.6433 109.479 30.214 109.479 29.71C109.479 29.346 109.526 29.0193 109.619 28.73C109.713 28.4407 109.848 28.198 110.025 28.002C110.203 27.806 110.417 27.6567 110.669 27.554C110.931 27.4513 111.22 27.4 111.537 27.4C111.901 27.4 112.219 27.4793 112.489 27.638C112.76 27.7967 112.97 28.016 113.119 28.296C113.278 28.576 113.357 28.9073 113.357 29.29C113.357 29.3553 113.343 29.4393 113.315 29.542C113.287 29.6353 113.259 29.7053 113.231 29.752L113.679 29.108H109.059V30.06H114.561C114.561 30.0413 114.561 29.9993 114.561 29.934C114.571 29.8593 114.575 29.7893 114.575 29.724C114.575 29.0427 114.454 28.4547 114.211 27.96C113.969 27.4653 113.619 27.0873 113.161 26.826C112.713 26.5553 112.172 26.42 111.537 26.42C111.061 26.42 110.627 26.504 110.235 26.672C109.843 26.8307 109.507 27.0593 109.227 27.358C108.947 27.6473 108.728 27.9973 108.569 28.408C108.42 28.8187 108.345 29.276 108.345 29.78C108.345 30.4427 108.471 31.026 108.723 31.53C108.985 32.034 109.344 32.4307 109.801 32.72C110.268 33 110.8 33.14 111.397 33.14ZM115.131 26.56V27.61H118.351V26.56H115.131ZM116.181 24.32V33H117.301V24.32H116.181ZM123.671 23.9C123.671 24.1053 123.746 24.2873 123.895 24.446C124.054 24.5953 124.236 24.67 124.441 24.67C124.656 24.67 124.838 24.5953 124.987 24.446C125.136 24.2873 125.211 24.1053 125.211 23.9C125.211 23.6853 125.136 23.5033 124.987 23.354C124.838 23.2047 124.656 23.13 124.441 23.13C124.236 23.13 124.054 23.2047 123.895 23.354C123.746 23.5033 123.671 23.6853 123.671 23.9ZM123.881 26.56V33H125.001V26.56H123.881ZM131.438 29.08V33H132.558V28.94C132.558 28.4173 132.464 27.9693 132.278 27.596C132.1 27.2227 131.848 26.9333 131.522 26.728C131.195 26.5227 130.803 26.42 130.346 26.42C129.926 26.42 129.552 26.5133 129.226 26.7C128.908 26.8867 128.642 27.176 128.428 27.568V26.56H127.308V33H128.428V29.08C128.428 28.7627 128.493 28.4827 128.624 28.24C128.764 27.9973 128.955 27.8107 129.198 27.68C129.45 27.54 129.739 27.47 130.066 27.47C130.364 27.47 130.616 27.5307 130.822 27.652C131.027 27.7733 131.181 27.9553 131.284 28.198C131.386 28.4313 131.438 28.7253 131.438 29.08ZM138.301 29.78C138.301 30.424 138.445 31.0027 138.735 31.516C139.033 32.02 139.435 32.4167 139.939 32.706C140.443 32.9953 141.007 33.14 141.633 33.14C142.267 33.14 142.832 32.9953 143.327 32.706C143.831 32.4167 144.227 32.02 144.517 31.516C144.815 31.0027 144.965 30.424 144.965 29.78C144.965 29.1267 144.815 28.548 144.517 28.044C144.227 27.54 143.831 27.1433 143.327 26.854C142.832 26.5647 142.267 26.42 141.633 26.42C141.007 26.42 140.443 26.5647 139.939 26.854C139.435 27.1433 139.033 27.54 138.735 28.044C138.445 28.548 138.301 29.1267 138.301 29.78ZM139.435 29.78C139.435 29.332 139.528 28.9353 139.715 28.59C139.911 28.2353 140.172 27.96 140.499 27.764C140.835 27.568 141.213 27.47 141.633 27.47C142.053 27.47 142.426 27.568 142.753 27.764C143.089 27.96 143.35 28.2353 143.537 28.59C143.733 28.9353 143.831 29.332 143.831 29.78C143.831 30.228 143.733 30.6247 143.537 30.97C143.35 31.3153 143.089 31.5907 142.753 31.796C142.426 31.992 142.053 32.09 141.633 32.09C141.213 32.09 140.835 31.992 140.499 31.796C140.172 31.5907 139.911 31.3153 139.715 30.97C139.528 30.6247 139.435 30.228 139.435 29.78ZM150.633 29.08V33H151.753V28.94C151.753 28.4173 151.66 27.9693 151.473 27.596C151.296 27.2227 151.044 26.9333 150.717 26.728C150.39 26.5227 149.998 26.42 149.541 26.42C149.121 26.42 148.748 26.5133 148.421 26.7C148.104 26.8867 147.838 27.176 147.623 27.568V26.56H146.503V33H147.623V29.08C147.623 28.7627 147.688 28.4827 147.819 28.24C147.959 27.9973 148.15 27.8107 148.393 27.68C148.645 27.54 148.934 27.47 149.261 27.47C149.56 27.47 149.812 27.5307 150.017 27.652C150.222 27.7733 150.376 27.9553 150.479 28.198C150.582 28.4313 150.633 28.7253 150.633 29.08Z" fill="white" />
                            <path d="M71.3906 40.2812L54.2031 23.0156L76.0781 35.5938L71.3906 40.2812ZM49.6719 22C48.526 22.5729 47.9531 23.4844 47.9531 24.7344V59.2656C47.9531 60.5156 48.526 61.4271 49.6719 62L69.75 42L49.6719 22ZM82.875 39.6562L78.2656 36.9219L73.1875 42L78.2656 47L82.9531 44.3438C83.6823 43.8229 84.0208 43.0417 83.9688 42C83.9688 40.9583 83.6042 40.1771 82.875 39.6562ZM54.2031 60.9844L76.0781 48.4062L71.3906 43.7188L54.2031 60.9844Z" fill="white" />
                            <path d="M105.22 51.68H109.52C109.4 52.16 109.22 52.6067 108.98 53.02C108.753 53.4333 108.453 53.8 108.08 54.12C107.72 54.4267 107.293 54.6667 106.8 54.84C106.307 55.0133 105.747 55.1 105.12 55.1C104.427 55.1 103.78 54.98 103.18 54.74C102.593 54.5 102.08 54.1533 101.64 53.7C101.2 53.2467 100.853 52.7067 100.6 52.08C100.36 51.4533 100.24 50.76 100.24 50C100.24 49.24 100.367 48.5467 100.62 47.92C100.873 47.2933 101.22 46.76 101.66 46.32C102.1 45.88 102.613 45.54 103.2 45.3C103.8 45.06 104.44 44.94 105.12 44.94C106.093 44.94 106.92 45.1467 107.6 45.56C108.293 45.96 108.833 46.4933 109.22 47.16L111.14 45.86C110.727 45.2067 110.227 44.6533 109.64 44.2C109.053 43.7333 108.38 43.38 107.62 43.14C106.873 42.8867 106.04 42.76 105.12 42.76C104.067 42.76 103.087 42.94 102.18 43.3C101.287 43.6467 100.507 44.14 99.84 44.78C99.1867 45.42 98.6733 46.1867 98.3 47.08C97.94 47.96 97.76 48.9333 97.76 50C97.76 51.0667 97.94 52.0467 98.3 52.94C98.66 53.8333 99.1667 54.6067 99.82 55.26C100.487 55.9133 101.267 56.42 102.16 56.78C103.053 57.1267 104.027 57.3 105.08 57.3C106.2 57.3 107.193 57.1 108.06 56.7C108.927 56.2867 109.653 55.7267 110.24 55.02C110.827 54.3133 111.267 53.5067 111.56 52.6C111.853 51.68 111.987 50.7067 111.96 49.68H105.22V51.68ZM113.481 52.4C113.481 53.3333 113.694 54.1667 114.121 54.9C114.561 55.62 115.154 56.1867 115.901 56.6C116.661 57 117.507 57.2 118.441 57.2C119.387 57.2 120.234 57 120.981 56.6C121.727 56.1867 122.314 55.62 122.741 54.9C123.181 54.1667 123.401 53.3333 123.401 52.4C123.401 51.4533 123.181 50.62 122.741 49.9C122.314 49.18 121.727 48.62 120.981 48.22C120.234 47.8067 119.387 47.6 118.441 47.6C117.507 47.6 116.661 47.8067 115.901 48.22C115.154 48.62 114.561 49.18 114.121 49.9C113.694 50.62 113.481 51.4533 113.481 52.4ZM115.701 52.4C115.701 51.8267 115.821 51.3267 116.061 50.9C116.301 50.46 116.627 50.12 117.041 49.88C117.454 49.6267 117.921 49.5 118.441 49.5C118.961 49.5 119.427 49.6267 119.841 49.88C120.254 50.12 120.581 50.46 120.821 50.9C121.061 51.3267 121.181 51.8267 121.181 52.4C121.181 52.9733 121.061 53.48 120.821 53.92C120.581 54.3467 120.254 54.6867 119.841 54.94C119.427 55.18 118.961 55.3 118.441 55.3C117.921 55.3 117.454 55.18 117.041 54.94C116.627 54.6867 116.301 54.3467 116.061 53.92C115.821 53.48 115.701 52.9733 115.701 52.4ZM124.75 52.4C124.75 53.3333 124.964 54.1667 125.39 54.9C125.83 55.62 126.424 56.1867 127.17 56.6C127.93 57 128.777 57.2 129.71 57.2C130.657 57.2 131.504 57 132.25 56.6C132.997 56.1867 133.584 55.62 134.01 54.9C134.45 54.1667 134.67 53.3333 134.67 52.4C134.67 51.4533 134.45 50.62 134.01 49.9C133.584 49.18 132.997 48.62 132.25 48.22C131.504 47.8067 130.657 47.6 129.71 47.6C128.777 47.6 127.93 47.8067 127.17 48.22C126.424 48.62 125.83 49.18 125.39 49.9C124.964 50.62 124.75 51.4533 124.75 52.4ZM126.97 52.4C126.97 51.8267 127.09 51.3267 127.33 50.9C127.57 50.46 127.897 50.12 128.31 49.88C128.724 49.6267 129.19 49.5 129.71 49.5C130.23 49.5 130.697 49.6267 131.11 49.88C131.524 50.12 131.85 50.46 132.09 50.9C132.33 51.3267 132.45 51.8267 132.45 52.4C132.45 52.9733 132.33 53.48 132.09 53.92C131.85 54.3467 131.524 54.6867 131.11 54.94C130.697 55.18 130.23 55.3 129.71 55.3C129.19 55.3 128.724 55.18 128.31 54.94C127.897 54.6867 127.57 54.3467 127.33 53.92C127.09 53.48 126.97 52.9733 126.97 52.4ZM136.2 57.62C136.227 58.42 136.427 59.12 136.8 59.72C137.187 60.3333 137.733 60.8133 138.44 61.16C139.147 61.5067 140 61.68 141 61.68C141.84 61.68 142.62 61.5067 143.34 61.16C144.06 60.8133 144.64 60.2733 145.08 59.54C145.533 58.82 145.76 57.9067 145.76 56.8V47.8H143.64V56.8C143.64 57.4933 143.507 58.06 143.24 58.5C142.987 58.94 142.653 59.2667 142.24 59.48C141.827 59.6933 141.393 59.8 140.94 59.8C140.42 59.8 139.967 59.7 139.58 59.5C139.207 59.3133 138.913 59.0533 138.7 58.72C138.487 58.4 138.373 58.0333 138.36 57.62H136.2ZM136.02 52.36C136.02 53.36 136.227 54.2133 136.64 54.92C137.053 55.6267 137.6 56.1667 138.28 56.54C138.96 56.9133 139.7 57.1 140.5 57.1C141.073 57.1 141.6 56.9933 142.08 56.78C142.56 56.5667 142.973 56.26 143.32 55.86C143.667 55.4467 143.933 54.9467 144.12 54.36C144.32 53.7733 144.42 53.1067 144.42 52.36C144.42 51.6133 144.32 50.9467 144.12 50.36C143.933 49.7733 143.667 49.2733 143.32 48.86C142.973 48.4467 142.56 48.1333 142.08 47.92C141.6 47.7067 141.073 47.6 140.5 47.6C139.7 47.6 138.96 47.7867 138.28 48.16C137.6 48.5333 137.053 49.0733 136.64 49.78C136.227 50.4867 136.02 51.3467 136.02 52.36ZM138.26 52.36C138.26 51.7467 138.387 51.2267 138.64 50.8C138.893 50.3733 139.227 50.0467 139.64 49.82C140.067 49.5933 140.527 49.48 141.02 49.48C141.327 49.48 141.633 49.5467 141.94 49.68C142.26 49.8 142.547 49.98 142.8 50.22C143.053 50.46 143.253 50.76 143.4 51.12C143.56 51.48 143.64 51.8933 143.64 52.36C143.64 52.8267 143.56 53.24 143.4 53.6C143.253 53.96 143.053 54.26 142.8 54.5C142.547 54.74 142.26 54.92 141.94 55.04C141.633 55.16 141.327 55.22 141.02 55.22C140.527 55.22 140.067 55.1133 139.64 54.9C139.227 54.6733 138.893 54.3467 138.64 53.92C138.387 53.4933 138.26 52.9733 138.26 52.36ZM148.439 41.4V57H150.599V41.4H148.439ZM157.36 57.2C158.427 57.2 159.34 56.9933 160.1 56.58C160.874 56.1533 161.5 55.5267 161.98 54.7L160.1 53.96C159.807 54.4533 159.44 54.82 159 55.06C158.56 55.3 158.047 55.42 157.46 55.42C156.9 55.42 156.427 55.3 156.04 55.06C155.654 54.8067 155.36 54.4533 155.16 54C154.96 53.5333 154.86 52.9733 154.86 52.32C154.86 51.8133 154.92 51.3733 155.04 51C155.16 50.6133 155.327 50.2933 155.54 50.04C155.767 49.7733 156.034 49.5733 156.34 49.44C156.66 49.3067 157.027 49.24 157.44 49.24C157.894 49.24 158.287 49.34 158.62 49.54C158.967 49.74 159.234 50.02 159.42 50.38C159.62 50.74 159.72 51.1667 159.72 51.66C159.72 51.7533 159.694 51.8667 159.64 52C159.6 52.1333 159.554 52.24 159.5 52.32L160.18 51.4H153.94V52.9H162.04C162.04 52.8467 162.04 52.7667 162.04 52.66C162.054 52.54 162.06 52.42 162.06 52.3C162.06 51.3133 161.874 50.4733 161.5 49.78C161.14 49.0733 160.62 48.5333 159.94 48.16C159.26 47.7867 158.434 47.6 157.46 47.6C156.727 47.6 156.067 47.7133 155.48 47.94C154.894 48.1667 154.387 48.4933 153.96 48.92C153.547 49.3333 153.227 49.84 153 50.44C152.774 51.0267 152.66 51.68 152.66 52.4C152.66 53.36 152.854 54.2 153.24 54.92C153.627 55.64 154.174 56.2 154.88 56.6C155.587 57 156.414 57.2 157.36 57.2ZM170.298 43V57H172.658V43H170.298ZM171.698 45.08H174.518C175.065 45.08 175.538 45.1667 175.938 45.34C176.338 45.5133 176.652 45.7667 176.878 46.1C177.105 46.4333 177.218 46.8533 177.218 47.36C177.218 47.8533 177.105 48.2733 176.878 48.62C176.652 48.9533 176.338 49.2067 175.938 49.38C175.538 49.54 175.065 49.62 174.518 49.62H171.698V51.7H174.518C175.545 51.7 176.432 51.5267 177.178 51.18C177.925 50.82 178.505 50.32 178.918 49.68C179.332 49.0267 179.538 48.2533 179.538 47.36C179.538 46.4667 179.332 45.6933 178.918 45.04C178.505 44.3867 177.925 43.8867 177.178 43.54C176.432 43.18 175.545 43 174.518 43H171.698V45.08ZM181.681 41.4V57H183.841V41.4H181.681ZM187.963 54.14C187.963 53.8467 188.029 53.6 188.163 53.4C188.296 53.2 188.503 53.0467 188.783 52.94C189.076 52.82 189.449 52.76 189.903 52.76C190.423 52.76 190.916 52.8267 191.383 52.96C191.849 53.0933 192.289 53.3067 192.703 53.6V52.5C192.583 52.3533 192.376 52.1933 192.083 52.02C191.789 51.8333 191.416 51.6733 190.963 51.54C190.523 51.4067 189.996 51.34 189.383 51.34C188.623 51.34 187.976 51.46 187.443 51.7C186.909 51.94 186.496 52.28 186.203 52.72C185.923 53.1467 185.783 53.66 185.783 54.26C185.783 54.8867 185.929 55.42 186.223 55.86C186.516 56.3 186.909 56.6333 187.403 56.86C187.896 57.0867 188.429 57.2 189.003 57.2C189.536 57.2 190.056 57.1067 190.563 56.92C191.083 56.72 191.509 56.4267 191.843 56.04C192.189 55.64 192.363 55.1467 192.363 54.56L192.043 53.36C192.043 53.8267 191.936 54.2267 191.723 54.56C191.509 54.8933 191.223 55.1467 190.863 55.32C190.503 55.4933 190.109 55.58 189.683 55.58C189.349 55.58 189.049 55.5267 188.783 55.42C188.529 55.3 188.329 55.1333 188.183 54.92C188.036 54.7067 187.963 54.4467 187.963 54.14ZM187.283 50.2C187.416 50.1067 187.616 49.9933 187.883 49.86C188.163 49.7267 188.489 49.6067 188.863 49.5C189.236 49.3933 189.643 49.34 190.083 49.34C190.363 49.34 190.623 49.3667 190.863 49.42C191.103 49.4733 191.309 49.56 191.483 49.68C191.669 49.8 191.809 49.96 191.903 50.16C191.996 50.3467 192.043 50.58 192.043 50.86V57H194.163V50.44C194.163 49.8267 193.996 49.3133 193.663 48.9C193.329 48.4733 192.869 48.1467 192.283 47.92C191.709 47.6933 191.043 47.58 190.283 47.58C189.429 47.58 188.676 47.7 188.023 47.94C187.369 48.18 186.829 48.4267 186.403 48.68L187.283 50.2ZM204.723 47.8H202.403L199.523 55.02L200.543 55.08L197.603 47.8H195.123L198.843 55.92L196.423 61.4H198.723L204.723 47.8Z" fill="white" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
