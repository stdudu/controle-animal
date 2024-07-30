<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro da cidade</title>
</head>
<body>
    <form class="container" action="" method="post">
        <div class="card">
            <a class="singup">Cadastrar Pessoa</a>
            <div class="inputbox1">
                <br>
                <label for="nome">Nome</label>
                <input  type="text" name="nome" id="nome">
            </div>
            <br>
            <div class="inputbox">
                <label for="especie">Especie</label>
                <input type="text" name="especie" id="especie">
            </div>
            <br>
            <div class="inputbox">
                <label for="raca">Raa</label>
                <input type="text" name="raca" id="raca">
            </div>
            <br>
                <label for="data">Data de Nascimento</label>
                <input type="date" name="data" id="data">
            </div>
            <br>
            <div class="inputbox">
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade">
            </div>
            <br>
            <div class="inputbox">
            <label for="castrado">Castrado</label>
                <input type="radio" name="castrado" value="0" id="castrado">
                <label for="op-sim">Sim</label>

                <input type="radio" name="cadastro" value="1" id="castrado">
                <label for="op-nao">Não</label>
            </div>
            <br>
                <button class="enter" type="submit">Cadastrar</button>
        </fieldset>
    </div>
    </form>
</body>
</html>