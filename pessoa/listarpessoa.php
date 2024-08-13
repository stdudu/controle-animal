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

    $sql = "SELECT p.id, p.nome nomepessoa, p.email, p.endereco, p.bairro, p.cep, cid.nome nomecidade, cid.estado
    FROM pessoa p 
    LEFT JOIN cidade cid on cid.id = p.id_cidade";
    //executa consulta
    $result = mysqli_query($con, $sql);

    ?>
    <h1 style="text-align: center;">Consulta de pessoas</h1>
    <table align="center" border="1" width="80%" style="background-color: lightblue;">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>

        <?php //mysqli_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomepessoa']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href = 'alterapessoa.php?id=".$row['id']."'>Alterar<a/>
                </td>";
                echo "<td><a href = 'deletapessoa.php?id=".$row['id']."'>Deletar<a/>
                </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>