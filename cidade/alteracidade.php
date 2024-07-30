<?php
    include('include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
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
    <form action="alteracidadeexe.php" method="post">
        <fieldset>
            <legend>Cadastro Cidade</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <br>
            <div>
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option value="SP"
                    <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>SP</option>
                    <option value="RJ"
                    <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>RJ</option>
                    <option value="MG"
                    <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>MG</option>
                </select>
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