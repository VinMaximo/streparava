<?php
include("../Template/header.php");
include_once("../../data/connection.php");
include("../auth/validaMontagem.php");

if (isset ($_GET["etiqueta"])) 
    {
        $etiqueta = $_GET["etiqueta"];
        
        $sql = "SELECT * FROM g65 WHERE etiqueta = '" . $etiqueta . "'";
        //echo $sql;
        $resultado = $connection->query($sql);
        $pdc = $resultado->fetch_assoc();



?>



<div class="form">
    <form action="updatePDC65.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
    <br>
            <br>
            <h3>Editar planilha de controle</h3>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Número da etiqueta</span>
                </div>
                <input type="text" name="etiqueta" class="form-control" id="etiqueta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pdc["etiqueta"] ?>" readonly>
            </div>



            <div>

                <HR style="height:2px;border-width:0;color:gray;background-color:gray" WIDTH=100%>

                <table class="table">

                    <p style="text-align: center">
                        <tr>
                            <h3 style="text-align: center"> Controle roda (esquerdo/direito)</h3>


                        </tr>


                        <tr>
                            <td>Torque parafuso fixação reparo</td>
                            <td>7 - 10 nm</td>
                        </tr>

                        <tr>
                            <td>Torque porca M33</td>
                            <td>384 - 454 nm</td>
                        </tr>

                        <tr>
                            <td>Torque parafuso cubo roda (G35/G40/G50) </td>
                            <td>109 - 128 nm</td>
                        </tr>

                        <tr>
                            <td>Torque parafuso cubo roda (G65/70) </td>
                            <td>250 - 295 nm</td>
                        </tr>

                        <tr>
                            <td>Oscilação disco de freio</td>
                            <td>Max 0,11nm</td>
                        </tr>

                        <tr>
                            <td>Torque porca dos braços</td>
                            <td>117 - 209 nm</td>
                        </tr>

                        <tr>
                            <td>Torque parafuso das pinças (G35/G40/G50)</td>
                            <td>217 - 256 nm</td>
                        </tr>

                        <tr>
                            <td>Torque parafuso das pinças (G65/G70)</td>
                            <td>140 - 165 nm</td>
                        </tr>

                        <tr>
                            <td>Código pivô</td>
                            <td>W076</td>
                        </tr>

                        <tr>
                            <td>Código do braço superior</td>
                            <td>GFM</td>
                        </tr>

                        <tr>
                            <td>Código braço inferior</td>
                            <td>SFG</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                        </tr>





                    </p>

                </table>

            </div>
            <br>

            <p style="text-align:center">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Esmagamento colarinho M33 esquerdo</span>
                </div>
                <select class="form-select" name="txtEsmagamentoe" id="txtEsmagamentoe">
                    <?php 
                    if($pdc["esmagamento_esq"] === "NOK") {
                    ?>
                    <option value="NOK" selected>
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK">
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    } else {
                    ?>
                        <option value="NOK" >
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK"selected>
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    }
                    ?>

                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Montagem da calota esquerdo</span>
                </div>
                <select class="form-select" name="txtMontageme" id="txtMontageme">
                    <?php 
                    if($pdc["montagem_esq"] === "NOK") {
                    ?>
                    <option value="NOK" selected>
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK">
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    } else {
                    ?>
                        <option value="NOK" >
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK"selected>
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    }
                    ?>

                </select>
            </div>

            <br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Esmagamento colarinho M33 direito</span>
                </div>
                <select class="form-select" name="txtEsmagamentod" id="txtEsmagamentod">
                    <?php 
                    if($pdc["esmagamento_dir"] === "NOK") {
                    ?>
                    <option value="NOK" selected>
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK">
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    } else {
                    ?>
                        <option value="NOK" >
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK"selected>
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    }
                    ?>

                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Montagem da calota direito</span>
                </div>
                <select class="form-select" name="txtMontagemd" id="txtMontagemd">
                    <?php 
                    if($pdc["montagem_dir"] === "NOK") {
                    ?>
                    <option value="NOK" selected>
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK">
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    } else {
                    ?>
                        <option value="NOK" >
                        <?php echo "NOK"  ?>
                    </option>
                    <option value="OK"selected>
                        <?php echo "OK"  ?>
                    </option>
                    <?php
                    }
                    ?>

                </select>
            </div>

            </p>
            <br>

            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Operador 1</span>
                </div>
                <select class="form-select" name="txtOperador" id="txtOperador">

                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operador"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Operador 2</span>
                </div>
                <select class="form-select" name="txtOperador2" id="txtOperador2">
                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operador2"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Operador 3</span>
                </div>
                <select class="form-select" name="txtOperador3" id="txtOperador3">
                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operador3"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>

            <br>
            <HR style="height:2px;border-width:0;color:gray;background-color:gray" WIDTH=100%>
            <div>

                <br>

                <table class="table">

                    <p style="text-align: center">
                        <tr>
                            <h3 style="text-align: center"> Operações efetuadas sobre os braços - suportes - tirantes</h3>


                        </tr>

                        <tr style="font-weight: bold;">
                            <td>Descrição das operações</h5>
                            <td>Quantidade</h5>
                            <td>Nº desenho</h5>
                            <td>Aperto (nm)</h5>
                        </tr>



                        <tr>
                            <td>Calibração porca nos braços superior inferior</td>
                            <td>4</td>
                            <td>AE112500.01</td>
                            <td>77,4 ÷ 94,6</td>

                        </tr>

                        <tr>
                            <td>Calibração porca pivô do tirante</td>
                            <td>4</td>
                            <td>16980931</td>
                            <td>98 ÷ 137,2</td>
                        </tr>

                        <tr>
                            <td>Calibração porca pivô do tirante / suporte lateral</td>
                            <td>4</td>
                            <td>17155931</td>
                            <td>98 ÷ 137,2</td>
                        </tr>







                    </p>

                </table>

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Visto </span>
                </div>
                <select class="form-select" name="txtVisto1" id="txtVisto1">

                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["nome"] ?>">
                                <?php echo $row["nome"]  ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Visto (opcional)</span>
                </div>

                <select class="form-select" name="txtVisto1op" id="txtVisto1op">
                    <option value="Nulo" selected>Selecione o operador</option>
                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["nome"] ?>">
                                <?php echo $row["nome"]  ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>

            <br>
            <HR style="height:2px;border-width:0;color:gray;background-color:gray" WIDTH=100%>

            <div>

                <br>

                <table class="table">

                    <p style="text-align: center">
                        <tr>
                            <h3 style="text-align: center"> Operações efetuadas sobre o lado da direção</h3>


                        </tr>

                        <tr style="font-weight: bold;">
                            <td>Descrição das operações</h5>
                            <td>Quantidade</h5>
                            <td>Nº desenho</h5>
                            <td>Aperto (nm)</h5>
                        </tr>



                        <tr>
                            <td>Calibração parafuso fixação da direção hidráulica</td>
                            <td>4</td>
                            <td>16676834</td>
                            <td>50 ÷ 61</td>

                        </tr>

                        <tr>
                            <td>Calibração porca pivô do tirante</td>
                            <td>2</td>
                            <td>17039021</td>
                            <td>83 ÷ 93<br>186 ÷ 203
                            </td>
                        </tr>

                        <tr>
                            <td>Calibração porca fixação do pivô de direção e braço do fuso S</td>
                            <td>2</td>
                            <td>17155531</td>
                            <td>68 ÷ 83</td>
                        </tr>

                        <tr>
                            <td>Convergência das rodas</td>
                            <td> ND </td>
                            <td> ND </td>
                            <td> 1 ÷ 2 (mm)</td>
                        </tr>

                        <tr>
                            <td>Calibração porca de registro de convergência</td>
                            <td> 2 </td>
                            <td> 99477984 </td>
                            <td> 75 ÷ 98 </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>







                    </p>

                </table>

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Visto</span>
                </div>
                <select class="form-select" name="txtVisto2" id="txtVisto2">

                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operacao2"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Visto (opcional)</span>
                </div>
                <select class="form-select" name="txtVisto2op" id="txtVisto2op">
                    <option value="-1" selected>Selecione o operador</option>
                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operacao2op"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <br>
            <HR style="height:2px;border-width:0;color:gray;background-color:gray" WIDTH=100%>

            <div>

                <br>

                <table class="table">

                    <p style="text-align: center">
                        <tr>
                            <h3 style="text-align: center"> Operações efetuadas sobre o lado da barra de torção</h3>


                        </tr>

                        <tr style="font-weight: bold;">
                            <td>Descrição das operações</h5>
                            <td>Quantidade</h5>
                            <td>Nº desenho</h5>
                            <td>Aperto (nm)</h5>
                        </tr>



                        <tr>
                            <td>Calibração porca para parafuso dos braços/distancial/buchas</td>
                            <td>2</td>
                            <td>17155731</td>
                            <td>50 ÷ 61</td>

                        </tr>

                        <tr>
                            <td>Calibração porcas para parafuso dos tirantes inferiores</td>
                            <td>2</td>
                            <td>17155731</td>
                            <td>192 ÷ 235</td>
                        </tr>

                        <tr>
                            <td>Calibração porcas para parafuso dos tirantes superiores</td>
                            <td>2</td>
                            <td>17155531</td>
                            <td>150 ÷ 183</td>
                        </tr>

                        <tr>
                            <td>Calibração porcas para parafuso das travessas/amortecedores (amortecedores dos braços G65/G70)</td>
                            <td> 2 </td>
                            <td> 16984631 </td>
                            <td> 116 ÷ 142 </td>
                        </tr>


                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>







                    </p>

                </table>

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Visto</span>
                </div>
                <select class="form-select" name="txtVisto3" id="txtVisto3">
                    <option value="-1" selected>Nenhum</option>
                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operacao3"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Visto (opcional)</span>
                </div>
                <select class="form-select" name="txtVisto3op" id="txtVisto3op">
                    <option value="-1" selected>Selecione o operador</option>
                    <?php

                    $sqlQuery = "SELECT * FROM operadores ORDER BY nome";

                    $operadores = $connection->query($sqlQuery);

                    if ($operadores->num_rows > 0) {

                        while ($row = $operadores->fetch_assoc()) {
                            if ($pdc["operacao3op"] === $row["nome"]) {
                    ?>
                                <option value="<?php echo $row["nome"] ?>" selected>
                                    <?php echo $row["nome"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["nome"] ?>">
                                    <?php echo $row["nome"]  ?>
                                </option>



                                ?>



                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>

            <br>
            <HR style="height:2px;border-width:0;color:gray;background-color:gray" WIDTH=100%>





            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Travessa</span>
                </div>
                <select class="form-select" name="txtTravessa" id="txtTravessa">
                    <?php

                    $sqlQ = "SELECT * FROM travessa ORDER BY data";

                    $travessa = $connection->query($sqlQ);

                    if ($travessa->num_rows > 0) {

                        while ($row = $travessa->fetch_assoc()) {
                            if ($pdc["codigo"] === $row["codigo"]) {
                    ?>
                                <option value="<?php echo $row["codigo"] ?>" selected>
                                    <?php echo $row["codigo"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["codigo"] ?>">
                                    <?php echo $row["codigo"]  ?>
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


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" placeholder="Digite as observações relacionadas às operações" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $pdc["observacoes"] ?></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data</span>
                </div>
                <input type="date" name="date" class="form-control" id="date" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $pdc["data"] ?>">
            </div>







        <div class="buttons">

            <input type="submit" class="btn btn-success" value="Atualizar">
            <input type="reset" class="btn btn-danger" onclick="window.location.href='../montagemG65/listPDC65.php'" value="Cancelar">

        </div>




    </form>
</div>


<?php
    }
?>