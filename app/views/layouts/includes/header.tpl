<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="http://www.galeriaarteaga.com/imagenes/facebook_logo.png" width="100" height="35"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" data-provide="typeahead" data-source='[{$amigos}]' class="form-control" placeholder="Busca personas, lugares y cosas">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a style="color:#FFFFFF" href="{url('profile/')}">{$nombre}</a></li>
                <li><a style="color:#FFFFFF" href="#">Inicio</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Crear grupo</a></li>
                        <li><a href="#">Administrar grupos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Crear página</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Crear anuncios</a></li>
                        <li><a href="#">Publicidad en Facebook</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Registro de actividad</a></li>
                        <li><a href="#">Preferencias de noticias</a></li>
                        <li><a href="#">Configuración</a></li>
                        <li><a href="{url('profile/logout')}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Reportar un problema</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>