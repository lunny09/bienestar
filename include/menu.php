<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive - MagtimusPro</title>

    <link rel="stylesheet" href="../Assets/css/menu.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>


            <ul class="nav pull-right">
  <li>Bienvenido <strong><?php echo $_SESSION['user'];?></strong></li>
  <li><a href="desconectar.php">Cerrar Sesión</a></li>
</ul>


        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fab fa-youtube"></i>
            <h4>MagtimusPro</h4>
        </div>

        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Portafolio</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4>Cursos</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Blog</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>

        </div>

    </div>
    <script type="text/javascript" src="../Assets/js/menu.js"></script>
</body>
</html>
