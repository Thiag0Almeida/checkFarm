<?php
    $host ="localhost";
    $user ="root";
    $pass = ""; 
    $bd ="farm";

    $mysqli = new mysqli($host, $user, $pass, $bd);

    //checa a conexão
    if ($mysqli->connect_errno){
        echo "Erro ao conectar com o banco" . $mysqli->connect_error;
        exit();
    }


// function connect()

// {
//     $pdo = null;
//     if($pdo == null){
//         try{
//             $pdo = new PDO(
//                 'mysql:host=localhost; dbname=farm',
//                 'root',
//                 ''
//             );
//             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (Exception $e){
//             echo 'Erro ao conectar com o banco';
//             error_log($e->getMessage());
//         }
//     }
//     return $pdo;
// }