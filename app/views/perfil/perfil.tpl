{capture assign="left"}
    <center><img src="https://scontent.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/1979532_10152290956476550_760046611_n.jpg?oh=a79982974ac1f024b45d869111bb7582&oe=55717823" width="150" height="150"></center>
    <div class="well">
        <center>Informacion</center>
    </div>

{/capture}
    
{capture assign="right"}
    {Form::open(['url'=>'/publicacion/crear'])}
    <textarea required="" name="publicacion" placeholder="¿Que estás pensando?" rows="3" class="col-sm-12"></textarea>
    <button type="submit" class="btn pull-right btn-primary">Publicar</button>
    {Form::close()}
    <hr>
    <br>
    <br>
    <br>
        {foreach $publicaciones as $publicacion}
            <div class='well' style="word-break: break-all; margin-bottom: 5px; padding: 8px 8px; font-family: 'Roboto', sans-serif;">
                <button class='close' area-hidden='true' style="margin-top: -8px;"><a href="{url('publicacion/eliminar')}/{$publicacion->id}">&times;</a></button>
                <!--<span class="pull-right glyphicon glyphicon-remove" style="margin-top: -4px;"></span>-->
                {$publicacion->publicacion}
            </div>
            <div>
                <span class="glyphicon glyphicon-comment"></span> <span>Comentar</span> |
                <span class="glyphicon glyphicon-thumbs-up"></span> Me gusta
                <div id="comentarios-{$publicacion->id}}">
                    <div style="font-size: 10px; padding: 3px;" class="well well-sm col-sm-7">Esto es un comentario</div>
                </div>
                <br>
                <br>
                <textarea id="comentario-{$publicacion->id}" rows="1" placeholder="Escribe tu comentario..." class="col-sm-6"></textarea>
                <button class="btn btn-success btn-sm" onclick="fb.comentar({$publicacion->id});">Comentar</button>
            </div>
            <hr>
            
            {foreachelse}
                <div class="alert alert-danger">
                    No hay publicaciones
                </div>
            
        {/foreach}
{/capture}

{capture assign="portada"}
    
{/capture}

{include file="../masterpage/template.tpl" layout="two_columns"}