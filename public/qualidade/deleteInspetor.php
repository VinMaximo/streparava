<?php
include("../auth/validaQualidade.php");
include_once("../../data/connection.php");
if (isset($_GET["matricula"])) {



    $sql = "DELETE FROM inspetor WHERE matricula = " . $_GET["matricula"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Inspetor excluído com sucesso");
            window.location = "../qualidade/listInspetor.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o inspetor");
            //window.location = "listDispensa.php";
        </script>
<?php

    }
}

?>