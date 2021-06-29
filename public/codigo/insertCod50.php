<?php

include_once("../../data/connection.php");
include("../auth/validaQualidade.php");
$codigo = $_POST["numCod"];
$data = $_POST["date"];



$sql = "INSERT INTO 
    codigo50 ( codigo, data)
    VALUES('$codigo','$data')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Código alterado com sucesso");
        window.location = '../montagemG50/listPDC50.php';
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