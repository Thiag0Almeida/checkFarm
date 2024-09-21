<!-- cadastro do responsavel -->
<?php
    include '../Database/mySql.php';
    require_once '../utilidades.php';

    if(isset($_POST['nome'], $_POST['cpf'], $_POST['cargo'], $_POST['telefone'], $_POST['nascimento'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $cargo = $_POST['cargo'];
        $telefone = $_POST['telefone'];
        $idade = $_POST['nascimento'];

        $sql_query = $mysqli->query("INSERT INTO responsavel (nome, cpf, telefone, idade, cargo) VALUE ('$nome', '$cpf', '$telefone', '$idade', '$cargo')");

        if($sql_query){
            Utilidades::alert("Responsável cadastrado!");
        } else{
            Utilidades::alert("Erro ao cadastrar");
        }
    }
?>

<!-- cadastro da categoria -->
<?php
    include '../Database/mySql.php';
    require_once '../utilidades.php';

    if(isset($_POST['nome'], $_POST['prioridade'], $_POST['descricao'])){
        $name = $_POST['nome'];
        $prioridade = $_POST['prioridade'];
        $descricao= $_POST['descricao'];

        $sql_query = $mysqli->query("INSERT INTO categoria (nome, prioridade, descricao) VALUE ('$name', '$prioridade', '$descricao')");

        if($sql_query){
            utilidades::alert("Categoria cadastrada!");
        } else{
            utilidades::alert("Erro no cadastro da categoria.");
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
        <title>Cadástro do Responsável</title>
    </head>
    <body>
        <header>
            <?php include 'navbar.php';?>
        </header>
        
        <main>
        <!-- cadastro do responsavel -->            
            <section>
                <div>
                    <h1>Cadastro do Responsável</h1>
                    <p>Complete as informações do prestador de serviço</p>
                    <br>
                </div>
                
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
            </section>

            <!-- cadastro da categoria -->
            <section>
                <div>
                    <h2>Cadastro da Categoria</h2>
                    <p>Crie uma categoria para as atividades na fazenda</p>
                    <br>
                </div>

                <form action="" method="POST">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required placeholder = "Ex: Cultivo de Plantas">
                    
                    <label for="prioridade">Prioridade</label>
                    <select name="prioridade" id="prioridade">
                        <option selected disabled value="">Selecione</option>
                        <option value="baixa">Baixa</option>
                        <option value="media">Média</option>
                        <option value="alta">Alta</option>
                        <option value="urgente">Urgente</option>
                    </select>
                    
                    <label for="descricao">Descrição</label>                    
                    <textarea rows="6" style="width: 26em" id="descricao" name="descricao" required placeholder="Ex:  Envolve o plantio e manejo de diferentes tipos de culturas, como grãos, frutas, vegetais e ervas."></textarea>
                    <button class="botao" type="submit">Enviar</button> 
                </form>
            </section>
        </main>
        
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>