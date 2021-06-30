<?php include("../Template/header.php");
include("../../data/connection.php");

if (isset($_GET["data"])) {
    $dt = $_GET["data"];

    $sql = "SELECT * FROM levantamento35f WHERE data = '" . $dt . "'";

    $resultado = $connection->query($sql);
    $levantamento35 = $resultado->fetch_assoc();

    if ($levantamento35 != null) {

?>



        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Levantamento de produção final G35</title>
        </head>

        <body>
            <br>
            <br>


            <div class="form" style="margin-left: 100px; margin-right: 100px;">

                <div>
                    <h2>Gama 35</h2>

                </div>
                <br>

                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">ID do levantamento</span>
                    </div>
                    <input type="number" name="numId" class="form-control" id="numId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["id_levantamento35"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                    </div>
                    <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["data"] ?>" readonly>
                </div>

                <?php
                if ($levantamento35["prod7"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">07:00 a 08:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd7" class="form-control" id="numProd7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time7" class="form-control" id="time7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs7" class="form-control" id="obs7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs7"] ?>" readonly>

                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento35["prod8"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">08:00 a 09:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd8" class="form-control" id="numProd8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time8" class="form-control" id="time8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs8" class="form-control" id="obs8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs8"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento35["prod9"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">09:00 a 10:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd9" class="form-control" id="numProd9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time9" class="form-control" id="time9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs9" class="form-control" id="obs9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs9"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento35["prod10"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">10:00 a 11:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd10" class="form-control" id="numProd10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time10" class="form-control" id="time10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs10" class="form-control" id="obs10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs10"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento35["prod11"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">11:00 a 12:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd11" class="form-control" id="numProd11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time11" class="form-control" id="time11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs11" class="form-control" id="obs11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs11"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento35["prod12"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">12:00 a 13:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd12" class="form-control" id="numProd12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time12" class="form-control" id="time12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs12" class="form-control" id="obs12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs12"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento35["prod13"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">13:00 a 14:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd13" class="form-control" id="numProd13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time13" class="form-control" id="time13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs13" class="form-control" id="obs13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs13"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento35["prod14"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">14:00 a 15:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd14" class="form-control" id="numProd14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time14" class="form-control" id="time14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs14" class="form-control" id="obs14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs14"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento35["prod15"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">15:00 a 16:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd15" class="form-control" id="numProd15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time15" class="form-control" id="time15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs15" class="form-control" id="obs15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs15"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento35["prod16"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">16:00 a 16:48</span>
                        </div>

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd16" class="form-control" id="numProd16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time16" class="form-control" id="time16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs16" class="form-control" id="obs16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs16"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção total</span>
                    </div>
                    <input type="number" name="numProdt" class="form-control" id="numProdt" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["total"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta inicial</span>
                    </div>
                    <select class="form-select" disabled="disabled" name="numEtiq1" id="numEtiq1">

                        <?php

                        $sqlQ = "SELECT * FROM g35 ORDER BY etiqueta";

                        $etiq = $connection->query($sqlQ);

                        if ($etiq->num_rows > 0) {

                            while ($row = $etiq->fetch_assoc()) {
                                if ($levantamento35["etiqueta1"] === $row["etiqueta"]) {
                        ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" selected>
                                        <?php echo $row["etiqueta"]  ?>
                                    </option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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
                    <select class="form-select" disabled="disabled" name="numEtiq2" id="numEtiq2">

                        <?php

                        $sqlQ = "SELECT * FROM g35 ORDER BY etiqueta";

                        $etiq = $connection->query($sqlQ);

                        if ($etiq->num_rows > 0) {

                            while ($row = $etiq->fetch_assoc()) {
                                if ($levantamento35["etiqueta2"] === $row["etiqueta"]) {
                        ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" selected>
                                        <?php echo $row["etiqueta"]  ?>
                                    </option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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







            </div>


        </body>
        <br>
        <br>

        </html>


    <?php
    }

    $sql = "SELECT * FROM levantamento50f WHERE data = '" . $dt . "'";

    $resultado = $connection->query($sql);
    $levantamento50 = $resultado->fetch_assoc();

    if ($levantamento50 != null) {

    ?>



        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Levantamento de produção final G50</title>
        </head>

        <body>
            <br>
            <br>


            <div class="form" style="margin-left: 100px; margin-right: 100px;">

                <div>
                    <h2>Gama 50</h2>

                </div>
                <br>

                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">ID do levantamento</span>
                    </div>
                    <input type="number" name="numId" class="form-control" id="numId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["id_levantamento50"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                    </div>
                    <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["data"] ?>" readonly>
                </div>

                <?php
                if ($levantamento50["prod7"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">07:00 a 08:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd7" class="form-control" id="numProd7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time7" class="form-control" id="time7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs7" class="form-control" id="obs7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs7"] ?>" readonly>

                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento50["prod8"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">08:00 a 09:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd8" class="form-control" id="numProd8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time8" class="form-control" id="time8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs8" class="form-control" id="obs8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs8"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento50["prod9"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">09:00 a 10:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd9" class="form-control" id="numProd9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time9" class="form-control" id="time9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs9" class="form-control" id="obs9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs9"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento50["prod10"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">10:00 a 11:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd10" class="form-control" id="numProd10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time10" class="form-control" id="time10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs10" class="form-control" id="obs10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs10"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento50["prod11"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">11:00 a 12:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd11" class="form-control" id="numProd11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time11" class="form-control" id="time11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs11" class="form-control" id="obs11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs11"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento50["prod12"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">12:00 a 13:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd12" class="form-control" id="numProd12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time12" class="form-control" id="time12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs12" class="form-control" id="obs12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs12"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento50["prod13"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">13:00 a 14:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd13" class="form-control" id="numProd13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time13" class="form-control" id="time13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs13" class="form-control" id="obs13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs13"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento50["prod14"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">14:00 a 15:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd14" class="form-control" id="numProd14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time14" class="form-control" id="time14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs14" class="form-control" id="obs14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs14"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento50["prod15"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">15:00 a 16:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd15" class="form-control" id="numProd15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time15" class="form-control" id="time15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs15" class="form-control" id="obs15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs15"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento50["prod16"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">16:00 a 16:48</span>
                        </div>

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd16" class="form-control" id="numProd16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["prod16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time16" class="form-control" id="time16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["t16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs16" class="form-control" id="obs16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["obs16"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção total</span>
                    </div>
                    <input type="number" name="numProdt" class="form-control" id="numProdt" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento50["total"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta inicial</span>
                    </div>
                    <select class="form-select" disabled="disabled" name="numEtiq1" id="numEtiq1">

                        <?php

                        $sqlQ = "SELECT * FROM g50 ORDER BY etiqueta";

                        $etiq = $connection->query($sqlQ);

                        if ($etiq->num_rows > 0) {

                            while ($row = $etiq->fetch_assoc()) {
                                if ($levantamento50["etiqueta1"] === $row["etiqueta"]) {
                        ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" selected>
                                        <?php echo $row["etiqueta"]  ?>
                                    </option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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
                    <select class="form-select" disabled="disabled" name="numEtiq2" id="numEtiq2">

                        <?php

                        $sqlQ = "SELECT * FROM g50 ORDER BY etiqueta";

                        $etiq = $connection->query($sqlQ);

                        if ($etiq->num_rows > 0) {

                            while ($row = $etiq->fetch_assoc()) {
                                if ($levantamento50["etiqueta2"] === $row["etiqueta"]) {
                        ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" selected>
                                        <?php echo $row["etiqueta"]  ?>
                                    </option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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







            </div>


        </body>
        <br>
        <br>

        </html>


    <?php
    }

    $sql = "SELECT * FROM levantamento65f WHERE data = '" . $dt . "'";

    $resultado = $connection->query($sql);
    $levantamento65 = $resultado->fetch_assoc();

    if ($levantamento65 != null) {

    ?>



        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Levantamento de produção final G65</title>
        </head>

        <body>
            <br>
            <br>


            <div class="form" style="margin-left: 100px; margin-right: 100px;">

                <div>
                    <h2>Gama 65</h2>

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
                    <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["data"] ?>" readonly>
                </div>

                <?php
                if ($levantamento65["prod7"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">07:00 a 08:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd7" class="form-control" id="numProd7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time7" class="form-control" id="time7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs7" class="form-control" id="obs7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs7"] ?>" readonly>

                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento65["prod8"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">08:00 a 09:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd8" class="form-control" id="numProd8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time8" class="form-control" id="time8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs8" class="form-control" id="obs8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs8"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento65["prod9"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">09:00 a 10:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd9" class="form-control" id="numProd9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time9" class="form-control" id="time9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs9" class="form-control" id="obs9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs9"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento65["prod10"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">10:00 a 11:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd10" class="form-control" id="numProd10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time10" class="form-control" id="time10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs10" class="form-control" id="obs10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs10"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento65["prod11"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">11:00 a 12:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd11" class="form-control" id="numProd11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time11" class="form-control" id="time11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs11" class="form-control" id="obs11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs11"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento65["prod12"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">12:00 a 13:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd12" class="form-control" id="numProd12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time12" class="form-control" id="time12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs12" class="form-control" id="obs12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs12"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento65["prod13"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">13:00 a 14:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd13" class="form-control" id="numProd13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time13" class="form-control" id="time13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs13" class="form-control" id="obs13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs13"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento65["prod14"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">14:00 a 15:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd14" class="form-control" id="numProd14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time14" class="form-control" id="time14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs14" class="form-control" id="obs14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs14"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento65["prod15"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">15:00 a 16:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd15" class="form-control" id="numProd15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time15" class="form-control" id="time15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs15" class="form-control" id="obs15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs15"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento65["prod16"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">16:00 a 16:48</span>
                        </div>

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd16" class="form-control" id="numProd16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["prod16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time16" class="form-control" id="time16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["t16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs16" class="form-control" id="obs16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["obs16"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção total</span>
                    </div>
                    <input type="number" name="numProdt" class="form-control" id="numProdt" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento65["total"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta inicial</span>
                    </div>
                    <select class="form-select" disabled="disabled" name="numEtiq1" id="numEtiq1">

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
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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
                    <select class="form-select" disabled="disabled" name="numEtiq2" id="numEtiq2">

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
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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







            </div>


        </body>
        <br>
        <br>

        </html>

    <?php
    }
    $sql = "SELECT * FROM levantamento70f WHERE data = '" . $dt . "'";

    $resultado = $connection->query($sql);
    $levantamento70 = $resultado->fetch_assoc();

    if ($levantamento70 != null) {

    ?>



        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Levantamento de produção final G70</title>
        </head>

        <body>
            <br>
            <br>


            <div class="form" style="margin-left: 100px; margin-right: 100px;">

                <div>
                    <h2>Gama 70</h2>

                </div>
                <br>

                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">ID do levantamento</span>
                    </div>
                    <input type="number" name="numId" class="form-control" id="numId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["id_levantamento70"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                    </div>
                    <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["data"] ?>" readonly>
                </div>

                <?php
                if ($levantamento70["prod7"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">07:00 a 08:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd7" class="form-control" id="numProd7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time7" class="form-control" id="time7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t7"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs7" class="form-control" id="obs7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs7"] ?>" readonly>

                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento70["prod8"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">08:00 a 09:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd8" class="form-control" id="numProd8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time8" class="form-control" id="time8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t8"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs8" class="form-control" id="obs8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs8"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento70["prod9"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">09:00 a 10:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd9" class="form-control" id="numProd9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time9" class="form-control" id="time9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t9"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs9" class="form-control" id="obs9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs9"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento70["prod10"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">10:00 a 11:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd10" class="form-control" id="numProd10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time10" class="form-control" id="time10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t10"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs10" class="form-control" id="obs10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs10"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento70["prod11"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">11:00 a 12:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd11" class="form-control" id="numProd11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time11" class="form-control" id="time11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t11"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs11" class="form-control" id="obs11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs11"] ?>" readonly>
                    </div>


                <?php
                }
                ?>

                <?php
                if ($levantamento70["prod12"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">12:00 a 13:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd12" class="form-control" id="numProd12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time12" class="form-control" id="time12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t12"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs12" class="form-control" id="obs12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs12"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento70["prod13"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">13:00 a 14:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd13" class="form-control" id="numProd13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time13" class="form-control" id="time13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t13"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs13" class="form-control" id="obs13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs13"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <?php
                if ($levantamento70["prod14"] != 0) {
                ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">14:00 a 15:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd14" class="form-control" id="numProd14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time14" class="form-control" id="time14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t14"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs14" class="form-control" id="obs14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs14"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento70["prod15"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">15:00 a 16:00</span>
                        </div>


                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd15" class="form-control" id="numProd15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time15" class="form-control" id="time15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t15"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs15" class="form-control" id="obs15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs15"] ?>" readonly>
                    </div>

                <?php
                }
                ?>

                <?php
                if ($levantamento70["prod16"] != 0) {
                ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">16:00 a 16:48</span>
                        </div>

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Produção</span>
                        </div>
                        <input type="number" name="numProd16" class="form-control" id="numProd16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["prod16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                        </div>
                        <input type="number" name="time16" class="form-control" id="time16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["t16"] ?>" readonly>

                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                        </div>
                        <input type="text" name="obs16" class="form-control" id="obs16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["obs16"] ?>" readonly>
                    </div>

                <?php
                }
                ?>


                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção total</span>
                    </div>
                    <input type="number" name="numProdt" class="form-control" id="numProdt" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento70["total"] ?>" readonly>

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta inicial</span>
                    </div>
                    <select class="form-select" disabled="disabled" name="numEtiq1" id="numEtiq1">

                        <?php

                        $sqlQ = "SELECT * FROM g70 ORDER BY etiqueta";

                        $etiq = $connection->query($sqlQ);

                        if ($etiq->num_rows > 0) {

                            while ($row = $etiq->fetch_assoc()) {
                                if ($levantamento70["etiqueta1"] === $row["etiqueta"]) {
                        ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" selected>
                                        <?php echo $row["etiqueta"]  ?>
                                    </option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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
                    <select class="form-select" disabled="disabled" name="numEtiq2" id="numEtiq2">

                        <?php

                        $sqlQ = "SELECT * FROM g70 ORDER BY etiqueta";

                        $etiq = $connection->query($sqlQ);

                        if ($etiq->num_rows > 0) {

                            while ($row = $etiq->fetch_assoc()) {
                                if ($levantamento70["etiqueta2"] === $row["etiqueta"]) {
                        ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" selected>
                                        <?php echo $row["etiqueta"]  ?>
                                    </option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?php echo $row["etiqueta"] ?>" readonly>
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







            </div>


        </body>
        <br>
        <br>

        </html>
<?php
    }
}
?>