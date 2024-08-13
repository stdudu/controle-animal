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
        // UPLOAD FOTO
        $nome_foto = "";
        if(file_exists($_FILES['foto']['tmp_name'])){
            $pasta_destino = 'fotos/';
            $extensao = strtolower(substr($_FILES['foto']['name'], -4));
            $nome_foto = $pasta_destino . date('Ymd-His').$extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
        }
        // FIM UPLOAD
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $data_nascimento = $_POST['data'];
        $idade = $_POST['idade'];
        $castrado = $_POST['castrado'] == "sim" ? true : false ;
        $pessoa = $_POST['pessoa'];

        echo "<h1>Dados da Pessoa</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data de Nascimento: $data_nascimento<br>";
        echo "Castrado: " . $castrado ? "Sim" : "Não". "<br>";

        $sql = "INSERT INTO animal (nome, especie, raca, data_nascimento, idade, castrado, id_pessoa)";
        $sql .= " VALUES ('".$nome."','".$especie."','".$raca."','".$data_nascimento."','".$idade."','".$castrado."','".$pessoa."')";
        echo $sql;

        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<h2>Dados cadastrados com sucesso<h2>";
        } else {
            echo "<h2>Erro ao cadastrar<h2>";
            echo mysqli_error($con);
        }
    ?>
</body>
</html>