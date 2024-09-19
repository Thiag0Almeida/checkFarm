<?php
    include '../Database/mySql.php';
    require_once '../utilidades.php';

    if(isset($_POST['nome'], $_POST['cpf'], $_POST['cargo'], $_POST['telefone'], $_POST['nascimento'])){
      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $cargo = $_POST['cargo'];
      $telefone = $_POST['telefone'];
      $idade = $_POST['nascimento'];

      $sql_code = "INSERT INTO responsavel (nome, cpf, telefone, idade, cargo) VALUE ('$nome', '$cpf', '$telefone', '$idade', '$cargo')";
      $sql_query = $mysqli->query($sql_code);

      if($sql_query){
        Utilidades::alert("Responsável cadastrado!");
      } else{
        Utilidades::alert("Erro ao cadastrar");
      }
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadástro do Responsável</title>
    </head>
    <body>
        <header>
            <?php include('navbar.php');?>
        </header>
        <main>
        <div>
            <h1>Cadastro do Responsável</h1>
            <p>Complete as informações do prestador de serviço</p>
            <br>
        </div>
        <!-- onsubmit="return validarFormulario();" -->
        <form action="" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required autocomplete="name">
            <label for="nascimento">Data de nascimento</label>
            <input type="date" name="nascimento" id="nascimento" required>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" required placeholder="123.456.789-00">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" placeholder="(12)93456-7890" autocomplete="tel">
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo" required autocomplete="organization-title">

            <button class="botao" type="submit">Enviar</button>   
        </form>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>