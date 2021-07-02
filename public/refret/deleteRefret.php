<?php

include_once("../../data/connection.php");
if (isset($_GET["id"])) {



    $sql = "DELETE FROM refret WHERE id_refret = " . $_GET["id"];

    if ($connection->query($sql) === TRUE) {
?>
        <script>
            alert("Levantamento de refugo e retrabalho excluído com sucesso");
            window.location = "../refret/listRefret.php";
        </script>

    <?php


    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao excluir o levantamento de refugo e retrabalho");
            
        </script>
<?php

    }
}

?>