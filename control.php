<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 18/03/2019
 * Time: 04:00 PM
 */


$url = $_GET['url']?$_GET['url']:'index';
$URL_BASE = 'http://localhost/tt/maquetasTT/';

if ($_GET['admin']==1){
    $_VISTA = $url;
    include_once 'header_init.php';
    include_once 'layout.php';
    include_once 'fotter_init.php';
    die();
}

if ($_GET['admin']==2){
    $_VISTA = $url;

    include_once 'header_init.php';
    include_once 'layout_panel.php';
    include_once 'fotter_init.php';
    die();
}





include_once 'header.php';
include_once "vis_$url.php";
include_once 'fotter.php';



?>