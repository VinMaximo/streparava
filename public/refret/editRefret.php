<?php include("../Template/header.php");
include("../../data/connection.php");
include("../auth/validaQualidade.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM refret WHERE  id_refret = '" . $id . "'";
    //echo $sql;
    $resultado = $connection->query($sql);
    $refret = $resultado->fetch_assoc();



?>



    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Levantamento de produção final</title>
    </head>

    <body>
        <br>
        <br>


        <div class="form">
        <form action="../refret/updateRefret.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <div>
                <h2>Levantamento diário de produção final - Refugo</h2>

            </div>
            <br>


            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id do levantamento </span>
                </div>
                <input type="number" name="numId" class="form-control" id="numId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["id_refret"] ?>" readonly>

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                </div>
                <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["data"] ?>" >
            </div>


            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Retrabalho - braço</span>
                </div>
                <input type="number" name="numBra" class="form-control" id="numBra" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["retrabalho_braco"] ?>" >

            </div>



            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Refugo - braço</span>
                </div>
                <input type="number" name="numBrar" class="form-control" id="numBrar" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["refugo_braco"] ?>" >

            </div>

            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Retrabalho - suporte/tirante</span>
                </div>
                <input type="number" name="numSup" class="form-control" id="numSup" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["retrabalho_tirante"] ?>" >

            </div>



            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Refugo - suporte/tirante</span>
                </div>
                <input type="number" name="numSupr" class="form-control" id="numSupr" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["refugo_tirante"] ?>" >

            </div>

            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Retrabalho - travessa</span>
                </div>
                <input type="number" name="numTra" class="form-control" id="numTra" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["retrabalho_travessa"] ?>" >

            </div>



            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Refugo - travessa</span>
                </div>
                <input type="number" name="numTrar" class="form-control" id="numTrar" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["refugo_travessa"] ?>" >

            </div>

            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Retrabalho - roda </span>
                </div>
                <input type="number" name="numRod" class="form-control" id="numRod" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["retrabalho_roda"] ?>" >

            </div>



            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Refugo - roda</span>
                </div>
                <input type="number" name="numRodr" class="form-control" id="numRodr" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["refugo_roda"] ?>" >

            </div>

            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Retrabalho - montagem final</span>
                </div>
                <input type="number" name="numFin" class="form-control" id="numFin" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["retrabalho_montagem"] ?>" >

            </div>



            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Refugo - montagem final</span>
                </div>
                <input type="number" name="numFinr" class="form-control" id="numFinr" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["refugo_montagem"] ?>" >

            </div>

            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Retrabalho - pintura</span>
                </div>
                <input type="number" name="numPint" class="form-control" id="numPint" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["refugo_pintura"] ?>" >

            </div>



            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Refugo - pintura</span>
                </div>
                <input type="number" name="numPintr" class="form-control" id="numPintr" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["retrabalho_pintura"] ?>" >

            </div>


            <div class="input-group mb-3">


                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <input type="text" name="txtObs" class="form-control" id="txtObs" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $refret["observacoes"] ?>" >

            </div>



            <div class="buttons">

                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../montagem35/listPDC.php'" value="Cancelar">

            </div>




        </form>
        </div>


    </body>
    <br>
    <br>

    </html>

<?php

}
?>