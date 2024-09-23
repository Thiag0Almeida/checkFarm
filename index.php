<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início</title>
    <link rel="stylesheet" type="text/css" href="Style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <body>
    <header>
      <?php include 'View/navbar.php'; ?>
    </header>
    
    <main>
      <section class="section1">
        <div class="divi1">
          <h1 class="titulo1">CHECKFARM</h1>
          <h2 class="titulo2">Organize as atividades da sua equipe!</h2>
          <button onclick="location.href='View/cadastro.php'">Começar</button>
        </div> 
        <img class="imagem1" src="https://png.pngtree.com/png-clipart/20230914/original/pngtree-farm-scene-vector-png-image_11242219.png" alt="">
      </section>

      <section class="section2">
        <h3 class="titulo3">O que o sistema faz?</h3>
        <p><strong>Organiza as atividades:</strong>Mantém um registro claro e detalhado das tarefas da fazenda.</p>
        <p><strong>Controla prazos:</strong> Gerencia os prazos de atividades e tarefas para garantir eficiência.</p>
        <p><strong>Atualiza informações:</strong> Permite a modificação e atualização de dados conforme necessário.</p>
      </section>
    </main>
    
    <footer>
      <?php include 'View/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>