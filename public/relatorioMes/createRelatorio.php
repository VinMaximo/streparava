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
        <form action="../relatorioMes/insertRelatorio.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Digite o dia ou o mês que deseja emitir o relatório</h3>
            <br>

           
            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mês</span>
                </div>
                <select class="form-select" name="numMes" id="numMes">

                    <option value="1">
                        <?php echo "Janeiro"  ?>
                    </option>
                    <option value="2">
                        <?php echo "Fevereiro"  ?>
                    </option>
                    <option value="3">
                        <?php echo "Março"  ?>
                    </option>
                    <option value="4">
                        <?php echo "Abril"  ?>
                    </option>
                    <option value="5">
                        <?php echo "Maio"  ?>
                    </option>
                    <option value="6">
                        <?php echo "Junho"  ?>
                    </option>
                    <option value="7">
                        <?php echo "Julho"  ?>
                    </option>
                    <option value="8">
                        <?php echo "Agosto"  ?>
                    </option>
                    <option value="9">
                        <?php echo "Setembro"  ?>
                    </option>
                    <option value="10">
                        <?php echo "Outubro"  ?>
                    </option>
                    <option value="11">
                        <?php echo "Novembro"  ?>
                    </option>
                    <option value="12">
                        <?php echo "Dezembro"  ?>
                    </option>


                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Digite o ano</span>
                </div>
                <input type="number" name="numAno" class="form-control" id="numAno" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            



           
            
            <div class="buttons">
                
                <input type="submit" class="btn btn-success btn-sm" value="Cadastrar">
                <input type="reset" class="btn btn-danger btn-sm"  onclick="window.location.href='../montagem/createPDC.php'" value="Cancelar">

            </div>
            


            
        </form>
    </div>


</body>
</html>