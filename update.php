<?php
#echo "Atualizando dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST["ID"];
    $Titulo = $_POST["Titulo"];
    $Plataforma = $_POST["Plataforma"];
    $Preco = $_POST["Preco"];
 
    // Função para Atualizar o registro no banco de dados
    function atualizarRegistro($pdo, $ID, $Titulo, $Plataforma, $Preco) {
        $sql = "UPDATE Jogos SET Titulo='$Titulo',Plataforma='$Plataforma', Preco='$Preco' WHERE ID=$ID";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (atualizarRegistro($pdo, $ID, $Titulo, $Plataforma, $Preco)) {
    #echo "Registro atualizado com sucesso!<br>" . "<a href='index.php'>HOME</a>";
    header("Location: index.php?acao=up&Titulo=$Titulo");
} else {
    echo 'Erro ao inserir o registro.';
}
?>