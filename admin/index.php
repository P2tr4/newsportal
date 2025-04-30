<?php
session_start();
    require_once '../inc/db.php';
    require_once ("modelAdmin/modelAdmin.php");
    require_once ("controllerAdmin/controllerAdmin.php");

    include('routeAdmin/routingAdmin.php');//!!!!

    echo $response;