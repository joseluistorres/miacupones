<?php 
	 echo $form->create('Cupone',array('action'=>'search'));
     echo $ajax->autocomplete('Cupone.titulo','', array('maxlength'=>10, 'value' => 'Buscar'));
?>       
              <div id="drop-box">
               

          <?php
                echo $form->input('Search.tag_id', array('value' =>'Lista Despegable', 'label' => '', 'div' => 'false'));
               // echo $form->submit('Search');
                ?>
          </div>
          
                  <input type="hidden" id="searchsubmit">
              </div>
<?php echo $form->end(); ?>
