
<?php
    include("../Template/header.php");
    include_once("../../data/connection.php");
?>
<?php include("../auth/validaADM.php")?>
<?php
   if (isset ($_GET["id"])) 
   {
       $id = $_GET["id"];
       
       $sql = "SELECT * FROM usuario WHERE id_usuario = '". $id . "'";
       $resultado = $connection->query($sql);
       $usuario = $resultado->fetch_assoc();

      

       
?>
<br>
<br>



<div class="form">
        <form action="updateUser.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Editar Usuário</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id do usuário</span>
                </div>
                <input type="number" name="numId" class="form-control" id="numId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $usuario["id_usuario"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                </div>
                <input type="text" name="txtUsuario" class="form-control" id="txtUsuario" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $usuario["user"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                </div>
                <input type="password" name="txtSenha" class="form-control" id="txtSenha" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $usuario["senha"] ?>">
            </div>
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nível de prioridade</span>
                </div>
                <select class="form-select" name="numPrioridade" id="numPrioridade">
                    <?php
                    
                    ?>
                    
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
                <input type="submit" class="btn btn-success" value="Atualizar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../usuario/listUser.php'"  value="Cancelar">
            </div>

        </form>
    </div>


<?php
    }
?>
