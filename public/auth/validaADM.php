<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_SESSION['adm'])) {
    $id_usuario = $_SESSION['adm'];
} else {
?>
    <script>
        window.location = "../auth/index.php";
    </script>
<?php
}


?>