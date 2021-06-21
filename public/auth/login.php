
<?php

include_once("../../data/connection.php");


if ((isset($_POST['user'])) && (isset($_POST['senha']))) {

    $user = $_POST['user'];
    $senha = $_POST['senha'];
    //$senha=md5($senha);
    $sql = "select * from usuario where user = '$user' and senha = '$senha'";
    $resultado = $connection->query($sql);
    $num = mysqli_num_rows($resultado);
    if ($num == 1) {
        while ($percorrer = $resultado->fetch_assoc()) {

            $adm = $percorrer['prioridade'];
            $nome = $percorrer['id_usuario'];

            session_start();

            if ($adm == 3) {
                $_SESSION['adm']=$nome;
                echo "Você é administrador";
            }

            if ($adm == 2) {
                $_SESSION['montagem']=$nome;
                echo "Você é da montagem";
            }

            if ($adm == 1) {
                $_SESSION['qualidade']=$nome;
                echo "Você é da qualidade";
            }

?>
            <script>
               window.location = "../home/home.php";
            </script>
        <?php

        }
    } else {

        ?>
        <script>
            alert("Credenciais incorretas");
           window.location = "index.php";
        </script>
<?php

    }
}
