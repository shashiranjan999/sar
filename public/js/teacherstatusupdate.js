function changeStatus(id){
    var checkbox=document.getElementById("teacherStatus");
    var status=checkbox.checked
    console.log(status)
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: 'change-teacher-status',
        type: 'POST',
        data: {
            _token: CSRF_TOKEN,
            status: status,
            id:id
        },
        dataType: 'JSON',
        success: function (data) {
            console.log(data)
        }
    });
}