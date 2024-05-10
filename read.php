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
        <h1 class="mb-4">LISTA DE JOGOS</h1>

        <div>
            <?php
                require ('conexao.php');

                function listarRegistros($pdo) {
                    $sql = "SELECT * FROM Jogos";
                    $stmt = $pdo->query($sql);
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                }

                $registros = listarRegistros($pdo);
                ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Plataforma</th>
                        <th>Preço</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>

                <?php
                foreach ($registros as $registro) {
                    ?> 
                    <tr>
                        <td> <?= $registro['ID'] ?> </td>
                        <td> <?= $registro['Titulo'] ?> </td>
                        <td> <?= $registro['Plataforma'] ?> </td>
                        <td> <?= $registro['Preco'] ?> </td>
                        <td><a href="edit.php?ID=<?= $registro['ID'] ?>"> Alterar Registro </a></td>
                        <td><a href="delete.php?ID=<?= $registro['ID'] ?>&Titulo=<?= $registro['Titulo'] ?>"> Excluir Registro </a></td>
                    </tr>
                    <?php 
                }
                echo "</table>";
            ?>
        </div>

        <h6 class="text-center mt-5"><a class="btn btn-primary w-50 border border-dark border-2" href="index.php">Home</a></h6>

    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>