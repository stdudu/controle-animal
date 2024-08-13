<?php
    include('../include/conexao.php');
    $id = $_POST['id'];
    $foto = $_POST['foto'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data'];
    $idade = $_POST['idade'];
    $castrado = $_POST['castrado'] == "sim" ? true : false ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
</head>
<body>
    <h1>Alterando Cliente</h1>
    <?php
         echo "Foto: $foto<br>";
         echo "Nome: $nome<br>";
         echo "Espécie: $especie<br>";
         echo "Raça: $raca<br>";
         echo "Data de Nascimento: $data_nascimento<br>";
         echo "Castrado: " . $castrado ? "Sim" : "Não". "<br>";
        $castrado = $castrado ? 1 : 0;
        $sql = "UPDATE animal SET
                    foto = '$foto',
                    nome = '$nome',
                    especie = '$especie',
                    raca = '$raca',
                    data_nascimento = '$data_nascimento',
                    castrado = '$castrado'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Dados atualizados";
        }
        else{
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
        }
    ?>
</body>
</html>