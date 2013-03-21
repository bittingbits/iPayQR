
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<link rel="apple-touch-icon" sizes="114x114" href="images/splash/splash-icon.png"> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" media="screen and (max-device-width: 320px)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen_402x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title>iPayQR</title>

<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="style/buttons.css" rel="stylesheet" type="text/css">
<link href="style/photoswipe.css" rel="stylesheet" type="text/css">
<link href="style/retina.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" rel="stylesheet" />

<script src="scripts/klass.min.js"></script>
<script src="scripts/jquery.js"></script>
<script src="scripts/photoswipe.js"></script>
<script src="scripts/roundabout.js"></script>
<script src="scripts/retina.js"></script>
<script src="scripts/add2home.js"></script>
<script src="scripts/custom.js"></script>

</head>

<body>

<div class="content">
	 <div class="header">
   	 <div class="logo"> <img src="images/logo.png" width="104" height="75"></div>
  </div>
    
 
	<p class="center-text">&nbsp;</p>

   
    
    <div class="container">
   	  <h3 class="left-text text-space centrar">Juan Pérez López</h3>
   	  <p>&nbsp;</p>
      <div class="texto">Ha elegido pagar con:   
        <?php 
		    if(isset($_POST['enviar'])) {
				echo  $_POST['seleccion'];
		}
	   ?>
      </div>
      <div class="separar"></div>
      <div class="boton"><a href="qr.html">CONTINUAR</a></div>
    
</div> 				
						
						
       
 
   
</div>




</body>
</html>

