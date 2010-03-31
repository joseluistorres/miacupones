<div id="left-container">
          <img src="../img/Contenido/subtitulo-categorias.jpg?x" id="subcatego-btn" alt=""/>
          		 <div id="categorias">
                 <?php
                 $count = 1;
                 
                 foreach ($categorias as $categoria){
                     $arrAtribsImage = array(
        "alt" => "".$categoria['Categoria']['titulo']."");
                 	
                    $url_cat = array('controller' => 'cupones', 'action' => 'porCategoria', $categoria['Categoria']['id']);
                    $link = $html->link($categoria['Categoria']['titulo'], $url_cat, false, false);
                    if (($count % 2)==0){
                    	$class = 'categorias-2';
                    }else{
                    	$class = 'categorias';
                    }
                    $count++;
                    echo $html->div($class, $link);
                 }
                 ?>
          	    	
         		 </div>
         		 <a href="#" id="anunciate"><img src="../img/etiqueta-anunciate.jpg" alt="Anunciate con nosotros" /></a>
        </div> <!-- -end top-container -->