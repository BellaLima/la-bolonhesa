$(document).ready(function () {
    $('#form-login').submit(function (e) { 
        e.preventDefault();
        
        let url = $(this).attr('action');
        let formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "json",
            success: function (response) {
                if (response.status == 'success') {
                    window.location.href = response.redirect;
                } else {
                    $("#error").text(response.message);
                }
            },
            error: function (response) {
                console.log(response);
            }
        })
    });
});