<?php

include_once("../../data/connection.php");
include("../auth/validaMontagem.php");


//$etiqueta = $_POST["numE"];
$codigo = $_POST["txtCod"];
$operador = $_POST["txtOperador"];
$operador2 = $_POST["txtOperador2"];
$operador3 = $_POST["txtOperador3"];
$esmagamento_dir = $_POST["txtEsmagamentod"];
$montagem_dir = $_POST["txtMontagemd"];
$esmagamento_esq = $_POST["txtEsmagamentoe"];
$montagem_esq = $_POST["txtMontageme"];
$oscilacao_esq = $_POST["numOscilacaoe"];
$oscilacao_dir = $_POST["numOscilacaod"];
$operacao1 = $_POST["txtVisto1"];
$operacao1op = $_POST["txtVisto1op"];
$operacao2 = $_POST["txtVisto2"];
$operacao2op = $_POST["txtVisto2op"];
$operacao3 = $_POST["txtVisto3"];
$operacao3op = $_POST["txtVisto3op"];
$travessa = $_POST["txtTravessa"];
$data = $_POST["date"];
$observacoes = $_POST["txtObservacoes"];


$sql = "INSERT INTO 
    g65 (codigo, operador, operador2, operador3, esmagamento_dir, montagem_dir, esmagamento_esq, montagem_esq, oscilacao_esq, oscilacao_dir, operacao1, operacao1op, operacao2, operacao2op, operacao3, operacao3op,  travessa, data, observacoes)
    VALUES(
        '$codigo',
'$operador',
'$operador2',
'$operador3',
'$esmagamento_dir',
'$montagem_dir',
'$esmagamento_esq',
'$montagem_esq',
'$oscilacao_esq',
'$oscilacao_dir',
'$operacao1',
'$operacao1op',
'$operacao2',
'$operacao2op',
'$operacao3',
'$operacao3op',
'$travessa',
'$data',
'$observacoes'
)";



$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Planilha de controle cadastrada com sucesso");
        window.location = '../montagemG65/listPDC65.php';
    </script>
<?php
} else {
    echo $sql; ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a planilha");
       
    </script>
    
<?php
}

?>