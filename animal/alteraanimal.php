<?php
    include('../include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM animal WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="alteraanimalexe.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Cadastro de Animal</legend>
            <div>
                <?php
                if($row['foto'] != ""){
                    echo "<td><img src='".$row['foto']."' width='80' heigth='100'></td>";
                }
                ?>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*" value="<?php echo $row['foto']?>">
            </div>
            <br>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <br>
            <div>
                <label for="especie">Espécie</label>
                <input type="text" name="especie" id="especie" value="<?php echo $row['especie']?>">
            </div>
            <br>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca" value="<?php echo $row['raca']?>">
            </div>
            <br>
            <div>
                <label for="data">Data de Nascimento</label>
                <input type="date" name="data" id="data" value="<?php echo $row['data_nascimento']?>">
            </div>
            <br>
            <div>
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade" value="<?php echo $row['idade']?>">
            </div>
            <br>
            <div>
                <label for="castrado">Ativo</label>
                <input type="radio" name="castrado" id="op-sim" value="sim"<?php echo $row['castrado'] == 0 ? "checked" : ""?>><label>Sim</label>
            </div>
            <div>
                <label for="castrado">Ativo</label>
                <input type="radio" name="castrado" id="op-nao" value="nao"<?php echo $row['castrado'] == 0 ? "checked" : ""?>><label>Não</label>
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