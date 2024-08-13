<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: azure;">
    <?php

    include("../include/conexao.php");

    $sql = "SELECT * FROM cidade";
    //executa consulta
    $result = mysqli_query($con, $sql);

    ?>

    <h1 style="text-align: center;">Consulta de cidades</h1>
    <table align="center" border="1" width="500" style="background-color: lightblue;">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>

        <?php //mysqli_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href = 'alteracidade.php?id=".$row['id']."'>Alterar<a/></td>
                </td>";
                echo "<td><a href = 'deletacidade.php?id=".$row['id']."'>Deletar<a/></td>
                </td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <div>
        <a href="../index.html">Voltar a tela inicial</a>
    </div>
</body>
</html>