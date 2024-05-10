<?php
  require ('conexao.php');

  if($_GET) {
    if($_GET['acao'] == 'in') {
      ?>
      <div class="alert alert-success text-center" role="alert">
        Jogo <?= $_GET['Titulo'] ?> Cadastrado!
      </div>
      <?php
    } elseif($_GET['acao'] == 'up') {
      ?>
      <div class="alert alert-success text-center" role="alert">
        Jogo <?= $_GET['Titulo'] ?> Alterado!
      </div>
      <?php
    } elseif($_GET['acao'] == 'de') {
      ?>
      <div class="alert alert-danger text-center" role="alert">
        Jogo <?= $_GET['Titulo'] ?> Deletado!
      </div>
      <?php
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD JOGOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="m-5">
        <h1 class="mb-4">CRUD DE JOGOS</h1>

        <h6><a href="create.php">Adicionar Novo Jogo</a></h6>
        <h6><a href="read.php">Ver Jogos</a></h6>
        
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
