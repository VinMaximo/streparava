<?php
session_start();
if (isset($_SESSION['qualidade']) ) {
  ?>
    <script>
        alert("Você nao tem acesso a essa area");
        window.location = "../home/home.php";
    </script>
    <?php
} else {
    if (isset($_SESSION['administrador'])or isset($_SESSION['montagem'])) {
    } else {
    ?>
        <script>
            
            window.location = "../auth/index.php";
        </script>
<?php
    }
}
?>