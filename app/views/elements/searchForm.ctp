<?php 
	 echo $form->create('Cupone',array('action'=>'search'));
     echo $ajax->autocomplete('Cupone.titulo','', array('maxlength'=>10, 'value' => 'Buscar'));
      echo $form->submit('lupa.jpg', array('class' => 'submitBtn'));
?>       
              <div id="drop-box">
               

          <?php
		      $options=array('1'=>'2x1','2'=>'Gratis');
				echo $form->select('Search.tags',$options, null, array('label' => '', 'div' => 'false'));

                ?>
          </div>
          
                  
              </div>
<?php echo $form->end(); ?>
