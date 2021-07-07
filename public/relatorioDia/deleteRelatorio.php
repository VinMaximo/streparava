<?php
include("../auth/validaADM.php");
include_once("../../data/connection.php");
if (isset($_GET["id"])) {



    $sql = "DELETE FROM relatoriodia WHERE id_levantamento = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Levantamento de diário excluído com sucesso");
            window.location = "../relatorioDia/listRelatorio.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o levantamento diário");
            
        </script>
<?php

    }
}

?>