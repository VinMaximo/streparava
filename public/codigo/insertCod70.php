<?php

include_once("../../data/connection.php");

$codigo = $_POST["numCod"];
$data = $_POST["date"];



$sql = "INSERT INTO 
    codigo70 ( codigo, data)
    VALUES('$codigo','$data')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Código alterado com sucesso");
        window.location = '../montagemG70/listPDC70.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao alterar o código");
       
    </script>
    
<?php
}

?>