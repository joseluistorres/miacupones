<div class="header-logo">
          <img src="assets/logo.png" alt="micupon.mx" />
<?php echo $form->create('Cupone',array('action'=>'search'));?>
		
              <div id="searchdiv">
              <?php
                echo $form->input('Search.keywords', array('value' =>'Buscar', 'label' => '', 'div' => 'false'));
                ?>
              </div>
              <div id="drop-box">
             
          <?php
                echo $form->input('Search.tag_id', array('value' =>'Lista Despegable', 'label' => '', 'div' => 'false'));
                ?>
          </div>
                  <input type="hidden" id="searchsubmit">
              </div>
<?php echo $form->end(); ?>
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
          	    	<a href="#"><img src="assets/Contenido/cat-resta.jpg" alt="Restaurantes"/></a>
          		 	<a href="#"><img src="assets/Contenido/cat-bares.jpg" alt="Bares"/></a>
         		 	<a href="#"><img src="assets/Contenido/cat-diversion.jpg" alt="Diversion"/></a>
         		 	<a href="#"><img src="assets/Contenido/cat-servicios.jpg" alt="Servicios"/></a>
          		 	<a href="#"><img src="assets/Contenido/cat-salud.jpg" alt="Salud"/></a>
         		 	<a href="#"><img src="assets/Contenido/cat-talleres.jpg" alt="Talleres"/></a>
         		 	<a href="#"><img src="assets/Contenido/cat-vestir.jpg" alt="Vestir" /></a>
          		 	<a href="#"><img src="assets/Contenido/cat-calzado.jpg" alt="Calzado"/></a>
         		 	<a href="#"><img src="assets/Contenido/cat-varios.jpg" alt="Varios"/></a>
         		 </div>
         		 <a href="#" id="anunciate"><img src="assets/etiqueta-anunciate.jpg" alt="Anunciate con nosotros" /></a>
        </div> <!-- -end top-container -->

        <div id="content-container">        	
          <div id="cupon-container" class="roundedBox">				
            
            	<img src="assets/Contenido/esquinas-contenido/etiqueta-izq.jpg" class="etiqueta-izq" alt=""/>            	
            	<img src="assets/Contenido/esquinas-contenido/etiqueta-der.jpg" class="etiqueta-der" alt=""/>
            <div class="cupon-title">Lo m&aacute;s nuevo</div>
            <div class="coupon-coupons" >
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" /></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" /></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" /></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
            </div>

            <img src="assets/Contenido/esquinas-contenido/etiqueta-izq.jpg" class="etiqueta-izq" alt=""/>            	
            <img src="assets/Contenido/esquinas-contenido/etiqueta-der.jpg" class="etiqueta-der" alt=""/>
            <div class="cupon-title">Lo m&aacute;s impreso</div>            
            <div class="coupon-coupons" >
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" /></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" /></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>
              <a href="#"><img src="assets/Contenido/cupon.jpg" alt="cupon x" class="leftcupon"/></a>             
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