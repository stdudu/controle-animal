<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro da cidade</title>
</head>
<body>
    <!-- <header>
        <div class="cidade">
            <label for="ciadade">Cidade</label>
            <a href="http://localhost/controle-animal/cidade/cadastrocidade.html"><button>Cadastrar Cidade</button></a>
            <a href="http://localhost/controle-animal/cidade/listarcidade.php"><button>Listar Cidade</button></a>
        </div>
        <div class="pessoa">
            <a href="http://localhost/controle-animal/pessoa/cadastropessoaexe.php"><button>Cadastrar Pessoa</button></a>
            <a href="http://localhost/controle-animal/pessoa/listarpessoa.php"><button>Listar Pessoa</button></a>
        </div>
        <div class="animal">
            <a href="http://localhost/controle-animal/animal/cadastroanimalexe.php"><button>Cadastrar Animal</button></a>
            <a href="http://localhost/controle-animal/animal/listaranimal.php"><button>Listar Animal</button></a>
        </div>
    </header> -->
    <form class="container" action="cadastroanimal.php" method="post" enctype="multipart/form-data">
        <div class="card">
            <a class="singup">Cadastrar Animal</a>
            <div class="inputbox1">
                <br>
                <label for="foto">Foto</label>
                <input  type="file" name="foto" id="foto" accept="image/*">
            </div>
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
                <label for="raca">Raça</label>
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

                <input type="radio" name="castrado" value="1" id="castrado">
                <label for="op-nao">Não</label>
            </div>
            <br>
            <div class="inputbox">
                <label for="pessoa">Nome dono</label>
                <select name="pessoa" id="pessoa">
                    <?php
                    include('../include/conexao.php');
                    $sql = "SELECT * FROM pessoa";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."</option>";
                    }
                    ?>
                </select>
            </div>
            <br>
                <button class="enter" type="submit">Cadastrar</button>
        </fieldset>
    </div>
    <br>
    <div>
        <a href="../index.html">Voltar a tela inicial</a>
    </div>
    </form>
</body>
</html>