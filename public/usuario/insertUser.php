


<?php

    include_once("../../data/connection.php");

    $usuario = $_POST["txtUsuario"];
   
    $senha = $_POST["txtSenha"];
    $prioridade = $_POST["numPrioridade"];

    $sql = "INSERT INTO 
    usuario (user, senha, prioridade)
    VALUES('$usuario', '$senha', '$prioridade')";

    $resultado = $connection -> query($sql);

    if($resultado)
    {?>
        <script>
            alert("Usuário cadastrado com sucesso");
            window.location = "listUser.php";
        </script>
    <?php
    }
    else
    { ?>
        <script>
            alert("Ocorreu um erro ao cadastrar o usuário.");
            window.location = "listUser.php";
        </script>
    
    <?php
    }

?>