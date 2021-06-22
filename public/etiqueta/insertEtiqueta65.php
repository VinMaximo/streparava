<?php
include("../auth/validaMontagem.php");
include_once("../../data/connection.php");



$etiqueta = $_POST["numEtiq"];
$etiqueta2 = $_POST["numEtiqueta"];


$sql2 = "UPDATE guarda SET id ='" . $etiqueta . "' " ."WHERE id = " . $etiqueta2;"";

$sql = "ALTER TABLE g65 AUTO_INCREMENT = $etiqueta";

$resultado2 = $connection -> query($sql2);

$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Número inicial alterado");
       // window.location = '../montagemG65/createPDC65.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o operador");
       
    </script>
    
<?php
}

if ($resultado2){ ?>
    <script>
        alert("Deu certo");
        //window.location = '../montagem/createPDC.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o operador");
       
    </script>
    
<?php
}

?>