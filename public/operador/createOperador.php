<?php include("../Template/header.php");
include("../../data/connection.php");


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo operador</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertOperador.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastrar um novo operador</h3>
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
            



           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../home/home.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>