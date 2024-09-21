<?php
    include '../Database/mySql.php';
    require_once '../utilidades.php';

    if(isset($_POST['nome'], $_POST['categoria'], $_POST['responsavel'], $_POST['descricao'])){
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $responsavel = $_POST['responsavel'];
        $descricao = $_POST['descricao'];

        $query = $mysqli->query("INSERT INTO atividade (nome, id_fk_categoria, id_fk_responsavel, descricao) VALUES ('$nome', '$categoria', '$responsavel', '$descricao')");

        if($query){
            utilidades::alert("Atividade criada com sucesso!");

            $atividade = $mysqli->insert_id;

            $sql_code = $mysqli->query("INSERT INTO status (id_fk_atividade, status_atual) VALUES ('$atividade', 'Inicio')");
        } else{
            utilidades::alert("Não foi possível criar essa atividade.");
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="../Style/navbar.css">
        <link rel="stylesheet" type="text/css" href="../Style/footer.css">
        
        <title>Cria Atividade</title>
    </head>
    <body>
        <header>
            <?php include 'navbar.php';?>
        </header>
        <main>
            <section>
                <div>
                    <h1>Cadastro de Atividade</h1>
                    <p>Cria a atividade que deseja iniciar</p>
                    <br>
                </div>
                <form action="" method="POST">
                    <label for="">Nome</label>
                    <input type="text" name="nome" id="nome">
                    
                    <label for="">Categoria</label>
                    <select name="categoria" id="categoria">
                        <option selected disable value="">Selecione</option>
                        <?php 
                            $sql_query = $mysqli->query("SELECT * FROM categoria");
                            while($categoria = $sql_query->fetch_array()){ 
                        ?>
                            <option value="<?=$categoria["id_categoria"]?>"><?=$categoria["nome"]?></option>
                        <?php    
                            }
                        ?>
                    </select>
                    
                    <label for="">Responsável</label>
                    <select name="responsavel" id="responsavel">
                        <option selected disable value="">Selecione</option>
                        <?php
                            $sql_query = $mysqli->query("SELECT * FROM responsavel");
                            while ($responsavel = $sql_query->fetch_array()){
                        ?>
                            <option value="<?=$responsavel["id_responsavel"]?>"><?=$responsavel["nome"]?></option>
                        <?php
                            }
                        ?>    
                    </select>

                    <label for="descricao">Descrição</label>                    
                    <textarea rows="6" style="width: 26em" id="descricao" name="descricao" required placeholder="Descreva a atividade"></textarea>
                    <button class="botao" type="submit">Criar</button> 
                </form>
            </section> 
        </main>
        <footer>
            <?php include 'footer.php';?>
        </footer>
    </body>
</html>