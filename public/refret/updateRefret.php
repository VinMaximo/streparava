<?php

include_once("../../data/connection.php");

if (isset($_POST)) {

    $id = $_POST["numId"];
    $data = $_POST["date"];
    $retrabalho_braco = $_POST["numBra"];
    $refugo_braco = $_POST["numBrar"];
    $retrabalho_tirante = $_POST["numSup"];
    $refugo_tirante = $_POST["numSupr"];
    $retrabalho_travessa = $_POST["numTra"];
    $refugo_travessa = $_POST["numTrar"];
    $retrabalho_roda = $_POST["numRod"];
    $refugo_roda = $_POST["numRodr"];
    $retrabalho_montagem = $_POST["numFin"];
    $refugo_montagem = $_POST["numFinr"];
    $retrabalho_pintura = $_POST["numPint"];
    $refugo_pintura = $_POST["numPintr"];
    $total_retrabalho = $retrabalho_braco + $retrabalho_montagem + $retrabalho_pintura + $retrabalho_tirante + $retrabalho_travessa + $retrabalho_roda;
    $total_refugo = $refugo_roda + $refugo_braco + $refugo_montagem + $refugo_pintura + $refugo_tirante + $refugo_travessa;
    $observacoes = $_POST["txtObs"];





    $sql = "UPDATE refret SET
        data = '" . $data . "', " .
        "retrabalho_braco = '" . $retrabalho_braco . "', " .
        "refugo_braco = '" . $refugo_braco . "', " .
        "retrabalho_tirante = '" . $retrabalho_tirante . "', " .
        "refugo_tirante = '" . $refugo_tirante . "', " .
        "retrabalho_travessa= '" . $retrabalho_travessa . "', " .
        "refugo_travessa= '" . $refugo_travessa . "', " .
        "retrabalho_roda= '" . $retrabalho_roda . "', " .
        "refugo_roda= '" . $refugo_roda . "', " .
        "retrabalho_montagem= '" . $retrabalho_montagem . "', " .
        "refugo_montagem= '" . $refugo_montagem . "', " .
        "retrabalho_pintura= '" . $retrabalho_pintura . "', " .
        "refugo_pintura= '" . $refugo_pintura . "', " .
        "total_retrabalho= '" . $total . "', " .
        "total_refugo= '" . $total . "', " .
        "observacoes= '" . $observacoes . "' " .
        "WHERE id_refret = " . $id;




    $resultado = $connection->query($sql);

    if ($resultado) {

?>
        <script>
            alert("Lançamento de refugo e retrabalho editado com sucesso");
            window.location = "listRefret.php";
        </script>

    <?php
    } else {
        echo $sql ?>

        <script>
            alert("Ocorreu um erro ao editar o levantamento");
        </script>

<?php
    }
}

?>