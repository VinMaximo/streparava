<br>
<?php include("../Template/header.php");
include("../../data/connection.php");


//"SELECT coalesce( max( etiqueta ), 0) + 1 FROM controle_montagem"

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo código de travessa</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertTravessa.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Cadastrar um novo código de travessa</h3>
            <br>

           
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código</span>
                </div>
                <input type="text" name="codigo" class="form-control" id="codigo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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