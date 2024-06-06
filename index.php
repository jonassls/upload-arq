<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione o arquivo:
        <input type="file" name="arquivo"><br>
        <input type="submit" value="Enviar">
    </form>
    <table>
        <tbody>
            <?php
            foreach ($arquivo as $arquivo) {
                echo "<tr><td>" . $arquivo['nome_arquivo'] . "</td>";
                echo "<td><a href='alterar.php?nome_arquivo=".
                $arquivo['Nome_arquivo']."'>Alterar</td>";
                echo "<td><button>Excluir</button></td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>