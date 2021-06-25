<?php

include_once("../../data/connection.php");
if (isset($_GET["id"])) {



    $sql = "DELETE FROM levantamento35f WHERE id_levantamento35 = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Levantamento de produção excluído com sucesso");
            window.location = "../final35/listFinal35.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o controle de montagem especificado");
            
        </script>
<?php

    }
}

?>