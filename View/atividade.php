<?php
    include '../Database/mySql.php';
    require_once '../utilidades.php';

    $query = $mysqli->query("SELECT * FROM atividade order by data_criacao");
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Style/navbar.css">
        <link rel="stylesheet" type="text/css" href="../Style/footer.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Atividades</title>
    </head>
    <body>
        <header>
            <?php include 'navbar.php'; ?>
        </header>
        <main>
        <div>
            <h1>Atividades</h1>
            <p><a href="cadastroAtv.php" class="botao">Criar Atividade</a></p>
            <br>
        </div>
        <section>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Responsável</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data Criação</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        while ($atividade = $query->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?php echo $atividade['nome']; ?></td>
                        <?php
                            $query = $mysqli->query("SELECT * FROM categoria WHERE id_categoria = $atividade[id_fk_categoria]");
                            $categoria = $query->fetch_assoc()['nome'];
                        ?>
                        <td><?php echo $categoria ?></td>
                        <?php
                            $query = $mysqli->query("SELECT * FROM responsavel WHERE id_responsavel = $atividade[id_fk_responsavel]");
                            $responsavel = $query->fetch_assoc()['nome'];
                        ?>
                        <td><?php echo $responsavel ?></td>
                        <td><?php echo $atividade['descricao']?></td>
                        <td><?php echo date("d/m/Y ", strtotime($atividade['data_criacao'])); ?></td>
                        <td></td>
                        <td>
                            <button style="width: 60%; margin-bottom: 1%;" onclick="location.href=''" class="btn btn-success">Editar</button>
                            <button style="width: 60%;" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>
        </main>
        <footer>
            <?php include 'footer.php'?>
        </footer>
    </body>
</html>