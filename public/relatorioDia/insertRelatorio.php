<?php

include_once("../../data/connection.php");
include("../auth/validaADM.php");



$data = $_POST["date"];




$sql = "INSERT INTO 
    relatoriodia ( data)
    VALUES('$data')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Relatório cadastrado com sucesso");
        window.location = '../relatorioDia/listRelatorio.php';
    </script>
<?php
} else {
    ?>
    <script>
        alert("Esse dia já foi cadastrado");
        window.location = '../relatorioDia/listRelatorio.php';
       
    </script>
    
<?php
}

?>