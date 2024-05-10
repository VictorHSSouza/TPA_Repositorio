<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD JOGOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="m-0 p-0 text-center">

      <h1 class="my-4">Cadastro de Jogos</h1>
      <form action="insert.php" method="post" class="row container m-auto p-0 h5">
        <div class="mt-5 mb-3 col-12 mx-auto row p-0">
            <label for="Titulo" class="col p-0 my-auto">Titulo:</label>
            <input type="text" id="Titulo" name="Titulo" class="col-11 p-1 border border-dark" required>
        </div>

        <div class="my-3 col-12 mx-auto row p-0">
          <label for="Plataforma" class="col p-0 my-auto">Plataforma:</label>
          <input type="text" id="Plataforma" name="Plataforma" class="col-11 p-1 border border-dark" required>
        </div>

        <div class="my-3 col-12 mx-auto row p-0">
            <label for="Preco" class="col p-0 my-auto">Preço:</label>
            <input type="text" id="Preco" name="Preco" class="col-11 p-1 border border-dark" required>
        </div>

        <div class="mt-5 mx-auto p-0">
          <button type="submit" class="btn btn-success col-3 border border-dark border-2 me-5">Enviar</button>
          <a href="read.php" class="btn btn-primary col-3 border border-dark border-2 me-5">Ver Dados</a>
          <button type="reset" class="btn btn-danger col-3 border border-dark border-2">Limpar</button>
          <h6 class="text-center mt-4"><a class="btn btn-warning col-3 border border-dark border-2" href="index.php">Home</a></h6>
        </div>
        
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
