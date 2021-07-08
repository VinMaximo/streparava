<?php
include("../auth/validaADM.php");
include_once("../../data/connection.php");



$nome = $_POST["txtNome"];
$matricula = $_POST["numMatricula"];
$situacao = "Ativo";



$sql = "INSERT INTO 
    operadores ( nome, matricula, situacao)
    VALUES('$nome','$matricula', '$situacao')";


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