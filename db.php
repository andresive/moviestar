<?php 
    // iniciando uma sessao 
    session_start();


    // conect to data base mysql with PDO conection
    $db_name = "moviestar";
    $db_host = $_SERVER["SERVER_NAME"]; 
    $db_user = "root";
    $db_pass = "";

    $conn = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

    // enable errors 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);