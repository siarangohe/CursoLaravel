{capture assign="left"}
    <center><img id="foto-perfil" src="{url('assets/img/profile')}/{$foto}" width="150" height="150"></center>
    <div class="well">
        <center><p>{$nombre}</p></center>
        <center><p>{$email}</p></center>
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
    <p><center><img id="foto-portada" src="https://scontent-atl.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1521470_10152107958421550_929684074_n.jpg?oh=b17a6649e1b6c3c73903f6cbef2bd02b&oe=55E17F96">
    <div id="barra-portada" class="well"></div>
    </center></p>    
{/capture}

{include file="../masterpage/template.tpl" layout="two_columns"}