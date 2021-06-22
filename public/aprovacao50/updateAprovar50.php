<?php include("../auth/validaQualidade.php");?>
<?php

include_once("../../data/connection.php");

if (isset($_POST)) {
    $etiqueta = $_POST["etiqueta"];
    $inspetor = $_POST["txtInspetor"];




    $sql = "UPDATE g50 SET 
    
        inspetor = '" . $inspetor . "'" .
        "WHERE etiqueta = " . $etiqueta;



    $resultado = $connection->query($sql);

    if ($resultado) {

?>
        <script>
            alert("Planilha de controle editada com sucesso");
            window.location = "../aprovacao50/aprovar50.php";
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