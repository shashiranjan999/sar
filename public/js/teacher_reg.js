let state_element = document.querySelector('#state');
let district_element = document.querySelector('#districts');
let cities = document.querySelector('#cities');
let classes = document.querySelector('#class');
let subject = document.querySelector('#subject');
let specailization = document.querySelector('#specailization');
let qualification = document.querySelector('#qualification');
let qualifications = [];
let experiences = [];


// choices
let state_choice = new Choices(state_element);
let district_choice = new Choices(district_element);
let city_choice = new Choices(cities);
let qualification_choice = new Choices(qualification);
let classes_choice = new Choices(classes, {removeItemButton: true});
let subject_choice = new Choices(subject, {removeItemButton: true});
let specailization_choice = new Choices(specailization, {removeItemButton: true});

// files
let profile_picture = "";
let cover_picture = "";
let bank_account_picture = "";
let aadhar_front_picture = "";
let aadhar_back_picture = "";
let pancard_picture = "";
let resume = "";

// form_data
let formData = new FormData();


var activeDiv = 1;
let changedInput = false;
$('.next-btn').on('click', function (e) {
    e.preventDefault();
    if (activeDiv == 1) {
        if (validateInputs([
            'first_name',
            'last_name',
            'father_name',
            'mother_name',
            'gender',
            'dob',
            'email',
            'password',
            'phone_number',
            'alt_phone_number',
            'location',
            // 'profile_picture',
            // 'cover_picture'
        ])) {
            handleNextButton($(this));
            return;
        }
    }

    // if (activeDiv == 2) {
    //     if (validateInputs([
    //         'bank_name',
    //         'bank_number',
    //         'bank_ifsc',
    //         'aadhar_number',
    //         'pan_number',
    //         'bank_account_image',
    //         'aadhar_front_image',
    //         'aadhar_back_image',
    //         'pancard_image'
    //     ])) {
    //         handleNextButton($(this));
    //         return;
    //     }
    // }
});

$('.prev-btn').on('click', function (e) {
    e.preventDefault();
    handlePrevButton($(this))
    clearErrors();
});


$(".save-btn").on('click', function (e) {
    e.preventDefault();
    if (validateInputs(['experiences', 'qualifications', 'spc', 'resume']) && activeDiv == 2) {
        submitForm();
    } else {
        console.log('formError')
    }
})

function handleNextButton(el) {
    clearErrors();
    $('.step-' + activeDiv).removeClass('active');
    activeDiv = el.attr('data-active');
    $('.done-' + activeDiv).addClass('done');
    activeDiv++;
    if (activeDiv !== 2) {
        el.attr('data-active', activeDiv);
    } else {
        el.hide();
        $('.save-btn').show();
    }
    $('.prev-btn').attr('data-active', activeDiv);
    $('.step-' + activeDiv).addClass('active');
    if (activeDiv !== 1) {
        $('.prev-btn').show();
    }
}

function handlePrevButton(el) {
    activeDiv--;
    $('.teacher-steps').removeClass('active');
    $('.step-' + activeDiv).addClass('active');
    $('.done-' + activeDiv).removeClass('done');
    if (activeDiv == 1) {
        el.hide();
    }
    if (activeDiv < 2) {
        $('.save-btn').hide();
        $('.next-btn').show();
    }
    $('.prev-btn,.next-btn').attr('data-active', activeDiv);

}

function validateInputs(inputs) {
    clearErrors();
    let isValid = true;
    let errors_array = [];
    let valid_mime_type = ['image/jpeg', 'application/pdf'];
    inputs.forEach(element => {
        if (element == 'first_name') {
            if (validator.isEmpty($("#first_name").val())) {
                isValid = false;
                displayErrorMessage("first_name_error", "Invalid First Name")
                errors_array.push('first_name')
            }
        }
        if (element == 'last_name') {
            if (validator.isEmpty($("#last_name").val())) {
                isValid = false;
                displayErrorMessage("last_name_error", "Invalid Last Name")
                errors_array.push('last_name')
            }
        }
        if (element == 'father_name') {
            if (validator.isEmpty($("#father_name").val())) {
                isValid = false;
                displayErrorMessage("father_name_error", "Invalid Father Name")
                errors_array.push('father_name')
            }
        }
        if (element == 'mother_name') {
            if (validator.isEmpty($("#mother_name").val())) {
                isValid = false;
                displayErrorMessage("mother_name_error", "Invalid Mother Name")
                errors_array.push('mother_name')
            }
        }
        if (element == 'dob') {
            if (validator.isEmpty($("#dob").val())) {
                isValid = false;
                displayErrorMessage("dob_error", "Invalid Birthdate")
                errors_array.push('dob')
            }
        }
        if (element == 'email') {
            if (!validator.isEmail($("#email").val())) {
                isValid = false;
                displayErrorMessage("email_error", "Invalid Email")
                errors_array.push('email')
            }
        }
        if (element == 'password') {
            if (validator.isEmpty($("#password").val())) {
                isValid = false;
                displayErrorMessage("password_error", "Invalid Password")
                errors_array.push('password')
            }
        }
        if (element == 'phone_number') { // validator.isEmpty($("#phone").val())
            if (!(/^[7-9][0-9]{9}$/.test($("#phone").val()))) {
                isValid = false;
                displayErrorMessage("phone_number_error", "Invalid Phone Number")
                errors_array.push('phone')
            }
        }
        if (element == 'alt_phone_number') {
            if (!(/^[7-9][0-9]{9}$/.test($("#alt_phone").val()))) {
                isValid = false;
                displayErrorMessage("alt_phone_number_error", "Invalid Alternate Phone Number")
                errors_array.push('alt_phone')
            }
        }
        if (element == 'location') {
            if (state_choice.getValue().value == "" || district_choice.getValue().value == "" || city_choice.getValue().value == "") {
                console.log('location')
                isValid = false;
                displayErrorMessage("location_error", "Please Select all Fields")
                errors_array.push("location_error")
            }
        }
        if (element == 'profile_picture') {
            if (! valid_mime_type.includes(profile_picture.type) || ! checkFileSize(profile_picture)) {
                isValid = false;
                displayErrorMessage("profile_image_error", "Invalid Profile Picture")
                errors_array.push('profile_image_error')
            }
        }
        if (element == 'cover_picture') {
            if (! valid_mime_type.includes(cover_picture.type) || ! checkFileSize(cover_picture)) {
                isValid = false;
                displayErrorMessage("cover_image_error", "Invalid Cover Picture")
                errors_array.push('cover_image_error')
            }
        }
        if (element == 'bank_name') {
            if (validator.isEmpty($("#bank_name").val())) {
                isValid = false;
                displayErrorMessage("bank_name_error", "Invalid Bank Name")
                errors_array.push('bank_name')
            }
        }
        if (element == 'bank_number') {
            if (validator.isEmpty($("#bank_number").val())) {
                isValid = false;
                displayErrorMessage("bank_number_error", "Invalid Bank Number")
                errors_array.push('bank_number')
            }
        }
        if (element == 'bank_ifsc') {
            if (validator.isEmpty($("#bank_ifsc").val())) {
                isValid = false;
                displayErrorMessage("bank_ifsc_error", "Invalid Bank IFSC")
                errors_array.push('bank_ifsc')
            }
        }
        if (element == 'aadhar_number') {
            if (validator.isEmpty($("#aadhar_number").val())) {
                isValid = false;
                displayErrorMessage("aadhar_number_error", "Invalid Aadhar Number")
                errors_array.push('aadhar_number')
            }
        }
        if (element == 'pan_number') {
            if (validator.isEmpty($("#pan_number").val())) {
                isValid = false;
                displayErrorMessage("pan_number_error", "Invalid Pan Number")
                errors_array.push('pan_number')
            }
        }
        if (element == 'bank_account_image') {
            if (! valid_mime_type.includes(bank_account_picture.type) || ! checkFileSize(bank_account_picture)) {
                isValid = false;
                displayErrorMessage("bank_account_image_error", "Invalid Bank Accout Image")
                errors_array.push('bank_account_image')
            }
        }
        if (element == 'aadhar_front_image') {
            if (! valid_mime_type.includes(aadhar_front_picture.type) || ! checkFileSize(aadhar_front_picture)) {
                isValid = false;
                displayErrorMessage("aadhar_front_image_error", "Invalid Aadhar Front Image")
                errors_array.push('aadhar_front_image')
            }
        }
        if (element == 'aadhar_back_image') {
            if (! valid_mime_type.includes(aadhar_back_picture.type) || ! checkFileSize(aadhar_back_picture)) {
                isValid = false;
                displayErrorMessage("aadhar_back_image_error", "Invalid Aadhar Back Image")
                errors_array.push('aadhar_back_image')
            }
        }
        if (element == 'pancard_image') {
            if (! valid_mime_type.includes(pancard_picture.type) || ! checkFileSize(pancard_picture)) {
                isValid = false;
                displayErrorMessage("pancard_image_error", "Invalid Pancard Image")
                errors_array.push('pancard_image')
            }
        }
        if (element == 'experiences') {
            if (experiences.length == 0) {
                isValid = false;
                displayErrorMessage("experiences_error", "Please Fill in all fields.")
                errors_array.push('experiences_error')
            }
        }
        if (element == 'qualifications') {
            if (qualifications.length == 0) {
                isValid = false;
                displayErrorMessage("qualifications_error", "Please Fill in all fields.")
                errors_array.push('qualifications_error')
            }
        }
        if (element == 'spc') {
            if (specailization_choice.getValue().length == 0 || classes_choice.getValue().length == 0 || subject_choice.getValue().length == 0) {
                displayErrorMessage("classes_error", "Please Fill in all fields.")
                errors_array.push('classes_error');
                isValid = false;
            }
        }
        // if (element == 'resume') {
        //     if (! valid_mime_type.includes(resume.type) || ! checkFileSize(resume)) {
        //         isValid = false;
        //         displayErrorMessage("resume_error", "Invalid Resume/CV")
        //         errors_array.push('resume_error')
        //     }
        // }
    });
    if (errors_array.length) {
        scrollToError(errors_array[0])
    }
    return isValid;
}

function displayErrorMessage(id, message) {
    $("#" + id).show();
    $("#" + id).html(message)
}

function hideErrorMessage(id) {
    $("#" + id).hide();
}
state_choice.passedElement.element.addEventListener('change', function (event) {
    console.log(event.detail)
    fetchDistricts(event.detail.value);
})

district_choice.passedElement.element.addEventListener('change', function (event) {
    console.log(event.detail)
    fetchCities(event.detail.value)
})

$("#bank_name").keyup(function () {
    changedInput = true;
})

function fetchDistricts(state_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'get-districts',
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            state_id: state_id
        },
        dataType: 'JSON',
        success: function (data) {
            district_choice.clearChoices();
            district_choice.setChoices(modifyDataForChoices(data))
            city_choice.setChoices([{
                    value: '',
                    label: 'Select City',
                    selected: true
                },])
            city_choice.clearChoices();
        }
    });
}

function fetchCities(district_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'get-cities',
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            district_id: district_id
        },
        dataType: 'JSON',
        success: function (data) {
            city_choice.clearChoices();
            city_choice.setChoices(modifyDataForChoices(data))
        }
    });
}

function modifyDataForChoices(data) {
    let finalData = [];
    data.forEach(element => {
        let obj = {}
        obj['value'] = element.id;
        obj['label'] = element.name;
        finalData.push(obj)
    });
    finalData[0].selected = true;
    return finalData;
}

function add_qualification() {
    let years = $("#qualification_year").val();
    let total_marks = $("#total_marks").val();
    let marks_obtained = $("#marks_obtained").val();
    let rank = $("#rank").val();
    let remarks = $("#remarks").val();
    let qualification = qualification_choice.getValue();
    console.log(qualification.value, years, experience)

    if (! qualification.value || ! years) {
        $("#qualifications_error").show();
        return;
    }
    if (! qualifications.some(el => el.qualification.id == qualification.value)) {
        qualifications.push({
            qualification: {
                id: qualification.value,
                name: qualification.label.trim()
            },
            years,
            total_marks,
            marks_obtained,
            rank,
            remarks
        })
        $("#qualifications_error").hide();
        $("#qualification_year").val('');
        $("#total_marks").val('');
        $("#marks_obtained").val('');
        $("#rank").val('');
        $("#remarks").val('');
        qualification_choice.setChoiceByValue('');
        updateQualificationsTable();
    } else {
        $("#qualifications_error").show();
        $("#qualifications_error").html("Qualification Already Exist");
    }
}

function updateQualificationsTable() {
    $("#qualification_table_row").html("")
    if (qualifications.length == 0) {
        $("#qualification_table_row").append("<tr><td colspan='8' >Click + to add qualification</td></tr>")
    } else {
        qualifications.forEach((el, index) => {
            $("#qualification_table_row").append(`
            <tr><th scope='row'>
            ${
                index + 1
            }</th><td>${
                el.qualification.name
            }</td><td>${
                el.years
            }</td><td>${
                el.total_marks
            }</td>
            <td>${
                el.marks_obtained
            }</td>
            <td>${
                el.rank
            }</td>
            <td>${
                el.remarks
            }</td>
            <td><span onclick='deleteQualification(${
                el.qualification.id
            })'>Remove</span></td></tr>`)
        })
    }
}

function deleteQualification(id) {
    qualifications = qualifications.filter(el => el.qualification.id != id)
    updateQualificationsTable();
}

function add_experience() {
    let experience = $("#experience").val();
    let years = $("#years").val();
    if (! experience || ! years) {
        $("#experiences_error").show();
        return;
    } else {
        $("#experiences_error").hide();
        $("#experience").val('');
        $("#years").val('');
        experiences.push({experience, years})
    } updateExperienceTable();
}

function updateExperienceTable() {
    $("#experience_table_row").html("")
    if (experiences.length == 0) {
        $("#experience_table_row").append("<tr><td colspan='8' >Click + to add Experience & year</td></tr>")
    } else {
        experiences.forEach((el, index) => {
            $("#experience_table_row").append(`
            <tr>
            <th scope='row'>${
                index + 1
            }</th>
            <td>${
                el.experience
            }</td>
            <td>${
                el.years
            }</td>
            <td><span onclick='deleteExperience(${index})'>Remove</span></td></tr>`)
        })
    }
}

function deleteExperience(index) {
    experiences.splice(index, 1)
    updateExperienceTable()
}


function submitForm() { // static_inputs
    let data = {
        first_name: $("#first_name").val(),
        last_name: $("#last_name").val(),
        father_name: $("#father_name").val(),
        mother_name: $("#mother_name").val(),
        gender: $("#gender").val(),
        dob: $("#dob").val(),
        email: $("#email").val(),
        password: $("#password").val(),
        phone: $("#phone").val(),
        alt_phone: $("#alt_phone").val(),
        address: $("#address").val(),
        state: JSON.stringify(state_choice.getValue()),
        district: JSON.stringify(district_choice.getValue()),
        city: JSON.stringify(city_choice.getValue()),
        avability_period: $("#avability_period").val(),
        available_time: $("#available_time").val(),
        bank_name: $("#bank_name").val(),
        bank_number: $("#bank_number").val(),
        bank_ifsc: $("#bank_ifsc").val(),
        aadhar_number: $("#aadhar_number").val(),
        pan_number: $("#pan_number").val(),
        experiences: JSON.stringify(experiences),
        qualifications: JSON.stringify(qualifications),
        classes: JSON.stringify(classes_choice.getValue()),
        subjects: JSON.stringify(subject_choice.getValue()),
        specailizations: JSON.stringify(specailization_choice.getValue()),
        // profile_picture,
        // cover_picture,
        // bank_account_picture,
        // aadhar_front_picture,
        // aadhar_back_picture,
        // pancard_picture,
        // resume
    }

    // we need to validate data here
    // if (validateInputs()) { // just for dev
    for (var key in data) {
        formData.append(key, data[key])
    }
    submitFormAjax();
    // } else {
    //     console.log('Errors')
    // }
}

function _validateInputs() {
    clearErrors();
    let isValid = true;
    let errors = [];
    if (state_choice.getValue().value == "" || district_choice.getValue().value == "" || city_choice.getValue().value == "") {
        isValid = false;
        $("#location_error").show();
        errors.push("location_error")
    }
    if (experiences.length == 0) {
        $("#experiences_error").show();
        errors.push('experiences_error')
        isValid = false;
    }

    if (qualifications.length == 0) {
        $("#qualifications_error").show();
        errors.push("qualifications_error")
        isValid = false;
    }
    if (specailization_choice.getValue().length == 0 || classes_choice.getValue().length == 0 || subject_choice.getValue().length == 0) {
        $("#classes_error").show();
        errors.push('classes_error');
        isValid = false;
    }

    let valid_mime_type = ['image/jpeg', 'application/pdf'];
    if (! valid_mime_type.includes(profile_picture.type) || ! checkFileSize(profile_picture)) {
        isValid = false;
        errors.push('profile_image_error')
        $('#profile_image_error').show();
    }
    if (! valid_mime_type.includes(cover_picture.type) || ! checkFileSize(cover_picture)) {
        isValid = false;
        errors.push('cover_image_error')
        $('#cover_image_error').show();
    }
    if (! valid_mime_type.includes(bank_account_picture.type) || ! checkFileSize(bank_account_picture)) {
        isValid = false;
        errors.push('bank_account_image_error')
        $('#bank_account_image_error').show();
    }
    if (! valid_mime_type.includes(aadhar_front_picture.type) || ! checkFileSize(aadhar_front_picture)) {
        isValid = false;
        errors.push('aadhar_front_image_error')
        $('#aadhar_front_image_error').show();
    }
    if (! valid_mime_type.includes(aadhar_back_picture.type) || ! checkFileSize(aadhar_back_picture)) {
        isValid = false;
        errors.push('aadhar_back_image_error')
        $('#aadhar_back_image_error').show();
    }
    if (! valid_mime_type.includes(pancard_picture.type) || ! checkFileSize(pancard_picture)) {
        isValid = false;
        errors.push('pancard_image_error')
        $('#pancard_image_error').show();
    }
    if (! valid_mime_type.includes(resume.type) || ! checkFileSize(resume)) {
        isValid = false;
        errors.push('resume_error')
        $('#resume_error').show();
    }

    if (errors.length) {
        scrollToError(errors[0])
    }
    return isValid;
}


function clearErrors() {
    const errors_fields = [
        'first_name_error',
        'last_name_error',
        'mother_name_error',
        'father_name_error',
        'dob_error',
        'email_error',
        'password_error',
        'phone_number_error',
        'alt_phone_number_error',
        'address_error',
        'location_error',
        'profile_image_error',
        'cover_image_error',
        'bank_name_error',
        'bank_number_error',
        'bank_ifsc_error',
        'aadhar_number_error',
        'pan_number_error',
        'bank_account_image_error',
        'aadhar_front_image_error',
        'aadhar_back_image_error',
        'pancard_image_error',
        'experiences_error',
        'qualifications_error',
        'resume_error',
        'classes_error',
        'generic_error'
    ]
    errors_fields.forEach(el => {
        hideErrorMessage(el)
    })
}

function scrollToError(selector) {
    $("#" + selector).get(0).scrollIntoView({behavior: 'instant', block: 'center'});
}

function submitFormAjax() {
    $("#submit_button").attr('disabled', true)
    $("#submit_button").html('Please Wait..')
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'teacher_reg',
        type: 'POST',
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN
        },
        data: formData,
        success: function (data) {
            console.log(data)
            swalAlert();
        },
        error: function (error) { // console.log(error.responseJSON)
            console.log(error)
            handleResponseErrors(error.responseJSON)
            $("#submit_button").attr('disabled', false)
            $("#submit_button").html('Submit')
        }
    });

}

function swalAlert() {
    Swal.fire({
        title: 'Success !',
        text: 'Teacher Registered Successfully',
        icon: 'success',
        type: 'success',
        confirmButtonText: 'Login Now',
        allowOutsideClick: false,
        confirmButtonColor: '#E85901'
    }).then(function () {
        window.location = basePath
    })

}

function handleResponseErrors({errors}) {
    console.log(errors)
    let errors_array = [];
    for (key in errors) {
        if (key == 'email') {
            displayErrorMessage('generic_error', errors[key])
            errors_array.push('generic_error')
        } else {
            alert('Something Wrong with server');
            window.location.reload();
        }
    }
    if (errors_array.length) {
        scrollToError(errors_array[0])
    }
}

$("#profile_image").change(function () {
    const file = $(this)[0].files[0];
    profile_picture = file;
})
$("#cover_image").change(function () {
    const file = $(this)[0].files[0];
    cover_picture = file;
})

$("#bankaccount_image").change(function () {
    const file = $(this)[0].files[0];
    bank_account_picture = file
})

$("#aadhar_front_image").change(function () {
    const file = $(this)[0].files[0];
    aadhar_front_picture = file
})

$("#aadhar_back_image").change(function () {
    const file = $(this)[0].files[0];
    aadhar_back_picture = file
})
$("#pancard_image").change(function () {
    const file = $(this)[0].files[0];
    pancard_picture = file
})
$("#resume").change(function () {
    const file = $(this)[0].files[0];
    resume = file
})

function checkFileSize(file) {
    isValidFileSize = true;
    let totalSizeKB = file.size / Math.pow(1024, 1);
    if (totalSizeKB > 500) {
        isValidFileSize = false;
    }
    return isValidFileSize;
}


// $("#test").click(function () {
//     console.log(profile_picture.size)
//     if (profile_picture.type != 'image/jpeg' || ! checkFileSize(profile_picture)) {
//         console.log('invalid')
//     } else {
//         console.log('valid')
//     }
// })
