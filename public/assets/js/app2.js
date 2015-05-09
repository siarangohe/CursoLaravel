var fb = {
    meGusta : function(id) {
        $.ajax({
            url: baseUrl + '/publicacion/me-gusta',
            type: 'POST',
            async: true,
            data: {
                publicacion : id
            },
            success: function(response){ // response = la respuesta del servidor
                console.log(response);
            }
        });
    },
    
    comentar : function(id) {
        var comentario = $("#comentario-" + id);
        if(comentario.val() != ""){
            $.ajax({
                url: 'publicacion/comentar',
                type: 'POST',
                async: true,
                data: {
                    usuario : 1,
                    comentario : comentario.val(),
                    
                },
                success: function(response){ // response = la respuesta del servidor
                    alert('se ejecuto correctamente');
                }
            });
            
        } else {
            alert('Este campo es obligatorio');
        }
    }
}


