<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="../../Assets/css/estilos.css">
	<title>BIENESTAR ESTUDIANTIL</title>
</head>
<body>
	<img class="wave" src="../../Assets/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="../../Assets/images/bg.svg">
		</div>
		<div class="login-content">
		<form action="validar.php" method="post">
				<img src="../../Assets/images/logo.png">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
					  <i class="fa fa-envelope" aria-hidden="true"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input" name="mail">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="pass">
            	   </div>
            	</div>
            	<a href="../vistas/recuperar.html">¿Olvido su contraseña?</a>
            	<a href="../registro/registroVista.php">REGISTARSE</a>
            		<input class="btn" type="submit" value="Aceptar">
				</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../../Assets/js/main.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>