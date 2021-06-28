<?php

include_once("../../data/connection.php");
if (isset($_GET["id"])) {



    $sql = "DELETE FROM levantamento50f WHERE id_levantamento50 = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Levantamento de produção excluído com sucesso");
            window.location = "../final50/listFinal50.php";
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