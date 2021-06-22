<?php
 include("../auth/validaADM.php");
include_once("../../data/connection.php");



$nome = $_POST["txtNome"];
$matricula = $_POST["numMatricula"];



$sql = "INSERT INTO 
    inspetor ( nome, matricula)
    VALUES('$nome','$matricula')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Inspetor cadastrado com sucesso");
        window.location = 'listInspetor.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar o inspetor");
       
    </script>
    
<?php
}

?>