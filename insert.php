<?php
#"Inserindo dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Titulo = $_POST["Titulo"];
    $Plataforma = $_POST["Plataforma"];
    $Preco = $_POST["Preco"];
    
    // Função para inserir um novo registro no banco de dados
    function InserirRegistro($pdo, $Titulo, $Plataforma, $Preco)
    {
        $sql = "INSERT INTO Jogos (Titulo, Plataforma, Preco) VALUES ('$Titulo', '$Plataforma', $Preco);";
        
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (InserirRegistro($pdo, $Titulo, $Plataforma, $Preco)) {
    # "<br> Registros inseridos com sucesso!<br>" . "<br>" . "<a href='index.php'>HOME</a>";
    header("Location: index.php?acao=in&Titulo=$Titulo");
} else {
    echo 'Erro ao inserir o registro.';
}
?>