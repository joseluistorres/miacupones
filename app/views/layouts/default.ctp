<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title><?php echo $title_for_layout?></title>
      <link rel="shortcut icon" href="../img/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <?php echo $scripts_for_layout;
  	echo $html->css('/css/lightbox'); 
  	echo $javascript->link('prototype');
	echo $javascript->link('scriptaculous');
	echo $javascript->link('lightbox');
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
          <img src="../img/icon-tel.png" alt="Contactanos"/>Tel: (312) 314 3049
        </div>
<div class="header-logo">
          <img src="../img/logo.png" alt="micupon.mx" />
<?php 

echo $this->element('searchForm');

?>
 </div>


        <div class="header-title">
          <img src="../img/titulo-busca-ahorro.jpg" id="buscahorro-img" alt="" />
          <img src="../img/edificios.jpg" id="edificios-img" alt="" />
          <a href="#"><img src="../img/btn-obtener-cupon.jpg" id="obtenercupon-btn" alt="Haz click y enterate" /></a>
        </div>
      </div> <!-- head-wrap -->        
<div id="container">

<?php 

echo $this->element('categorias');

?>        

        <div id="content-container">        	
          <div id="cupon-container" class="roundedBox">				

<?php echo $content_for_layout ?>
          
 
          </div>
        </div> <!-- end left-div -->

        <div id="right-container">
          <div>
            <a href="#"><img src="../img/icon-face.jpg" alt="facebook it!"/></a>
            <a href="#"><img src="../img/icon-twitter.jpg" alt="twitealo!"/></a>
            <a href="#"><img src="../img/icon-mail.jpg" alt="email it!"/></a>
          </div>
          <a href="#"><img src="../img/Contenido/banner-publicidad1.jpg" alt="publicidad 1"/></a>
          <a href="#"><img src="../img/Contenido/banner-publicidad2.jpg" alt="publicidad 2"/></a>
          <a href="#"><img src="../img/Contenido/banner-publicidad3.jpg" alt="publicidad 3" /></a>
        </div> <!-- end right-container -->

      </div> <!-- end container -->       

      <div class="clean-div"></div>

      <div id="footer-container">
        <a href="#"><img src="../img/menu-quienes-somos.jpg" id="quienes-somos" alt="Quienes somos" /></a>
        <a href="#"><img src="../img/menu-politicas-uso.jpg" alt="Politicas" /></a>
        <a href="#"><img src="../img/menu-como-anunciarte.jpg" alt="Como anunciarte"/></a>
        <a href="#"><img src="../img/menu-preguntas-frecuentes.jpg" alt="Preguntas frecuentes"/></a>
        <a href="#"><img src="../img/contacto.jpg" alt="Contacto" /></a>
        <div class="clean-div"></div>
        <div class="footer-text">
          <span >Derechos Reservados 2010, micupon.mx</span>
        </div>
      </div> <!-- footer-wrapper -->

    </div> <!-- wrapper -->
</div>
   </body>
</html>