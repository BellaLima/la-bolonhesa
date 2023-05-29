$(document).ready(function () {
    $('#form-login').submit(function (e) { 
        e.preventDefault();
        
        let url = $(this).attr('action');
        let formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                console.log(response);
            }
        })
    });
});