<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title><?php echo $title_for_layout?></title>
      <link rel="shortcut icon" href="assets/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <?php echo $scripts_for_layout; 
  	echo $javascript->link('prototype');
	echo $javascript->link('scriptaculous');

  ?>
</head>
  <body>
  <div>
    <div id="wrapper">
      <div id="head-container" >
        <div class="header_usrname">
          <span>Hola</span> Jos&eacute; Luis
        </div>

        <div class="header-tel">
          <img src="assets/icon-tel.png" alt="Contactanos"/>Tel: (312) 314 3049
        </div>

        
          <?php echo $content_for_layout ?>
          
        

      <div class="clean-div"></div>

      <div id="footer-container">
        <a href="#"><img src="assets/menu-quienes-somos.jpg" id="quienes-somos" alt="Quienes somos" /></a>
        <a href="#"><img src="assets/menu-politicas-uso.jpg" alt="Politicas" /></a>
        <a href="#"><img src="assets/menu-como-anunciarte.jpg" alt="Como anunciarte"/></a>
        <a href="#"><img src="assets/menu-preguntas-frecuentes.jpg" alt="Preguntas frecuentes"/></a>
        <a href="#"><img src="assets/contacto.jpg" alt="Contacto" /></a>
        <div class="clean-div"></div>
        <div class="footer-text">
          <span >Derechos Reservados 2010, micupon.mx</span>
        </div>
      </div> <!-- footer-wrapper -->

    </div> <!-- wrapper -->
</div>
   </body>
</html>