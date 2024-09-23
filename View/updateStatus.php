<?php 
    include '../Database/mySql.php';

    $atividadeId = $_GET['id_atividade'];
    $action = $_GET['action'];

    // $query=$mysqli->query("SELECT * FROM status WHERE id_fk_atividade = $atividadeId") ;
    // $status = $query->fetch_assoc()['status_atual'];


    if($action == 'iniciar'){
        $query = $mysqli->query("UPDATE status SET status_atual = 'Inicio', data_hora = NOW()  WHERE id_fk_atividade = $atividadeId");  
    } elseif($action =='pausar'){
        $sql_query = $mysqli->query("UPDATE status SET status_atual = 'Pausa', data_hora = NOW()  WHERE id_fk_atividade = $atividadeId");    
    } else{ 
        $sql_query = $mysqli->query("UPDATE status SET status_atual = 'Finalizado', data_hora = NOW()  WHERE id_fk_atividade = $atividadeId"); 
    }


    header("Location: atividade.php");
    exit();

    

    

?>