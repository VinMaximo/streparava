<?php
include("../Template/header.php");
include_once("../../data/connection.php");

if (isset ($_GET["id"])) 
    {
        $id = $_GET["id"];
        
        $sql = "SELECT * FROM travessa WHERE id_travessa = '" . $id . "'";
        //echo $sql;
        $resultado = $connection->query($sql);
        $travessa = $resultado->fetch_assoc();



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar travessa</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="updateTravessa.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Editar travessa</h3>
            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da travessa</span>
                </div>

                <input type="number" name="travessaId" class="form-control input-sm" id="travessaId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $travessa["id_travessa"]?>" readonly>
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código</span>
                </div>
                <input type="text" name="codigoc" class="form-control" id="codigoc" aria-label="Default" aria-describedby="inputGroup-sizing-default"  value="<?php echo $travessa["codigo"]?>">
            </div>
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de cadastro</span>
                </div>
                <input type="date" name="datec" class="form-control" id="datec" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            



           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../montagem/createPDC.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>

<?php

    }
?>