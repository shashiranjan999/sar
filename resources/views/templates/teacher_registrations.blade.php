@extends('templates.base') @section('content')


<div class="container-fluid my-3 py-3">
    <form action="{{route('resume')}}" method="POST" class="form-horizontal">
    <div class="row mb-5 justify-content-center">
    
        <div class="col-lg-9 mt-lg-0 mt-4">
            <!-- Card Profile -->
            <div class="card card-body" id="profile">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-auto col-4">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{asset('admin')}}/img/team-4.jpg" alt="bruce" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-sm-auto col-8 my-auto">
                        <div class="h-100">
                            <h5 class="mb-1 font-weight-bolder">
                                Vivek Kumar
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Teacher
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                        <label class="form-check-label mb-0">
                  <small id="profileVisibility">
                    Switch to invisible
                  </small>
                </label>
                        <div class="form-check form-switch ms-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked onchange="visible()">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Basic Info -->
            <div class="card mt-4" id="basic-info">
                <div class="card-header">
                    <h5>Resume Info</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">First Name</label>
                            <div class="input-group">
                                <input id="firstName" name="firstName" class="form-control" type="text" placeholder="Alec" required="required">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Last Name</label>
                            <div class="input-group">
                                <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Thompson" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <label class="form-label mt-4">I'm</label>
                            <select class="form-control" name="choices-gender" id="choices-gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-5 col-5">
                                    <label class="form-label mt-4">Birth Date</label>
                                    <select class="form-control" name="choices-month" id="choices-month"></select>
                                </div>
                                <div class="col-sm-4 col-3">
                                    <label class="form-label mt-4">&nbsp;</label>
                                    <select class="form-control" name="choices-day" id="choices-day"></select>
                                </div>
                                <div class="col-sm-3 col-4">
                                    <label class="form-label mt-4">&nbsp;</label>
                                    <select class="form-control" name="choices-year" id="choices-year"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label mt-4">Email</label>
                            <div class="input-group">
                                <input id="email" name="email" class="form-control" type="email" placeholder="example@email.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-4">Confirmation Email</label>
                            <div class="input-group">
                                <input id="confirmation" name="confirmation" class="form-control" type="email" placeholder="example@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label mt-4">Your location</label>
                            <div class="input-group">
                                <input id="location" name="location" class="form-control" type="text" placeholder="Sydney, A">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-4">Phone Number</label>
                            <div class="input-group">
                                <input id="phone" name="phone" class="form-control" type="number" placeholder="+40 735 631 620">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-4">Alternate Phone Number</label>
                            <div class="input-group">
                                <input id="phone" name="phone" class="form-control" style="height:150px;" type="number" placeholder="+40 735 631 620">
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="mt-4 form-label">Profile Pic</label>
                <form action="#" class="form-control dropzone" id="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>

                        </div>
                    </div>
                    <div class="row" id="room_fileds">
                        <div class="col-md-11 align-self-center" >
                            <label class="form-label mt-4">Experience</label>
                            <input class="form-control" type="text" placeholder="Enter something" />
                        </div>
                        <div class="col-md-1"><br><br>
                            <button class="form-control mt-3 btn btn-md btn-primary px-1 " onclick="add_fields();" type="button" >+</button>
                        </div>
                    </div>
                     <div class="row" id="room_filed">
                        <div class="col-md-11 align-self-center" >
                            <label class="form-label mt-4">Other Experience</label>
                            <input class="form-control" type="text" placeholder="Enter something" />
                        </div>
                        <div class="col-md-1"><br><br>
                            <button class="form-control mt-3 btn btn-md btn-primary px-1 " onclick="add_field();" type="button" >+</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 align-self-center">
                            <label class="form-label mt-4">Specilization</label>
                            <input class="form-control" id="choices-Specilization" type="text" value="Python, Django, bootstrap" placeholder="Enter something" />
                        </div>                        
                        
                        <div class="col-md-6 align-self-center">
                            <label class="form-label mt-4">Language</label>
                            <input class="form-control" id="choices-language" type="text" value="english, hindi, punjabi" placeholder="Enter something" />
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label mt-4">Skills</label>
                            <input class="form-control" id="choices-skills" type="text" value="vuejs, angular, react" placeholder="Enter something" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</div>

<!--   Core JS Files   -->
{% block js %}
<script src="{{asset('admin')}}/js/core/popper.min.js"></script>
<script src="{{asset('admin')}}/js/core/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{asset('admin')}}/js/plugins/smooth-scrollbar.min.js"></script>
<script src="{{asset('admin')}}/js/plugins/choices.min.js"></script>
<!-- Kanban scripts -->
<script src="{{asset('admin')}}/js/plugins/dropzone.min.js"></script>
<script src="{{asset('admin')}}/js/plugins/dragula/dragula.min.js"></script>
<script src="{{asset('admin')}}/js/plugins/jkanban/jkanban.js"></script>
<script type="text/javascript">
    function add_fields() {
        var dummy = '<div class="row" id="room_fileds"><div class="col-md-11 align-self-center" ><label class="form-label mt-4">Experience</label><input class="form-control" id="choices-Specilization" type="text"  placeholder="Enter something" /></div><div class="col-md-1"><br><br><button onclick="add_fields();" class="form-control mt-3 btn btn-md btn-primary px-1 " type="button" >+</button></div></div>';
        document.getElementById('room_fileds').innerHTML += dummy;   
    }
</script>
<script type="text/javascript">
    function add_field() {
        var dummy = '<div class="row w-100" id="room_filed"><div class="col-md-11 align-self-center" ><label class="form-label mt-4">Other Experience</label><input class="form-control" id="choices-Specilization" type="text" placeholder="Enter something" /></div><div class="col-md-1"><br><br><button onclick="add_field();" class="form-control mt-3 btn btn-md btn-primary px-1 " type="button" >+</button></div></div>';
        document.getElementById('room_filed').innerHTML += dummy;   
    }
</script>
<script>
    if (document.getElementById('choices-gender')) {
        var gender = document.getElementById('choices-gender');
        const example = new Choices(gender);
    }

    // if (document.getElementById('choices-language')) {
    //     var language = document.getElementById('choices-language');
    //     const example = new Choices(language);
    // }

    if (document.getElementById('choices-skills')) {
        var skills = document.getElementById('choices-skills');
        const example = new Choices(skills, {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
            addItems: true
        });
    }
    if (document.getElementById('choices-Specilization')) {
        var Specilization = document.getElementById('choices-Specilization');
        const example = new Choices(Specilization, {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
            addItems: true
        });
    }
    if (document.getElementById('choices-language')) {
        var language = document.getElementById('choices-language');
        const example = new Choices(language, {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
            addItems: true
        });
    }

    if (document.getElementById('choices-year')) {
        var year = document.getElementById('choices-year');
        setTimeout(function() {
            const example = new Choices(year);
        }, 1);

        for (y = 1900; y <= 2020; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 2020) {
                optn.selected = true;
            }

            year.options.add(optn);
        }
    }

    if (document.getElementById('choices-day')) {
        var day = document.getElementById('choices-day');
        setTimeout(function() {
            const example = new Choices(day);
        }, 1);


        for (y = 1; y <= 31; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 1) {
                optn.selected = true;
            }

            day.options.add(optn);
        }

    }

    if (document.getElementById('choices-month')) {
        var month = document.getElementById('choices-month');
        setTimeout(function() {
            const example = new Choices(month);
        }, 1);

        var d = new Date();
        var monthArray = new Array();
        monthArray[0] = "January";
        monthArray[1] = "February";
        monthArray[2] = "March";
        monthArray[3] = "April";
        monthArray[4] = "May";
        monthArray[5] = "June";
        monthArray[6] = "July";
        monthArray[7] = "August";
        monthArray[8] = "September";
        monthArray[9] = "October";
        monthArray[10] = "November";
        monthArray[11] = "December";
        for (m = 0; m <= 11; m++) {
            var optn = document.createElement("OPTION");
            optn.text = monthArray[m];
            // server side month start from one
            optn.value = (m + 1);
            // if june selected
            if (m == 1) {
                optn.selected = true;
            }
            month.options.add(optn);
        }
    }

    function visible() {
        var elem = document.getElementById('profileVisibility');
        if (elem) {
            if (elem.innerHTML == "Switch to visible") {
                elem.innerHTML = "Switch to invisible"
            } else {
                elem.innerHTML = "Switch to visible"
            }
        }
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
        url: "/file/post",
        addRemoveLinks: true

    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('admin')}}/js/soft-ui-dashboard.min3447.js?v=1.0.5"></script>
{% endblock js %} @endsection

</body>

</html>