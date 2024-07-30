<?php
    include('include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
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
    <form action="alteraclienteexe.php" method="post">
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
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>">
            </div>
            <br>
            <div>
                <label for="ativo">Ativo</label>
                <input type="radio" name="ativo" id="op-sim" value="sim"<?php echo $row['ativo'] == 0 ? "checked" : ""?>><label>Sim</label>
            </div>
            <div>
                <label for="ativo">Ativo</label>
                <input type="radio" name="ativo" id="op-nao" value="nao"<?php echo $row['senha'] == 0 ? "checked" : ""?>><label>Não</label>
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