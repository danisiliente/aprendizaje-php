<?php

//Credenciales de base de datos

function conectar_db(){

    $db = mysqli_connect('localhost', 'root', '', 'hotel');

    if(!$db){
        'No se pudo conectar a la base de datos';
        exit;
    }else{
        echo 'Conexión exitosa';

    }

    return $db;
}

