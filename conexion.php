<?php

/*
* Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
* Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
*/

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "tiendavirtual";
      
$conexion = mysqli_connect ($servidor,$usuario,"") or die ("Error con el servidor");

$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion con base de datos");

