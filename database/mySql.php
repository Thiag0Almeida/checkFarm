<?php

function connect()

{
    $pdo = null;
    if($pdo == null){
        try{
            $pdo = new PDO(
                'mysql:host=localhost; dbname=login',
                'root',
                ''
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e){
            echo 'Erro ao conectar com o banco';
            error_log($e->getMessage());
        }
    }
    return $pdo;
}