<?php
include("../auth/validaMontagem.php");
include_once("../../data/connection.php");



$etiqueta = $_POST["numEtiq"];
$etiqueta2 = $_POST["numEtiqueta"];


$sql2 = "INSERT guarda SET id ='" . $etiqueta . "' " ;"";

$sql = "ALTER TABLE g35 AUTO_INCREMENT = $etiqueta";

$resultado2 = $connection -> query($sql2);

$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Número inicial alterado");
        window.location = '../montagem35/createPDC.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o operador");
       
    </script>
    
<?php
}
