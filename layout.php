<link rel="stylesheet" href="https://mladenplavsic.github.io/bootstrap-navbar-sidebar/navbar-fixed-left.min.css">
<body style="margin-right: 0px;">
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-left">
    <a class="navbar-brand" href=""><img src="<?=$URL_BASE?>public/images/logo/logo_header.png" alt=""> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pt-2" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">Información Personal</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Preregistro</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?=$URL_BASE?>admin/reg_uno">Datos de Preregistro</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=$URL_BASE?>admin/citas">Cita de Entrevistas</a>
                </div>
            </li>
        </ul>

    </div>
</nav>

<div class="main">
    <nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg " style="min-height: 75px" role="navigation" id="navin_1">
        <a class="navbar-brand" href="index">
            <img src="public/images/logo/logo_header.png" class="logo_h"  alt="">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav mr-auto">

            </ul>

            <div class="navbar-form form-inline my-2 my-lg-0">
                <ul class="nav navbar-nav mr-auto">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Juan Carlos Sanchez</a>
                        <span class="dropdown-arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="#">Notificaciones</a></li>
                            <li><a href="#">Mensajes</a></li>
                            <li><a href="#">Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>

<div class="container">


<? include_once "vis_admin_$_VISTA.php"?>

</div>



</body>