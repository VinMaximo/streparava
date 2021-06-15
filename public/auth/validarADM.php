<?php
session_start();
if (isset($_SESSION['montagem']) or isset($_SESSION['qualidade'])) {
    //echo "voce eh um ADM!";
?>
    <script>
        alert("Você não tem acesso a essa área");
        window.location = "../home/home.php";
    </script>
    <?php
} else {
    if (isset($_SESSION['admnistrador'])) {
    } else {
    ?>
        <script>
            
            window.location = "../auth/index.php";
        </script>
<?php
    }
}
?>