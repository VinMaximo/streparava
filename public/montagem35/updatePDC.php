<?php

include_once("../../data/connection.php");

if (isset($_POST)) {
    $etiqueta = $_POST["etiqueta"];
    $operador = $_POST["txtOperador"];
    $operador2 = $_POST["txtOperador2"];
    $operador3 = $_POST["txtOperador3"];
    $esmagamento_dir = $_POST["txtEsmagamentod"];
    $montagem_dir = $_POST["txtMontagemd"];
    $esmagamento_esq = $_POST["txtEsmagamentoe"];
    $montagem_esq = $_POST["txtMontageme"];
    $operacao1 = $_POST["txtVisto1"];
    $operacao1op = $_POST["txtVisto1op"];
    $operacao2 = $_POST["txtVisto2"];
    $operacao2op = $_POST["txtVisto2op"];
    $operacao3 = $_POST["txtVisto3"];
    $operacao3op = $_POST["txtVisto3op"];
    $travessa = $_POST["txtTravessa"];
    $data = $_POST["date"];
    $observacoes = $_POST["txtObservacoes"];




    $sql = "UPDATE g35 SET 
    operador= '" . $operador . "', " .
        "operador2= '" . $operador2 . "', " .
        "operador3= '" . $operador3 . "', " .
        "esmagamento_dir= '" . $esmagamento_dir . "', " .
        "montagem_dir= '" . $montagem_dir . "', " .
        "esmagamento_esq= '" . $esmagamento_esq . "', " .
        "montagem_esq= '" . $montagem_esq . "', " .
        "operacao1= '" . $operacao1 . "', " .
        "operacao1op= '" . $operacao1op . "', " .
        "operacao2= '" . $operacao2 . "', " .
        "operacao2op= '" . $operacao2op . "', " .
        "operacao3= '" . $operacao3 . "', " .
        "operacao3op= '" . $operacao3op . "', " .
        "travessa= '" . $travessa . "', " .
        "data= '" . $data . "', " .
        "observacoes = '" . $observacoes . "'" .
        "WHERE etiqueta = " . $etiqueta;



    $resultado = $connection->query($sql);

    if ($resultado) {

?>
        <script>
            alert("Planilha de controle editada com sucesso");
            window.location = "listPDC.php";
        </script>
         
    <?php
    } else {
        echo $sql ?>

        <script>
            alert("Ocorreu um erro ao cadastrar a dispensa");
        </script>

<?php
    }
}

?>