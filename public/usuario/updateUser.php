<?php include("../auth/validaADM.php")?>


<?php
include_once("../../data/connection.php");
if (isset($_POST)) {
    $id = $_POST["numId"];
    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];
    $prioridade = $_POST["numPrioridade"];
    $setor = $_POST["txtSetor"];


    $sql = "UPDATE usuario 
            SET user = '" . $usuario . "',
             senha = '" . $senha . "',
             prioridade = " . $prioridade . ",
             setor = '" . $setor . "'
         WHERE id_usuario = '" . $id . "'";


    $resultado = $connection->query($sql);

    if ($resultado) {
?>
        <script>
            alert("Usuário editado com sucesso");
            window.location = "listUser.php";
        </script>

    <?php

    } else {
        echo $sql;
    ?>
        <script>
            alert("Erro ao editar o usuário");
          //  window.location = "listUser.php";
        </script>
<?php

    }
}

?>