<?php
    include('../include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro da cidade</title>
</head>
<body>
    <form action="alterapessoaexe.php" method="post">
        <fieldset>
            <legend>Cadastro Cidade</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $row['email']?>">
            </div>
            <br>
            <div>
                <label for="endereco">Endereco</label>
                <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>">
            </div>
            <br>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>">
            </div>
            <br>
            <div>
                <label for="cep">CEP</label>
                <input type="number" name="cep" id="cep" value="<?php echo $row['cep']?>">
            </div>
            <br>
            <div>
                <input type="hidden" name="id" 
                value="<?php echo $row['id']?>">
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>