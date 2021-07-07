<?php
include("../auth/validaADM.php");
include_once("../../data/connection.php");
if (isset($_GET["id"])) {



    $sql = "DELETE FROM relatoriomes WHERE id_relatorio = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Relatório mensal excluído com sucesso");
            window.location = "../relatorioMes/listRelatorio.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o relatório mensal");
            
        </script>
<?php

    }
}

?>