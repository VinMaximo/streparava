<?php

include_once("../../data/connection.php");




$mes = $_POST["numMes"];
$ano = $_POST["numAno"];




$sql = "INSERT INTO 
    relatoriomes ( mes,ano)
    VALUES('$mes','$ano')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Relatório cadastrado com sucesso");
        window.location = '../relatorioMes/createRelatorio.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Esse dia já foi cadastrado");
        window.location = '../relatorioMes/createRelatorio.php';
       
    </script>
    
<?php
}

?>