<?php

include_once("../../data/connection.php");



$codigo = $_POST["codigo"];
$data = $_POST["datec"];



$sql = "INSERT INTO 
    travessa ( codigo, data)
    VALUES('$codigo','$data')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Travessa cadastrada com sucesso");
        window.location = '../travessa/listTravessa.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a Travessa");
       
    </script>
    
<?php
}

?>