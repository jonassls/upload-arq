<?php
$Nome_arquivo = $_GET['Nome_arquivo'];
$pastaDestino = "/uploads/";
$apagou = unlink(__DIR__ . $pastaDestino . $Nome_arquivo);
if ($apagou == true) {
    $conexao = mysqli_connect("localhost", "root", "", "upload-arquivos");
    $sql = "DELETE FROM arquivo WHERE Nome_arquivo='$Nome_arquivo'";

    $resultado = mysqli_query($conexao, $sql);
    if ($resultado == false) {
        echo "Erro ao apagar o arquivo do banco de dados.";
        die();
    }
} else {
    echo "Erro ao apagar o arquivo antigo.";
    die();
}
header("location: index.php");
