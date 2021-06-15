<?php // include("../auth/validarADM.php")

?>


<?php 
        include_once("../../data/connection.php");
        if (isset($_POST)) {
            
            $id = $_["id_usuario"];
            $usuario = $_POST["txtUsuario"];
            $senha = $_POST["txtSenha"];
            $prioridade = $_POST["numPrioridade"];


            $sql = "UPDATE usuario 
            SET user = '" . $usuario . "', senha = '" . $senha . "', prioridade = ". $prioridade .", nome = ". $nome.
            " WHERE id_usuario = '" . $id . "'";


            $resultado = $connection -> query($sql);

            if ($resultado) {
 ?>
                <script>
            alert ("Usuário editado com sucesso");
            //window.location = "listDoctor.php";
                </script>

                <?php
            
            }
            else {
               ?>
            <script>
            alert("Erro ao editar o usuário");
           // window.location = "listDoctor.php";
            </script> 
<?php

    }
}

?>