<?php include("../Template/header.php");
include("../../data/connection.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM levantamento65f WHERE id_levantamento65 = '" . $id . "'";
    //echo $sql;
    $resultado = $connection->query($sql);
    $levantamento65 = $resultado->fetch_assoc();



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
            <form action="../final65/updateFinal65.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
                <div>
                    <h2>Levantamento diário de produção final - Montagem G65</h2>

                </div>
                <br>

                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">ID do levantamento</span>
                    </div>
                    <input type="number" name="numId" class="form-control" id="numId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["id_levantamento65"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                    </div>
                    <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["data"] ?>">
                </div>



                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">07:00 a 08:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd7" class="form-control" id="numProd7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod7"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time7" class="form-control" id="time7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t7"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs7" class="form-control" id="obs7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs7"] ?>">

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">08:00 a 09:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd8" class="form-control" id="numProd8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod8"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time8" class="form-control" id="time8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t8"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs8" class="form-control" id="obs8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs8"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">09:00 a 10:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd9" class="form-control" id="numProd9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod9"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time9" class="form-control" id="time9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t9"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs9" class="form-control" id="obs9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs9"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">10:00 a 11:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd10" class="form-control" id="numProd10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod10"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time10" class="form-control" id="time10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t10"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs10" class="form-control" id="obs10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs10"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">11:00 a 12:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd11" class="form-control" id="numProd11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod11"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time11" class="form-control" id="time11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t11"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs11" class="form-control" id="obs11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs11"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">12:00 a 13:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd12" class="form-control" id="numProd12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod12"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time12" class="form-control" id="time12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t12"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs12" class="form-control" id="obs12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs12"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">13:00 a 14:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd13" class="form-control" id="numProd13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod13"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time13" class="form-control" id="time13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t13"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs13" class="form-control" id="obs13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs13"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">14:00 a 15:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd14" class="form-control" id="numProd14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod14"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time14" class="form-control" id="time14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t14"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs14" class="form-control" id="obs14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs14"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">15:00 a 16:00</span>
                    </div>


                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd15" class="form-control" id="numProd15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod15"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time15" class="form-control" id="time15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t15"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs15" class="form-control" id="obs15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs15"] ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">16:00 a 16:48</span>
                    </div>

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                    </div>
                    <input type="number" name="numProd16" class="form-control" id="numProd16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod16"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time16" class="form-control" id="time16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t16"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs16" class="form-control" id="obs16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs16"] ?>">
                </div>


                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção total</span>
                    </div>
                    <input type="number" name="numProdt" class="form-control" id="numProdt" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["total"] ?>">

                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta inicial</span>
                </div>
                <select class="form-select" name="numEtiq1" id="numEtiq1" >
                  
                    <?php

                    $sqlQ = "SELECT * FROM g65 ORDER BY etiqueta";

                    $etiq = $connection->query($sqlQ);

                    if ($etiq->num_rows > 0) {

                        while ($row = $etiq->fetch_assoc()) {
                            if ($levantamento65["etiqueta1"] === $row["etiqueta"]) {
                    ?>
                                <option value="<?php echo $row["etiqueta"] ?>" selected>
                                    <?php echo $row["etiqueta"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["etiqueta"] ?>">
                                    <?php echo $row["etiqueta"]  ?>
                                </option>

                                }
                                }
                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>

                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta final</span>
                </div>
                <select class="form-select" name="numEtiq2" id="numEtiq2" >
                  
                    <?php

                    $sqlQ = "SELECT * FROM g65 ORDER BY etiqueta";

                    $etiq = $connection->query($sqlQ);

                    if ($etiq->num_rows > 0) {

                        while ($row = $etiq->fetch_assoc()) {
                            if ($levantamento65["etiqueta2"] === $row["etiqueta"]) {
                    ?>
                                <option value="<?php echo $row["etiqueta"] ?>" selected>
                                    <?php echo $row["etiqueta"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["etiqueta"] ?>">
                                    <?php echo $row["etiqueta"]  ?>
                                </option>

                                }
                                }
                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>






                














                <div class="buttons">

                    <input type="submit" class="btn btn-success" value="Atualizar">
                    <input type="reset" class="btn btn-danger" onclick="window.location.href='../montagem65/listPDC.php'" value="Cancelar">

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