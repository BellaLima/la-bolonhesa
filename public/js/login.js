$(document).ready(function () {
    $('#form-login').submit(function (e) { 
        e.preventDefault();
        // printar o action do form
        console.log($('#form-login').attr('action'));
    });
});