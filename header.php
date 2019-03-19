<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CENDI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Loading Bootstrap -->
    <link href="public/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="public/css/flat-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">


    <!--Cosas para el gob-->
    <script type="text/javascript" src="https://cdn.datos.gob.mx/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
    <link rel="import" href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html">
    <link rel="import" href="https://cdn.datos.gob.mx/bower_components/dgm-navbar/dgm-navbar.html">
    <link rel="import" href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href="public/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="public/js/datepicker.min.js"></script>



</head>
<nav class="nav-gob ">
    <dgm-navbar></dgm-navbar>
</nav>


<div class="headerLN">
    <div class=" ipnLogo-enlace">
        <a href="index" class="linklandinipn">
            <p class="ipn-logo">
                <img src="https://www.ipn.mx/assets/files/main/img/template/logo-ipn.png" class="img-fluid" alt="Logotipo del Instituto Politécnico Nacional">
            </p>
            <p class="ipnLogo-slogan">
                <span class="u-fw600">Sistema para la Gestión de los Procesos de </span><br>
                <span class="slogan">Inscripción y Reinscripción de COCENDI</span>
            </p>
        </a>
    </div>
</div>

<nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg " role="navigation" id="navin_1">
    <a class="navbar-brand" href="index">
        <img src="public/images/logo/logo_header.png" class="logo_h"  alt="">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <ul class="nav navbar-nav mr-auto">
            <li><a href="index" class="<?=$url=='index'?'active':''?>">Inicio</a></li>
            <li><a href="#fakelink">¿Quiénes somos?</a></li>
            <li><a href="requisitos" class="<?=$url=='requisitos'?'active':''?>">Requisitos de Inscripción</a></li>
            <li><a href="preregistro" class="<?=$url=='preregistro'||$url=='registrocompleto'?'active':''?>">Preregistro</a></li>
        </ul>

        <div class="navbar-form form-inline my-2 my-lg-0">
            <ul class="nav navbar-nav mr-auto">
                <li><a href="login" class="<?=$url=='login'?'active':''?>">Login</a></li>
            </ul>
        </div>
    </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->



<!--
PARA EL LOGOUT
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages</a>
    <span class="dropdown-arrow"></span>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
</li>-->