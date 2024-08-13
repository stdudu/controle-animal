<?php
    include('../include/conexao.php');
    $id = $_POST['id'];
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
         echo "Nome: $nome<br>";
         echo "Espécie: $especie<br>";
         echo "Raça: $raca<br>";
         echo "Data de Nascimento: $data_nascimento<br>";
         echo "Castrado: " . $castrado ? "Sim" : "Não". "<br>";
        $castrado = $castrado ? 1 : 0;
        $sql = "";
        if($nome_foto == ""){
        $sql = "UPDATE animal SET
                    nome = '$nome',
                    especie = '$especie',
                    raca = '$raca',
                    data_nascimento = '$data_nascimento',
                    castrado = '$castrado'
                WHERE id = $id";
        }
        else{
        $sql = "UPDATE animal SET
                    foto = '$nome_foto',
                    nome = '$nome',
                    especie = '$especie',
                    raca = '$raca',
                    data_nascimento = '$data_nascimento',
                    castrado = '$castrado'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        }
        if($result){
            echo "Dados atualizados";
        }
        else{
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
        }
    ?>
</body>
</html>