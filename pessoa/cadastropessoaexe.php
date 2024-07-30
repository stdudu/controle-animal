<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro da cidade</title>
</head>
<body>
    <form class="container" action="cadastropessoa.php" method="post">
        <div class="card">
            <a class="singup">Cadastrar Pessoa</a>
            <div class="inputbox1">
                <br>
                <label for="nome">Nome</label>
                <input  type="text" name="nome" id="nome">
            </div>
            <br>
            <div class="inputbox">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <br>
            <div class="inputbox">
                <label for="endereco">Endereco</label>
                <input type="text" name="endereco" id="endereco">
            </div>
            <br>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">
            </div>
            <br>
            <div class="inputbox">
                <label for="cep">CEP</label>
                <input type="number" name="cep" id="cep">
            </div>
            <br>
            <div class="inputbox">
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                    include('../include/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                    ?>
                </select>
            </div>
            <br>
                <button class="enter" type="submit">Cadastrar</button>
        </fieldset>
    </div>
    </form>
</body>
</html>