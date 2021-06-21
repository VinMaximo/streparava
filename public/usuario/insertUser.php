


<?php

    include_once("../../data/connection.php");

    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];
    $prioridade = $_POST["numPrioridade"];
    $setor = $_POST["txtSetor"];

    $sql = "INSERT INTO 
    usuario (user, senha, prioridade, setor)
    VALUES('$usuario', '$senha', '$prioridade','$setor')";

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
    { 
        echo $sql;?>
        <script>
        
            alert("Ocorreu um erro ao cadastrar o usuário.");
            //window.location = "listUser.php";
        </script>
    
    <?php
    }

?>