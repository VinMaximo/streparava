<?php
include("../auth/validaMontagem.php");
include_once("../../data/connection.php");



$etiqueta = $_POST["numEtiq"];
$etiqueta2 = $_POST["numEtiqueta"];


$sql2 = "UPDATE guarda SET id ='" . $etiqueta . "' " ."WHERE id = " . $etiqueta2;"";
echo $sql2;
$sql = "ALTER TABLE g50 AUTO_INCREMENT = $etiqueta";

$resultado2 = $connection -> query($sql2);

$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Número inicial alterado");
        window.location = '../montagemG50/createPDC50.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o operador");
       
    </script>
    
<?php
}
