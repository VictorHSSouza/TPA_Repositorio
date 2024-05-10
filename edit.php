<?php
require ('conexao.php');

if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($pdo, $ID) {
        $sql = "SELECT * FROM Jogos WHERE ID = $ID";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Listar registros
    $registros = listarRegistros($pdo, $ID);
    foreach ($registros as $registro) {
        if ($registro['ID'] == $ID) {
            $aux = true;
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD ALUNOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="m-0 p-0 text-center">

      <h1 class="my-4">Alterar Registro</h1>
      <form action="update.php" method="post" class="row m-auto container p-0 h5">
        <input type="hidden" name="ID" value="<?= $_GET['ID'] ?>">
        <div class="mt-5 mb-3 col-12 mx-auto row p-0">
            <label for="Titulo" class="col p-0 my-auto">Titulo:</label>
            <input type="text" id="Titulo" name="Titulo" class="col-11 p-1 border border-dark" value="<?= $registro['Titulo'] ?>" required>
        </div>

        <div class="my-3 col-12 mx-auto row p-0">
          <label for="Plataforma" class="col p-0 my-auto">Plataforma:</label>
          <input type="text" id="Plataforma" name="Plataforma" class="col-11 p-1 border border-dark" value="<?= $registro['Plataforma'] ?>" required>
        </div>

        <div class="my-3 col-12 mx-auto row p-0">
            <label for="Preco" class="col p-0 my-auto">Preço:</label>
            <input type="text" id="Preco" name="Preco" class="col-11 p-1 border border-dark" value="<?= $registro['Preco'] ?>" required>
        </div>

        <div class="mt-5 mx-auto p-0">
          <button type="submit" class="btn btn-primary col-3 border border-dark border-2 me-5 text-black">Salvar Alteração</button>
          <a href="read.php" class="btn btn-warning col-3 border border-dark border-2 me-5">Voltar</a>
        </div>
        
      </form>
  </body>
</html>
