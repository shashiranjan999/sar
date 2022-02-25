<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>cms dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    @stack('custom-css')
</head>

<body>

    <div class="wrapper">
        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <h3 class="text-center"><img src="{{asset('assets/img/logo.png')}}" class="img-fluid" /><span>SAR</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#" class="dashboard"><img src="{{asset('assets/img/dashboard-black.png')}}" class="img-fluid mr-2" width="20px" /><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">person</i><span>Profile</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                    @role('teacher')
                        <li>
                            <a href="{{url('profile')}}">My Profile</a>
                        </li>
                        
                        @endrole
                        <li>
                            <a href="{{url('change-password')}}">Change Password</a>
                        </li>
                    </ul>
                </li>
                <!-- <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">notifications</i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            <li>
                                <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>
                        </ul>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">person</i><span>user</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                    </li>
                </div> -->

                @role('admin')
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <img src="{{asset('assets/img/add-master.png')}}" class="img-fluid mr-2" width="20px" />
                        <span>Add Masters</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="{{url('Add-class')}}"><img src="{{asset('assets/img/Classes.png')}}" class="img-fluid mr-2" width="15px" /> Classes</a>
                        </li>
                        <li>
                            <a href="{{url('Add-subject')}}"><img src="{{asset('assets/img/Subjects.png')}}" class="img-fluid mr-2" width="15px" /> Subjects</a>
                        </li>
                        <li>
                            <a href="{{url('Add-qualification')}}"><img src="{{asset('assets/img/Qualification.png')}}" class="img-fluid mr-2" width="15px" /> Qualification</a>
                        </li>
                        <li>
                            <a href="{{url('Add-specialization')}}"><img src="{{asset('assets/img/Specialization.png')}}" class="img-fluid mr-2" width="15px" /> Specializations</a>
                        </li>
                        <li>
                            <a href="{{url('Add-state')}}"><img src="{{asset('assets/img/State.png')}}" class="img-fluid mr-2" width="15px" /> State</a>
                        </li>
                        <li>
                            <a href="{{url('Add-district')}}"><img src="{{asset('assets/img/District.png')}}" class="img-fluid mr-2" width="15px" /> District</a>
                        </li>
                        <li>
                            <a href="{{url('Add-city')}}"><img src="{{asset('assets/img/City.png')}}" class="img-fluid mr-2" width="15px" /> City</a>
                        </li>
                    </ul>
                </li>
                @endrole

                <!-- <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">apps</i><span>widgets</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->

                <!--  <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">equalizer</i>


                        <span>chart</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">extension</i><span>ui element</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">border_color</i><span>forms</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>



                <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">grid_on</i><span>tables</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">content_copy</i><span>Pages</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
                </li> -->
                @role('admin')
                <li class="">
                    <a href="{{url('teachers')}}"><img src="{{asset('assets/img/view-teachers.png')}}" class="img-fluid mr-2" width="20px" /><span>View Teachers</span></a>
                </li>
                <li class="">
                    <a href="{{url('students')}}"><img src="{{asset('assets/img/view-students.png')}}" class="img-fluid mr-2" width="20px" /><span>View Students</span></a>
                </li>
                <li class="">
                    <a href="{{url('membership')}}"><img src="{{asset('assets/img/view-requests.png')}}" class="img-fluid mr-2" width="20px" /><span>Memberships</span></a>
                </li>
                <li class="">
                    <a href="{{url('testimonial')}}"><img src="{{asset('assets/img/view-requests.png')}}" class="img-fluid mr-2" width="20px" /><span>Testimonials</span></a>
                </li>
                <li class="">
                    <a href="{{url('upload-gallery')}}"><img src="{{asset('assets/img/gallery.png')}}" class="img-fluid mr-2" width="20px" /><span>Gallery</span></a>
                    <a href="{{url('pages')}}"><img src="{{asset('assets/img/information-pages.png')}}" class="img-fluid mr-2" width="20px" /><span>Pages</span></a>
                </li>
                @endrole
                <li class="">
                    <a href="{{url('signout')}}"><img src="{{asset('assets/img/sign-out.png')}}" class="img-fluid mr-2" width="20px" /><span>Sign Out</span></a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg bg-theme-1">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <!-- <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">apps</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">person</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </nav>
            </div>


            <div class="main-content">

                @yield('content')
                <!-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                               test
                            </div>
                            <div class="card-content">
                               shashi
                            </div>
                            <div class="card-footer">
                                ranjan
                            </div>
                        </div>
                    </div>
                </div> -->


                <!-- <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Employees Stats</h4>
                                <p class="category">New employees on 15th December, 2016</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bob Williams</td>
                                            <td>$23,566</td>
                                            <td>USA</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mike Tyson</td>
                                            <td>$10,200</td>
                                            <td>Canada</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tim Sebastian</td>
                                            <td>$32,190</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Morris</td>
                                            <td>$31,123</td>
                                            <td>Korea, South</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>South Africa</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Hulk Hogan</td>
                                            <td>$43,120</td>
                                            <td>Netherlands</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Angelina Jolie </td>
                                            <td>$12,140</td>
                                            <td>Australia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div> -->
            </div>

        </div>
    </div>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>
    @stack('custom_scripts')
</body>

</html>