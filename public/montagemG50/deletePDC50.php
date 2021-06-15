<?php

include_once("../../data/connection.php");
if (isset($_GET["etiqueta"])) {



    $sql = "DELETE FROM g50 WHERE etiqueta = " . $_GET["etiqueta"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Controle de montagem excluído com sucesso");
            window.location = "listPDC50.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o controle de montagem especificado");
            //window.location = "listDispensa.php";
        </script>
<?php

    }
}

?>