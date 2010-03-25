<div class="header-logo">
          <img src="assets/logo.png" alt="micupon.mx" />
<?php 

echo $this->element('searchForm');

?>
 </div>
 

        <div class="header-title">
          <img src="assets/titulo-busca-ahorro.jpg" id="buscahorro-img" alt="" />
          <img src="assets/edificios.jpg" id="edificios-img" alt="" />
          <a href="#"><img src="assets/btn-obtener-cupon.jpg" id="obtenercupon-btn" alt="Haz click y enterate" /></a>
        </div>
      </div> <!-- head-wrap -->

      <div id="container">

        <div id="left-container">
          <img src="assets/Contenido/subtitulo-categorias.jpg" id="subcatego-btn" alt=""/>
          		 <div id="categorias">
                 <?php
                 foreach ($categorias as $categoria){
                     $arrAtribsImage = array(
        "alt" => "".$categoria['Categoria']['titulo']."", 
       'url' => array('controller' => 'cupone', 'action' => 'view', $categoria['Categoria']['id'])
    );
                 	echo $html->image("Contenido/".$categoria['Categoria']['img_categoria'], $arrAtribsImage);
                 }
                 ?>
          	    	
         		 </div>
         		 <a href="#" id="anunciate"><img src="assets/etiqueta-anunciate.jpg" alt="Anunciate con nosotros" /></a>
        </div> <!-- -end top-container -->

        <div id="content-container">        	
          <div id="cupon-container" class="roundedBox">				
            
            	<img src="assets/Contenido/esquinas-contenido/etiqueta-izq.jpg" class="etiqueta-izq" alt=""/>            	
            	<img src="assets/Contenido/esquinas-contenido/etiqueta-der.jpg" class="etiqueta-der" alt=""/>
            <div class="cupon-title">Lo m&aacute;s nuevo</div>
            <div class="coupon-coupons" >
            <?php
            
            echo $cupondiv->setArray($mostPrintedCupons, 3);
            
            ?>
             

            </div>

            <img src="assets/Contenido/esquinas-contenido/etiqueta-izq.jpg" class="etiqueta-izq" alt=""/>            	
            <img src="assets/Contenido/esquinas-contenido/etiqueta-der.jpg" class="etiqueta-der" alt=""/>
            <div class="cupon-title">Lo m&aacute;s impreso</div>            
            <div class="coupon-coupons" >
            
            <?php
            
            echo $cupondiv->setArray($mostRecentlyCreatedCupons, 3, 6);
            
            ?>
            
                           
            </div>

          </div>
        </div> <!-- end left-div -->

        <div id="right-container">
          <div>
            <a href="#"><img src="assets/icon-face.jpg" alt="facebook it!"/></a>
            <a href="#"><img src="assets/icon-twitter.jpg" alt="twitealo!"/></a>
            <a href="#"><img src="assets/icon-mail.jpg" alt="email it!"/></a>
          </div>
          <a href="#"><img src="assets/Contenido/banner-publicidad1.jpg" alt="publicidad 1"/></a>
          <a href="#"><img src="assets/Contenido/banner-publicidad2.jpg" alt="publicidad 2"/></a>
          <a href="#"><img src="assets/Contenido/banner-publicidad3.jpg" alt="publicidad 3" /></a>
        </div> <!-- end right-container -->

      </div> <!-- end container -->