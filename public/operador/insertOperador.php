<?php
include("../auth/validaMontagem.php");
include_once("../../data/connection.php");



$nome = $_POST["txtNome"];
$matricula = $_POST["numMatricula"];



$sql = "INSERT INTO 
    operadores ( nome, matricula)
    VALUES('$nome','$matricula')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Operador cadastrado com sucesso");
        window.location = 'listOperador.php';
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