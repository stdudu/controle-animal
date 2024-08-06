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

    $sql = "SELECT a.id, a.nome nomeanimal, a.especie, a.raca, a.data_nascimento, a.idade, a.castrado, p.nome nomepessoa
    FROM animal a
    LEFT JOIN pessoa p on p.id = a.id_pessoa";
    //executa consulta
    $result = mysqli_query($con, $sql);

    ?>
    <h1 style="text-align: center;">Consulta de animais</h1>
    <table align="center" border="1" width="700" style="background-color: lightblue;">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome Dono</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>

        <?php //mysqli_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomeanimal']."</td>";
                echo "<td>".$row['especie']."</td>";
                echo "<td>".$row['raca']."</td>";
                echo "<td>".$row['data_nascimento']."</td>";
                echo "<td>".$row['idade']."</td>";
                echo "<td>".$row['castrado']."</td>";
                echo "<td>".$row['nomepessoa']."</td>";
                echo "<td><a href = 'alteraanimal.php?id=".$row['id']."'>Alterar<a/>
                </td>";
                echo "<td><a href = 'deletaanimal.php?id=".$row['id']."'>Deletar<a/>
                </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>