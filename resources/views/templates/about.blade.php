@extends('templates.base1')
@section('content')
 <!-- PAGE TITLE
    ================================================== -->
    <header class="py-8 py-md-12 overlay overlay-primary overlay-80" style="background-image: url({{asset('assets')}}/img/covers/cover-19.jpg);">
        <div class="container text-center py-xl-5">
            <h1 class="display-4 fw-semi-bold mb-0 text-white">About Us v2</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        About Us v2
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>



    <!-- ABOUT V2
    ================================================== -->
    <div class="container pb-4 pb-xl-7">
        <div class="text-center mb-md-6 mb-4 pt-8 pt-md-11">
            <h1 class="mb-3">Top Students / Teachers</h1>
            <p class="font-size-lg mb-5 text-capitalize">Discover your perfect program in our courses.</p>
        </div>

        <!-- GALLERY
        ================================================== -->
        <div class="mb-8">
            <div class="row row-cols-md-3">
                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-31.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="{{asset('assets')}}/img/photos/photo-31.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-32.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="{{asset('assets')}}/img/photos/photo-32.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-33.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="{{asset('assets')}}/img/photos/photo-33.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-34.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="{{asset('assets')}}/img/photos/photo-34.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-35.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="{{asset('assets')}}/img/photos/photo-35.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md mb-6">
                    <!-- Image -->
                    <a class="d-block position-relative" href="assets/img/photos/photo-36.jpg" data-fancybox data-width="1110" data-height="810">
                        <img src="{{asset('assets')}}/img/photos/photo-36.jpg" class="w-100 rounded" alt="...">

                        <div class="center position-absolute hover-visible">
                            <div class="mb-4 text-white">
                                <!-- Icon -->
                                <svg width="30" height="30" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3272 10.8975H20.6028V16.5998H14.8105V19.4059H20.6028V25.1982H23.3272V19.4059H29.1113V16.5998H23.3272V10.8975Z" fill="currentColor"></path>
                                    <path d="M21.9604 0C11.9957 0 3.91267 8.07486 3.91267 18.0478C3.91267 22.4411 5.48346 26.4662 8.09327 29.5996L0.509281 37.11C-0.16976 37.789 -0.16976 38.8117 0.509281 39.4907C1.18832 40.1698 2.21097 40.1698 2.89001 39.4907L10.4413 31.9395C13.5665 34.5329 17.5753 36.0873 21.9522 36.0873C31.917 36.0873 40 28.0125 40 18.0396C40 8.06668 31.9251 0 21.9604 0ZM21.9604 32.7739C13.8283 32.7739 7.23424 26.1799 7.23424 18.0478C7.23424 9.91563 13.8283 3.32157 21.9604 3.32157C30.0926 3.32157 36.6866 9.91563 36.6866 18.0478C36.6866 26.1799 30.0926 32.7739 21.9604 32.7739Z" fill="currentColor"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- COUNTUP
        ================================================== -->
        <div class="pb-8 bg-white">
            <div class="row text-center">
                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="749" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Students Enrolled</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="853" data-aos data-aos-id="countup:in"></span></div>
                    <p class="font-size-lg fw-medium mb-0">Skilled Tutors</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="28" data-aos="" data-aos-id="countup:in"></span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">Online Courses</p>
                </div>

                <div class="col-md-3 mb-6 mb-md-0">
                    <div class="h1 mb-1"><span data-toggle="countup" data-from="0" data-to="53" data-aos="" data-aos-id="countup:in"></span>k+</div>
                    <p class="font-size-lg fw-medium mb-0">People Worldwide</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ICON BLOCKS
    ================================================== -->
    <section class="py-5 pt-md-11 pb-md-10 bg-light text-center">
        <div class="container">
            <div class="mb-md-8 mb-4">
                <h1>Why Study With SAR</h1>
                <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #F8C994;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #f5debc; color: #EE8E00;">
                            <!-- Icon -->
                            <svg width="50" height="42" viewBox="0 0 50 42" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.7772 24.0457L34.8852 20.873C33.9687 20.3794 32.8878 20.4035 31.9939 20.9373C31.1 21.4711 30.5664 22.4115 30.5664 23.4525V30.7043C30.5664 31.7975 31.168 32.7919 32.1364 33.2993C32.5655 33.5241 33.0321 33.6353 33.4971 33.6353C34.0813 33.6353 34.6631 33.4595 35.1637 33.113L41.0558 29.0338C41.9005 28.4491 42.3706 27.4876 42.3133 26.4618C42.2561 25.436 41.6817 24.5328 40.7772 24.0457ZM33.4961 30.7037V23.4526L39.3879 26.6254L33.4961 30.7037Z" fill="currentColor"/>
                                <path d="M17.1875 19.5352H7.8125C7.00352 19.5352 6.34766 20.191 6.34766 21C6.34766 21.809 7.00352 22.4648 7.8125 22.4648H17.1875C17.9965 22.4648 18.6523 21.809 18.6523 21C18.6523 20.191 17.9965 19.5352 17.1875 19.5352Z" fill="currentColor"/>
                                <path d="M17.1875 25.7852H7.8125C7.00352 25.7852 6.34766 26.441 6.34766 27.25C6.34766 28.059 7.00352 28.7148 7.8125 28.7148H17.1875C17.9965 28.7148 18.6523 28.059 18.6523 27.25C18.6523 26.441 17.9965 25.7852 17.1875 25.7852Z" fill="currentColor"/>
                                <path d="M17.1875 32.0352H7.8125C7.00352 32.0352 6.34766 32.691 6.34766 33.5C6.34766 34.309 7.00352 34.9648 7.8125 34.9648H17.1875C17.9965 34.9648 18.6523 34.309 18.6523 33.5C18.6523 32.691 17.9965 32.0352 17.1875 32.0352Z" fill="currentColor"/>
                                <path d="M45.6055 0.00390625H4.39453C1.97139 0.00390625 0 1.97529 0 4.39844V37.6016C0 40.0247 1.97139 41.9961 4.39453 41.9961H45.6055C48.0286 41.9961 50 40.0247 50 37.6016V4.39844C50 1.97529 48.0286 0.00390625 45.6055 0.00390625ZM4.39453 2.93359H45.6055C46.4132 2.93359 47.0703 3.59072 47.0703 4.39844V12.5039H2.92969V4.39844C2.92969 3.59072 3.58682 2.93359 4.39453 2.93359ZM45.6055 39.0664H4.39453C3.58682 39.0664 2.92969 38.4093 2.92969 37.6016V15.4336H47.0703V37.6016C47.0703 38.4093 46.4132 39.0664 45.6055 39.0664Z" fill="currentColor"/>
                                <path d="M7.8125 9.18359C8.62151 9.18359 9.27734 8.52776 9.27734 7.71875C9.27734 6.90974 8.62151 6.25391 7.8125 6.25391C7.00349 6.25391 6.34766 6.90974 6.34766 7.71875C6.34766 8.52776 7.00349 9.18359 7.8125 9.18359Z" fill="currentColor"/>
                                <path d="M14.0625 9.18372C14.8715 9.18372 15.5273 8.52788 15.5273 7.71887C15.5273 6.90986 14.8715 6.25403 14.0625 6.25403C13.2535 6.25403 12.5977 6.90986 12.5977 7.71887C12.5977 8.52788 13.2535 9.18372 14.0625 9.18372Z" fill="currentColor"/>
                                <path d="M20.3125 9.18359C21.1215 9.18359 21.7773 8.52776 21.7773 7.71875C21.7773 6.90974 21.1215 6.25391 20.3125 6.25391C19.5035 6.25391 18.8477 6.90974 18.8477 7.71875C18.8477 8.52776 19.5035 9.18359 20.3125 9.18359Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn Anything</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B7B3F8;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #d3d8f8; color: #5066F5;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.6777 7.32231C37.9558 2.60048 31.6777 0 25 0C18.3223 0 12.0442 2.60048 7.32231 7.32231C2.60038 12.0441 0 18.3223 0 25C0 31.6777 2.60048 37.9558 7.32231 42.6777C12.0441 47.3996 18.3223 50 25 50C31.6777 50 37.9558 47.3995 42.6777 42.6777C47.3996 37.9559 50 31.6777 50 25C50 18.3223 47.3995 12.0442 42.6777 7.32231ZM41.6253 39.5856L40.2162 38.1764C39.4842 37.4445 39.3028 36.3304 39.7647 35.404L41.0257 32.875C42.2388 30.4418 42.88 27.7188 42.88 25C42.88 22.2812 42.2388 19.5581 41.0257 17.125L39.7647 14.596C39.3028 13.6696 39.4842 12.5555 40.2162 11.8236L41.6253 10.4144C45.1758 14.4502 47.1154 19.5763 47.1154 25C47.1154 30.4237 45.1758 35.5498 41.6253 39.5856ZM12.8168 34.1168L11.5559 31.5878C9.49914 27.4627 9.49914 22.5372 11.5559 18.4121L12.8168 15.8831C13.2154 15.0838 13.3953 14.2209 13.3707 13.3701C13.4213 13.3715 13.4719 13.3738 13.5227 13.3738C14.3238 13.3738 15.1315 13.1914 15.8832 12.8167L18.4122 11.5558C22.5373 9.49894 27.4628 9.49904 31.5879 11.5558L34.1169 12.8167C34.9161 13.2152 35.7788 13.395 36.6293 13.3705C36.6048 14.2212 36.7847 15.0838 37.1832 15.883L38.4441 18.412C40.5009 22.5371 40.5009 27.4626 38.4441 31.5877L37.1832 34.1167C36.7847 34.916 36.6048 35.7786 36.6293 36.6291C35.7788 36.6046 34.9161 36.7845 34.1169 37.183L31.5879 38.4439C27.4627 40.5007 22.5372 40.5006 18.4122 38.4439L15.8832 37.183C15.0839 36.7845 14.2213 36.6046 13.3708 36.6291C13.3952 35.7788 13.2153 34.9161 12.8168 34.1168ZM25 2.88462C30.4237 2.88462 35.5498 4.82423 39.5856 8.37471L38.1764 9.78385C37.4446 10.5157 36.3305 10.6973 35.404 10.2353L32.875 8.97433C30.4418 7.76125 27.7188 7.12 25 7.12C22.2812 7.12 19.5581 7.76125 17.125 8.97433L14.596 10.2353C13.6695 10.6972 12.5556 10.5158 11.8236 9.78385L10.4144 8.37471C14.4502 4.82423 19.5763 2.88462 25 2.88462ZM8.37471 10.4144L9.78385 11.8236C10.5158 12.5555 10.6972 13.6696 10.2353 14.596L8.97433 17.125C7.76125 19.5582 7.12 22.2812 7.12 25C7.12 27.7188 7.76125 30.4419 8.97433 32.875L10.2353 35.404C10.6972 36.3304 10.5158 37.4445 9.78385 38.1764L8.37471 39.5856C4.82423 35.5498 2.88462 30.4237 2.88462 25C2.88462 19.5763 4.82423 14.4502 8.37471 10.4144ZM25 47.1154C19.5763 47.1154 14.4502 45.1758 10.4144 41.6253L11.8236 40.2162C12.5555 39.4844 13.6696 39.3028 14.596 39.7647L17.125 41.0257C19.5582 42.2388 22.2812 42.88 25 42.88C27.7188 42.88 30.4419 42.2388 32.875 41.0257L35.404 39.7647C36.3305 39.3029 37.4445 39.4842 38.1764 40.2162L39.5856 41.6253C35.5498 45.1758 30.4237 47.1154 25 47.1154Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Flexible Learning</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="p-5 d-inline-block rounded-circle mb-6" style="border: 1px solid #B2F4DC;">
                        <div class="icon-circle icon-circle-lg" style="background-color: #b2f4dc; color: #00C27C;">
                            <!-- Icon -->
                            <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.7188 39.7461C36.7188 40.5552 36.063 41.2109 35.2539 41.2109C34.4448 41.2109 33.7891 40.5552 33.7891 39.7461C33.7891 38.937 34.4448 38.2812 35.2539 38.2812C36.063 38.2812 36.7188 38.937 36.7188 39.7461Z" fill="currentColor"/>
                                <path d="M29.3945 17.7734H31.1108C33.3912 17.7734 35.5354 18.6615 37.1479 20.274C37.429 20.5555 37.8056 20.7031 38.184 20.7031C38.5735 20.7031 38.9503 20.5433 39.2193 20.274C40.1783 19.315 41.3261 18.6146 42.5781 18.2026V22.168C42.5781 22.9771 43.2339 23.6328 44.043 23.6328C44.8521 23.6328 45.5078 22.9771 45.5078 22.168V17.7734H46.9727C47.7818 17.7734 48.4375 17.1177 48.4375 16.3086V1.46484C48.4375 0.655746 47.7818 0 46.9727 0H45.2564C42.659 0 40.1939 0.857925 38.1836 2.4395C36.1732 0.857925 33.7082 0 31.1108 0H29.3945C28.5854 0 27.9297 0.655746 27.9297 1.46484V16.3086C27.9297 17.1177 28.5854 17.7734 29.3945 17.7734ZM45.5078 2.92969V14.8438H45.2564C43.2205 14.8438 41.3033 15.3725 39.6484 16.3033V5.03235C41.2033 3.67355 43.1721 2.92969 45.2564 2.92969H45.5078ZM30.8594 2.92969H31.1108C33.1944 2.92969 35.1643 3.67126 36.7188 5.0293V16.3029C35.025 15.3503 33.107 14.8438 31.1108 14.8438H30.8594V2.92969Z" fill="currentColor"/>
                                <path d="M3.02734 50H46.9727C47.7818 50 48.4375 49.3443 48.4375 48.5352V33.8867C48.4375 33.0776 47.7818 32.4219 46.9727 32.4219H33.6418C32.9613 29.0829 30.0018 26.5625 26.4648 26.5625H22.0703V25.0675C23.896 23.6919 25 21.5286 25 19.2383V16.6222C25 12.8906 22.3755 9.64966 18.895 9.08356C14.397 8.3519 10.3516 11.7859 10.3516 16.3086V19.2383C10.3516 21.5286 11.4555 23.6919 13.2812 25.0675V26.5625H8.88672C4.8481 26.5625 1.5625 29.8481 1.5625 33.8867V48.5352C1.5625 49.3443 2.21825 50 3.02734 50ZM45.5078 47.0703H25V35.3516H45.5078V47.0703ZM13.2812 16.3086C13.2812 13.6845 15.6109 11.5177 18.4246 11.9755C20.5029 12.3135 22.0703 14.3112 22.0703 16.6222V19.2383C22.0703 20.8031 21.2471 22.2164 19.8685 23.019C19.418 23.2811 19.1406 23.7633 19.1406 24.2851V27.4204L17.6758 28.8853L16.2109 27.4204V24.2851C16.2109 23.7637 15.9336 23.2811 15.4831 23.019C14.1045 22.2164 13.2812 20.8031 13.2812 19.2383V16.3086ZM4.49219 33.8867C4.49219 31.4636 6.46362 29.4922 8.88672 29.4922H14.1392L16.6401 31.9927C16.9258 32.2788 17.3008 32.4219 17.6758 32.4219C18.0508 32.4219 18.4258 32.2788 18.7115 31.9927L21.2124 29.4922H26.4648C28.3745 29.4922 30.0026 30.7167 30.6076 32.4219H23.5352C22.7261 32.4219 22.0703 33.0776 22.0703 33.8867V42.6796C20.8454 41.758 19.3233 41.2109 17.6758 41.2109H10.3516V33.8867C10.3516 33.0776 9.69582 32.4219 8.88672 32.4219C8.07762 32.4219 7.42188 33.0776 7.42188 33.8867V42.6758C7.42188 43.4849 8.07762 44.1406 8.88672 44.1406H17.6758C19.5858 44.1406 21.2147 45.3652 21.8193 47.0703H4.49219V33.8867Z" fill="currentColor"/>
                            </svg>

                        </div>
                    </div>

                    <h4 class="mb-1">Learn With Experts</h4>
                    <p class="px-lg-7 px-xl-8">Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL
    ================================================== -->
    <section class="pt-5 pt-md-11 pb-9">
        <div class="container">
            <div class="text-center mb-2" data-aos="fade-up">
                <h1>What our students have to say</h1>
                <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="50" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and SAR is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="100" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Alison Dawn</h5>
                                    <span>WordPress Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and SAR is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="150" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Daniel Parker</h5>
                                    <span>Front-end Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and SAR is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="200" style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and SAR is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL ACTION
    ================================================== -->
    <section class="py-6 py-md-11 border-top" data-jarallax data-speed=".8" style="background-image: url(assets/img/illustrations/illustration-1.jpg)">
        <div class="container text-center py-xl-4">
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <h1 class="text-capitalize">Subscribe our newsletter</h1>
                    <p class="text-capitalize font-size-lg mb-md-6 mb-4">Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                    <div class="mx-md-8">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm-wide" type="button" id="button-addon2">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
