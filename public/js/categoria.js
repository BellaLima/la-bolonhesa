jQuery(function() {
    
    // $('.multiplicador').mask('0.000000');

    $('#form-categoriacreate').on("submit", function (e) { 
        e.preventDefault();
        var form_data = new FormData(this);
        var url = $(this).attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                let dados = JSON.parse(data);
                if(dados.stattus == 'success') {
                    $('#form-categoriacreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/categorialist";
                }
            },
        })
    });

    $('#form-categoriaedit').on("submit", function (e) { 
        e.preventDefault();
        
        var form_data = new FormData(this);
        var url = $(this).attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                let dados = JSON.parse(data);
                if(dados.stattus == 'success') {
                    $('#form-categoriacreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/categorialist";
                }
            },
        })
    });
});