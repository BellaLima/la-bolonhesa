jQuery(function() {
    
    $('.telefone').mask('(00) 00000-0000');
    $('.cpf').mask('000.000.000-00');

    $('#form-usercreate').on("submit", function (e) { 
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
                    $('#form-usercreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/userlist";
                }
            },
        })
    });

    $('#form-useredit').on("submit", function (e) { 
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
                    $('#form-usercreate').trigger("reset");
                    window.location.href = "http://"+dados.host+"/admin/userlist";
                }
            },
        })
    });
});