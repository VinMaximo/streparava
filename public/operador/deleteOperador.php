<?php
include("../auth/validaMontagem.php");
include_once("../../data/connection.php");
if (isset($_GET["matricula"])) {



    $sql = "DELETE FROM operadores WHERE matricula = " . $_GET["matricula"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Operador excluído com sucesso");
            window.location = "../operador/listOperador.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o operador");
            //window.location = "listDispensa.php";
        </script>
<?php

    }
}

?>