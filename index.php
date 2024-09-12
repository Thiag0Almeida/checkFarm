<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link rel="stylesheet" type="text/css" href="Style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <body>
    <header>
      <?php include('navbar.php'); ?>
    </header>
    
    <main>
        <form action="" method="POST">
            <p>
                <label for="">E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label for="">Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>  
        </form>

        <section>
          <h3>O que o sistema faz?</h3>
          <p>1. Cadastra uma pessoa</p>
          <p>2. Exibe os usuários cadastrados</p>
          <p>3. Altera as informações</p>
          <p>4. Exclui os dados</p>
        </section>
    </main>
    
    <footer>
      <?php include('footer.php'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>