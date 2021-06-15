<?php include("../Template/header.php") ?>

<html>

<head>
   <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text">
         <h2>Sistema Unico<br></h2>
         <p>Faça o login ou registre-se por aqui.<br></p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form class="form-signin" method="POST" action="login.php">
               <div class="form-group">
                  <!-- 
                     Prioridade = 0 : Administrador
                     Prioridade = 1 : Medico
                     Prioridade = 2 : Paciente 
                  -->
                  <label>Usuário</label>
                  <input name="user" type="text" class="form-control" placeholder="Username">
               </div>
               <div class="form-group">
                  <label>Senha</label>
                  <input name="senha" type="password" class="form-control" placeholder="Password">
               </div>
               <button type="submit" class="btn btn-success">Login</button>
            </form> 
            <br>
            <button class="btn btn-warning" onclick="window.location.href='../operador/createOperador.php'">Register</button>          
         </div>
      </div>
   </div>
</body>

</html>