<?php
include("../Template/header.php");
include("../../data/connection.php");
include("../auth/validaADM.php");
$total35 = 0;
$total50 = 0;
$total65 = 0;
$total70 = 0;
$totalref = 0;
$totalret = 0;


if (isset($_GET["mes"])) {
    if (isset($_GET["ano"])) {

        $mes = $_GET["mes"];
        $ano = $_GET["ano"];

        $sql = "SELECT *,DATE_FORMAT(data,'%d/%m/%Y') as datas FROM levantamento35f WHERE MONTH(data) = $mes AND YEAR(data) = $ano";
        //echo $sql;
        $dadosRelatorio = $connection->query($sql);

?>

        <?php
        if ($dadosRelatorio->num_rows > 0) {
        ?>
            <div style="margin-left: 100px; margin-right: 100px;">

                <br> 
                <br>
                <h1>Mês <?php echo $mes ?> do ano <?php echo $ano ?></h1>
                <br>
                <br>

                <h3>Gama 35</h3>

                <br>

                <table class="table" style="text-align: center;">
                    <tr>
                        <th>Data</th>
                        <th>Eixos montados no dia</th>

                    </tr>

                    <?php
                    while ($exibir = $dadosRelatorio->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $exibir["datas"] ?></td>
                            <td><?php echo $exibir["total"] ?></td>
                            <?php $total35 += $exibir["total"]; ?>




                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <div class="input-group mb-3">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Total</span>
                    </div>
                    <input type="number" name="numMes" class="form-control" id="numMes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $total35 ?>" readonly>

                </div>

            </div>

        <?php





        } else {
        ?>
            <br>
            <div style="margin-left: 100px; margin-right: 100px;">
            <?php
            
        }

        $sql = "SELECT *,DATE_FORMAT(data,'%d/%m/%Y') as datas FROM levantamento50f WHERE MONTH(data) = $mes AND YEAR(data) = $ano";
        //echo $sql;
        $dadosRelatorio = $connection->query($sql);

            ?>

            <?php
            if ($dadosRelatorio->num_rows > 0) {
            ?>
                <div style="margin-left: 100px; margin-right: 100px;">
                    <br>
                    <br>

                    <h3>Gama 50</h3>

                    <br>

                    <table class="table" style="text-align: center;">
                        <tr>
                            <th>Data</th>
                            <th>Eixos montados no dia</th>

                        </tr>

                        <?php
                        while ($exibir = $dadosRelatorio->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $exibir["datas"] ?></td>
                                <td><?php echo $exibir["total"] ?></td>
                                <?php $total50 += $exibir["total"]; ?>




                            </tr>
                        <?php
                        }
                        ?>
                    </table>

                    <div class="input-group mb-3">

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Total</span>
                        </div>
                        <input type="number" name="numMes" class="form-control" id="numMes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $total50 ?>" readonly>

                    </div>

                </div>

            <?php





            } else {
            ?>
                <br>
                <div style="margin-left: 100px; margin-right: 100px;">
                <?php
                
            }


            $sql = "SELECT *,DATE_FORMAT(data,'%d/%m/%Y') as datas FROM levantamento65f WHERE MONTH(data) = $mes AND YEAR(data) = $ano";
            //echo $sql;
            $dadosRelatorio = $connection->query($sql);

                ?>

                <?php
                if ($dadosRelatorio->num_rows > 0) {
                ?>
                    <div style="margin-left: 100px; margin-right: 100px;">
                        <br>
                        <br>

                        <h3>Gama 65</h3>

                        <br>

                        <table class="table" style="text-align: center;">
                            <tr>
                                <th>Data</th>
                                <th>Eixos montados no dia</th>

                            </tr>

                            <?php
                            while ($exibir = $dadosRelatorio->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $exibir["datas"] ?></td>
                                    <td><?php echo $exibir["total"] ?></td>
                                    <?php $total65 += $exibir["total"]; ?>




                                </tr>
                            <?php
                            }
                            ?>
                        </table>

                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Total</span>
                            </div>
                            <input type="number" name="numMes" class="form-control" id="numMes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $total65 ?>" readonly>

                        </div>

                    </div>

                <?php





                } else {
                ?>
                    <br>
                    <div style="margin-left: 100px; margin-right: 100px;">
                    <?php
                    
                }

                $sql = "SELECT *,DATE_FORMAT(data,'%d/%m/%Y') as datas FROM levantamento70f WHERE MONTH(data) = $mes AND YEAR(data) = $ano";
                //echo $sql;
                $dadosRelatorio = $connection->query($sql);

                    ?>

                    <?php
                    if ($dadosRelatorio->num_rows > 0) {
                    ?>
                        <div style="margin-left: 100px; margin-right: 100px;">
                            <br>
                            <br>

                            <h3>Gama 70</h3>

                            <br>

                            <table class="table" style="text-align: center;">
                                <tr>
                                    <th>Data</th>
                                    <th>Eixos montados no dia</th>

                                </tr>

                                <?php
                                while ($exibir = $dadosRelatorio->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $exibir["datas"] ?></td>
                                        <td><?php echo $exibir["total"] ?></td>
                                        <?php $total70 += $exibir["total"]; ?>




                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Total</span>
                                </div>
                                <input type="number" name="numMes" class="form-control" id="numMes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $total70 ?>" readonly>

                            </div>

                        </div>

                        <?php


                        $total = $total35 + $total50 + $total65 + $total70;


                        ?>
                        <div style="margin-left: 100px; margin-right: 100px;">
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Total de todas as gamas no mês</span>
                            </div>
                            <input type="number" name="numTotal" class="form-control" id="numTotal" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $total ?>" readonly>

                        </div>
                        </div>
                        

                    <?php

                    } else {
                    ?>
                        <br>
                        <div style="margin-left: 100px; margin-right: 100px;">
                <?php
                        
                    }

                     $sql = "SELECT *,DATE_FORMAT(data,'%d/%m/%Y') as datas FROM refret WHERE MONTH(data) = $mes AND YEAR(data) = $ano";
                //echo $sql;
                $dadosRelatorio = $connection->query($sql);

                    ?>

                    <?php
                    if ($dadosRelatorio->num_rows > 0) {
                    ?>
                        <div style="margin-left: 100px; margin-right: 100px;">
                            <br>
                            <br>

                            <h3>Refugo e retrabalho</h3>

                            <br>

                            <table class="table" style="text-align: center;">
                                <tr>
                                    <th>Data</th>
                                    <th>Total retrabalho</th>
                                    <th>Total total refugo</th>

                                </tr>

                                <?php
                                while ($exibir = $dadosRelatorio->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $exibir["datas"] ?></td>
                                        <td><?php echo $exibir["total_retrabalho"] ?></td>
                                        <td><?php echo $exibir["total_refugo"] ?></td>
                                        <?php $totalref += $exibir["total_refugo"]; ?>
                                        <?php $totalret += $exibir["total_retrabalho"]; ?>




                                    </tr>
                                <?php
                                }
                                ?>
                            </table>

                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Total retrabalho</span>
                                </div>
                                <input type="number" name="numMes" class="form-control" id="numMes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $totalret ?>" readonly>

                            </div>

                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Total refugo</span>
                                </div>
                                <input type="number" name="numMes" class="form-control" id="numMes" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $totalref ?>" readonly>

                            </div>

                        </div>

                        <?php


                       


                        ?>
                        
                        

                    <?php

                    } else {
                    ?>
                        <br>
                        <div style="margin-left: 100px; margin-right: 100px;">
                <?php

                    }
























                    //<-------------------------------------------------- (IF's isset) --------------------------------------------
                }
            }
                ?>  
                        <br>
                        </div>