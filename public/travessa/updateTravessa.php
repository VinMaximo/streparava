
<?php 
        include("../auth/validaMontagem.php");
        include_once("../../data/connection.php");
            $id = $_POST["travessaId"];
            $codigo = $_POST["codigoc"];
            $data = $_POST["datec"];

            $sql = "UPDATE travessa 
           SET codigo ='" . $codigo . "' ,  " .
            "data='" . $data . "'   " .
            "WHERE id_travessa = " . $id;
            $resultado = $connection -> query($sql);

            if ($resultado) {
                echo$sql;
 ?>
                <script>
                    alert ("Travessa editada com sucesso");
                   
                </script>

                <?php
            
            }
            else {
                echo $sql;
               ?>
            <script>
                alert("Erro ao editar a travessa");
                
            </script> 
<?php

    }


?>