<?php include("../Template/header.php");
include("../../data/connection.php");

if (isset($_GET["data"])) {
    $dt = $_GET["data"];

    $sql = "SELECT * FROM levantamento70f WHERE data = '" . $dt . "'";
    
    $resultado = $connection->query($sql);
    $levantamento35 = $resultado->fetch_assoc();
    
    if($levantamento35 != null) {

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
                    <h2>Levantamento diário de produção final - Montagem G35</h2>

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
                    <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["data"] ?>">
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
                    <input type="number" name="numProd7" class="form-control" id="numProd7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod7"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time7" class="form-control" id="time7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t7"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs7" class="form-control" id="obs7" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs7"] ?>">

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
                    <input type="number" name="numProd8" class="form-control" id="numProd8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod8"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time8" class="form-control" id="time8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t8"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs8" class="form-control" id="obs8" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs8"] ?>">
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
                    <input type="number" name="numProd9" class="form-control" id="numProd9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod9"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time9" class="form-control" id="time9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t9"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs9" class="form-control" id="obs9" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs9"] ?>">
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
                    <input type="number" name="numProd10" class="form-control" id="numProd10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod10"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time10" class="form-control" id="time10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t10"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs10" class="form-control" id="obs10" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs10"] ?>">
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
                    <input type="number" name="numProd11" class="form-control" id="numProd11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod11"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time11" class="form-control" id="time11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t11"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs11" class="form-control" id="obs11" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs11"] ?>">
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
                    <input type="number" name="numProd12" class="form-control" id="numProd12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod12"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time12" class="form-control" id="time12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t12"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs12" class="form-control" id="obs12" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs12"] ?>">
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
                    <input type="number" name="numProd13" class="form-control" id="numProd13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod13"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time13" class="form-control" id="time13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t13"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs13" class="form-control" id="obs13" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs13"] ?>">
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
                    <input type="number" name="numProd14" class="form-control" id="numProd14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod14"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time14" class="form-control" id="time14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t14"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs14" class="form-control" id="obs14" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs14"] ?>">
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
                    <input type="number" name="numProd15" class="form-control" id="numProd15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod15"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time15" class="form-control" id="time15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t15"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs15" class="form-control" id="obs15" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs15"] ?>">
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
                    <input type="number" name="numProd16" class="form-control" id="numProd16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["prod16"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Tempo de parada em minutos</span>
                    </div>
                    <input type="number" name="time16" class="form-control" id="time16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["t16"] ?>">

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                    </div>
                    <input type="text" name="obs16" class="form-control" id="obs16" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["obs16"] ?>">
                </div>

                <?php
                }
                ?>


                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Produção total</span>
                    </div>
                    <input type="number" name="numProdt" class="form-control" id="numProdt" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $levantamento35["total"] ?>">

                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta inicial</span>
                </div>
                <select class="form-select" name="numEtiq1" id="numEtiq1" >
                  
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

               




            
        </div>


    </body>
    <br>
    <br>

    </html>
    
    
<?php
    }
?>