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
                $("#n-me-gusta-"+id).text(response.nlikes);
                $("#num-me-gusta-"+id).text(response.type==-1?"Me gusta" : "Ya no me gusta");
            }
        });
    },
    
    comentar : function(id) {
        var comentario = $("#comentario-" + id);
        if(comentario.val() != ""){
            $.ajax({
                url: baseUrl + '/publicacion/comentar',
                type: 'POST',
                async: true,
                data: {
                    publicacion : id,
                    comentario : comentario.val(),
                    
                },
                success: function(response){ // response = la respuesta del servidor
                    var div = "<div style='margin-bottom: 1px; font-size: 10px; padding: 3px;' class='well well-sm col-sm-7'>";
                    var img = "<img src='" + baseUrl + "/assets/img/profile/" + response.id_usuario + ".jpg' width='20' heigth='20'>";
                    $("#comentarios-"+id).append(div + img + response.publicacion + "</div>");
                    comentario.val("");
                }
            });
            
        } else {
            alert('Este campo es obligatorio');
        }
    }
}


