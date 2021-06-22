<?php include("../Template/header.php");
include("../../data/connection.php");
include("../auth/validaADM.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar operador</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="updateOperador.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Editar operador</h3>
            <br>

            
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome do operador</span>
                </div>
                <input type="text" name="txtNome" class="form-control" id="txtNome" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Matrícula</span>
                </div>
                <input type="number" name="numMatricula" class="form-control" id="numMatricula" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Situação</span>
                </div>
                <select class="form-select" name="txtGama" id="txtGama">

                    <option value="Ativo">
                        <?php echo "Ativo"  ?>
                    </option>
                    <option value="Inativo">
                        <?php echo "Inativo"  ?>
                    </option>
                   

                </select>
            </div>



           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Confirmar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>