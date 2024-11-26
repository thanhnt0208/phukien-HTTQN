<?php 
include "config.php";
session_start();
$baseurl="http://localhost/phukien-HTTQN";
$action=$_GET['action']??"";
include "controller/controller.php";