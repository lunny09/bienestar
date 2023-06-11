<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="../../Assets/css/estilos.css">
    <title>BIENESTAR ESTUDIANTIL</title>
</head>
<body>
    <!-- formulario registro -->
    <img class="wave" src="../../Assets/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="../../Assets/images/bg.svg">
		</div>
    <div class="login-content">
		<form action="registro.php" method="post">
				<img src="../../Assets/images/logo.png">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
                 <div class="div">
           		   		<h5>Ingresa tu nombre</h5>
           		   		<input type="text" class="input" name="realname">
           		   </div>
           		</div>
               <div class="input-div pass">
           		   <div class="i"> 
                  <i class="fa fa-envelope" aria-hidden="true"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Ingresa tu email</h5>
           		    	<input type="email" class="input" name="nick">
            	   </div>
            	</div>
              <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Ingresa tu Password</h5>
           		    	<input type="password" class="input" name="pass">
            	   </div>
            	</div>
              <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Repite tu Password</h5>
           		    	<input type="password" class="input" name="rpass" required>
            	   </div>
            	</div>
    <input  class="btn" type="submit" name="submit" value="Registrarse"/>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->
    <script type="text/javascript" src="../../Assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>