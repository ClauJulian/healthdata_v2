<?php

function conexion(){
    // Conexion Local

    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDatos="info_hd";

    // Conexion InfinityFree

    // $servidor="sql110.infinityfree.com";
    // $usuario="if0_37145433";
    // $clave="LC3B39i4NSA";

    // $baseDatos="if0_37145433_info_hd";
    

    //conectar con el servidor

    $conectar= mysqli_connect ($servidor, $usuario, $clave);

    //seleccionar la Base de Datos

    mysqli_select_db($conectar, $baseDatos);

    //echo "<pre>";
    //print_r($conectar);
    //echo "</pre>";

    return $conectar;

}

?>