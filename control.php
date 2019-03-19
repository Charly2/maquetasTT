<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 18/03/2019
 * Time: 04:00 PM
 */

$url = $_GET['url']?$_GET['url']:'index';
include_once 'header.php';
include_once "vis_$url.php";
include_once 'fotter.php';



?>