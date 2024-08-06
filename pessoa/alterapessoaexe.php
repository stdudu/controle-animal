<?php
    include('../include/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];

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
       echo "<h1>Dados da Pessoa</h1>";
       echo "Nome: $nome<br>";
       echo "Email: $email<br>";
       echo "Endereco: $endereco<br>";
       echo "Bairro: $bairro<br>";
       echo "CEP: $cep<br>";
        $sql = "UPDATE pessoa SET
                    nome = '$nome',
                    email = '$email',
                    endereco = '$endereco',
                    bairro = '$bairro',
                    cep = '$cep'
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