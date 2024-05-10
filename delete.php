<?php
    require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ID = $_GET["ID"];
    $Titulo = $_GET["Titulo"];

    // Função para deletar o registro no banco de dados
    function excluirRegistro($pdo, $ID) {
        $sql = "DELETE FROM Jogos WHERE ID = $ID";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (excluirRegistro($pdo, $ID)) {
    #echo "Registro excluído com sucesso!<br>" . "<a href='index.php'>HOME</a>";
    header("Location: index.php?acao=de&Titulo=$Titulo");
} else {
    echo 'Erro ao excluir o registro.';
}
?>