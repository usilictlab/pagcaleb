<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CIIS - USIL</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
    <div class="btn-whatsapp" style="position: fixed; display:block; width:70px; height:70px; right:20px; bottom:110px; border-radius:50%; line-height:80px; text-align:center; z-index:999;">
        <a href="https://api.whatsapp.com/send?phone=51998784390" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="whatsapp" style="height: 50px; width: 50px;">
        </a>
        <div style="width: 50px;position: absolute;left: 10px;">
            <div>
                <a href="http://m.me/ciisUSIL?ref=https://www.facebook.com/ciisUSIL">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" class="wh-messenger-svg-facebook wh-svg-icon" style="background-color: #0084ff; border-radius: 50%; text-align: center;">
                    <path d=" M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd" style="fill: white;">
                    </path>
                </svg>
                </a>
            </div>
        </div>
    </div>

    <header id="header">
        
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" width="217.056" height="55" style="vertical-align:unset"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li> 
                        <li class="dropdown">
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Cursos de especialización <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="gestion-de-la-transformacion-digital.html">Gestión de la transformación digital</a></li>
                                <li><a href="ciberseguridad-para-los-negocios.html">Ciberseguridad para los negocios</a></li>
                            </ul>
                        </li>
                        
                                            
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    
    <section id="inscripciones" style="background: #f5f5f5">
        <div class="container">
            <div class="center">        
                <h2>Tus datos fueron enviados</h2>
                <p class="lead">Nos estaremos poniendo en contacto lo antes posible.</p>
                <p>    </p>
                <p> Estimado <?php echo htmlspecialchars($_POST['nombres']); ?> <?php echo htmlspecialchars($_POST['apellidos']); ?>.</p>
                <p> Tenemos tu correo Electrónico registrado <?php echo htmlspecialchars($_POST['email']); ?> y tu numero de Celular: <?php echo (int)$_POST['celular']; ?>, a los cuales nos contactaremos con usted. </p>
                <a class="btn btn-primary" target="_blank" href="http://bit.ly/cursoCN" style="font-size: 22px;">VOLVER
                </a>        
            </div> 
        </div><!--/.container-->
    </section><!--/#contact-page-->    

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="widget">
                        <h3>HOME</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-4 col-sm-4">
                    <div class="widget">
                        <h3>CURSOS DE ESPECIALIZACIÓN</h3>
                        <ul>
                            <li><a href="gestion-de-la-transformacion-digital.html">Gestión de la transformación digital</a></li>
                            <li><a href="ciberseguridad-para-los-negocios.html">Ciberseguridad para los negocios</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
                <div class="col-md-4 col-sm-4">
                    <div class="widget">
                        <h3>CONTÁCTENOS</h3>
                        <ul>
                            <li><a href=""></a></li>
                            <li><a href=""></a>Av. La Fontana 550, La Molina</li>
                            <li><a href=""></a>Central: (511) 317 - 1000</li>
                            <br>
                            <li><a href=""></a>Redes sociales</li>
                            <li><a href="https://www.facebook.com/ciisUSIL"><i class="fa fa-facebook-square" style="font-size: 30px; line-height: 45px; margin-right: 0px;"></i></a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank" href="https://www.usil.edu.pe/pregrado/ingenier%C3%ADa/ingenier%C3%ADa-informatica-y-de-sistemas/carrera">Ing. Informática y de Sistemas USIL</a>. All Rights Reserved.
                </div>
                

            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 
$nombre="";
if (!empty($_REQUEST['nombres'])){
$nombre=$_REQUEST['nombres'];
}

$apellidos="";
if (!empty($_REQUEST['apellidos'])){
$apellidos=$_REQUEST['apellidos'];
}

$email="";
if (!empty($_REQUEST['email'])){
$email=$_REQUEST['email'];
}

$celular="";
if (!empty($_REQUEST['celular'])){
$celular=(int)$_REQUEST['celular'];
}

$civerseguridad="";
if (!empty($_REQUEST['transformacion_digital'])){
$civerseguridad=$_REQUEST['transformacion_digital'];
}

$transformacion_digital="";
if (!empty($_REQUEST['civerseguridad'])){
$transformacion_digital=$_REQUEST['civerseguridad'];
}

$postulante="";
if (!empty($_REQUEST['postulante'])){
$postulante=$_REQUEST['postulante'];
}

$fire="";
$file = $nombre.",".$apellidos.",".$email.",".$celular.",".$civerseguridad.",".$transformacion_digital.",".$postulante.";\n";


// Modificar linea deseada

echo $file;

$fh   = fopen("datos.txt", 'r+') or die("Ocurrio un error al abrir el archivo");
  $texto = fgets($fh);
  
  fseek($fh, 0, SEEK_END);
  fwrite($fh, "$file") or die("No se puede escribir en el archivo");
  fclose($fh);  

?>