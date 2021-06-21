<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_SESSION['qualidade'])) {
    $id_usuario = $_SESSION['qualidade'];
} else {
?>
    <script>
       window.location = "../auth/index.php";
    </script>
<?php
}


?>