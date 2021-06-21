<?php include("../Template/header.php");
include_once("../../data/connection.php");
?>
<?php include("../auth/validaADM.php")?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>

    <br>
    <br>

    <div class="form">
        <form action="insertUser.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastro de Usuário</h3>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Usuário</span>
                </div>
                <input type="text" name="txtUsuario" class="form-control" id="txtUsuario" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                </div>
                <input type="password" name="txtSenha" class="form-control" id="txtSenha" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nível de prioridade</span>
                </div>
                <select class="form-select" name="numPrioridade" id="numPrioridade">

                    <option value="1">
                        <?php echo "1 - Qualidade"  ?>
                    </option>
                    <option value="2">
                        <?php echo "2 - Montagem"  ?>
                    </option>
                    <option value="3">
                        <?php echo "3 - Administrador"  ?>
                    </option>

                </select>


            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Setor</span>
                </div>
                <select class="form-select" name="txtSetor" id="txtSetor">

                    <option value="Qualidade">
                        <?php echo "Qualidade"  ?>
                    </option>
                    <option value="Montagem">
                        <?php echo "Montagem"  ?>
                    </option>
                    <option value="Administrador">
                        <?php echo "Administrador"  ?>
                    </option>

                </select>
            </div>






            <div class="buttons">
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" value="Cancelar">
            </div>

        </form>
    </div>


</body>

</html>