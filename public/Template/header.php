<?php
include("../../data/connection.php");
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title></title>

  <link rel="stylesheet" href="../Styles/main.css" />
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #9b0000; font-family: Impact, fantasy; font-size: xx-large;font-size: 50px">
    <div class="container">
      <a class="navbar-brand" font-weight: bold href="../home/home.php">STREPARAVA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">


            <?php
            if (isset($_SESSION['qualidade']) or isset($_SESSION['montagem']) or isset($_SESSION['adm'])) {
            ?>
              <li class="nav-item" >
                <a class="nav-link" style="font-size: large;" href="../auth/sair.php">Sair</a>
              </li>
            <?php
            }
            ?>

          <?php
          
          ?>
        </ul>

      </div>
    </div>

  </nav>

  <br>
  <br>

</body>

</html>