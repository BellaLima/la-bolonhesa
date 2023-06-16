jQuery(function() {
    
    $('.multiplicador').mask('0.000000');

    $('#form-tamanhocreate').on("submit", function (e) { 
        e.preventDefault();
        
        let url = $(this).attr('action'); 
        let formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "json",
            success: function(data) {
                let dados = data;
                if(dados.stattus == 'success') {
                    $('#form-tamanhocreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/tamanholist";
                }
            },
        })
    });

    $('#form-tamanhoedit').on("submit", function (e) { 
        e.preventDefault();
        
        let url = $(this).attr('action'); 
        let formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "json",
            success: function(data) {
                let dados = data;
                if(dados.stattus == 'success') {
                    $('#form-tamanhocreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/tamanholist";
                }
            },
        })
    });
});