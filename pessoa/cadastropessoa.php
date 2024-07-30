<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('../include/conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];

        echo "<h1>Dados da Pessoa</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Endereco: $endereco<br>";
        echo "Bairro: $bairro<br>";
        echo "CEP: $cep<br>";

        $sql = "INSERT INTO pessoa (nome, email, endereco, bairro, cep, id_cidade)";
        $sql .=
    ?>
</body>
</html>