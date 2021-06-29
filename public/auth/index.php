<?php include("../Template/header.php");

   session_destroy();

?>


<html>

<head>
   <link rel="stylesheet" href="../Styles/login.css">
</head>

<body>
   <div class="sidenav">
      <div class="login-main-text">
         <br>
         <h2>SISTEMA DE CONTROLE STREPARAVA COMPONENTES AUTOMOTIVOS LTDA.<br></h2>
         <p><br></p>
      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12">
         <div class="login-form">
            <form class="form-signin" method="POST" action="login.php">
               <div class="form-group">
                  
                     <h2>Login</h2>
                     <br>
                  
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
            
         </div>
      </div>
   </div>
</body>

</html>
