<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_SESSION['montagem'])) {
    $id_usuario = $_SESSION['montagem'];
} else {
?>
    <script>
        window.location = "../auth/index.php";
    </script>
<?php
}


?>