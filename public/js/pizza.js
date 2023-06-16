jQuery(function() {
    
    $('.preco_base').mask('R$ 00,00');

    $('#form-pizzacreate').on("submit", function (e) { 
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
                    $('#form-pizzacreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/pizzalist";
                }
            },
        })
    });

    $('#form-pizzaedit').on("submit", function (e) { 
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
                    $('#form-pizzacreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/pizzalist";
                }
            },
        })
    });
});