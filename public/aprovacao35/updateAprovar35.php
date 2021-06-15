<?php

include_once("../../data/connection.php");

if (isset($_POST)) {
    $etiqueta = $_POST["etiqueta"];
    $inspetor = $_POST["txtInspetor"];




    $sql = "UPDATE g35 SET 
    
        inspetor = '" . $inspetor . "'" .
        "WHERE etiqueta = " . $etiqueta;



    $resultado = $connection->query($sql);

    if ($resultado) {

?>
        <script>
            alert("Planilha de controle editada com sucesso");
            window.location = "../aprovacao35/aprovar35.php";
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