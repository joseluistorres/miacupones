<div id="left-container">
          <img src="../img/Contenido/subtitulo-categorias.jpg" id="subcatego-btn" alt=""/>
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
         		 <a href="#" id="anunciate"><img src="../img/etiqueta-anunciate.jpg" alt="Anunciate con nosotros" /></a>
        </div> <!-- -end top-container -->