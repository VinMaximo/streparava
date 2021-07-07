<br>
<?php include("../Template/header.php");
include("../../data/connection.php");
include("../auth/validaADM.php");




//"SELECT coalesce( max( etiqueta ), 0) + 1 FROM controle_montagem"

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite o dia que deseja emitir o relatório</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="../relatorioDia/insertRelatorio.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Digite o dia que deseja emitir o relatório</h3>
            <br>

           
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                </div>
                <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            

            



           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Gerar relatório">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../montagem/createPDC.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>