<?php
    $host ="localhost";
    $user ="root";
    $pass = ""; 
    $bd ="fazenda";

    $mysqli = new mysqli($host, $user, $pass, $bd);

    //checa a conexão
    if ($mysqli->connect_errno){
        echo "Erro ao conectar com o banco" . $mysqli->connect_error;
        exit();
    }