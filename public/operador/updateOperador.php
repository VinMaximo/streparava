<?php
include("../auth/validaAdm.php");
include_once("../../data/connection.php");

if (isset($_POST)) {

    $matricula = $_POST["numMatricula"];
    $nome = $_POST["txtNome"];
    $situacao = $_POST["txtSituacao"];





    $sql = "UPDATE operadores SET 
        nome = '" . $nome . "', " .
        "situacao = '" . $situacao . "'" .
        "WHERE matricula = " . $matricula;



    $resultado = $connection->query($sql);

    if ($resultado) {

?>
        <script>
            alert("Operador editado com sucesso");
            window.location = "./listOperador.php";
        </script>

    <?php
    } else {
        echo $sql ?>

        <script>
            alert("Ocorreu um erro ao cadastrar a dispensa");
        </script>

<?php
    }
}

?>