<?php

include_once("../../data/connection.php");
include("../auth/validaADM.php");



$mes = $_POST["numMes"];
$ano = $_POST["numAno"];




$sql = "INSERT INTO 
    relatoriomes ( mes,ano)
    VALUES('$mes','$ano')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Relatório cadastrado com sucesso");
        window.location = '../relatorioMes/listRelatorio.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Essa data já foi cadastrada");
        //window.location = '../relatorioMes/createRelatorio.php';
       
    </script>
    
<?php
}

?>