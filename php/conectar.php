<?php
    //Configuración de acceso a la base
    define('DB_SERVER', "localhost");
    define('DB_USERNAME', "admin");
    define('DB_PASSWORD', "admin");
    define('DB_DATABASE', "skynet");

    //Realizando conexion
    $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_DATABASE);
?>