<?php
if ( session_status() !== PHP_SESSION_ACTIVE ){
    session_start();
}

if(isset($_SESSION['montagem'])){
    $id_usuario=$_SESSION['montagem'];
}else{
    if(isset($_SESSION['qualidade'])){
        $id_usuario=$_SESSION['qualidade'];
    }else{
        if(isset($_SESSION['admnistrador'])){
            $id_usuario=$_SESSION['admnistrador'];
        }else{
            ?>
        <script>
            
            window.location = "../auth/index.php";
        </script>
        <?php
        }
    }
}
?>