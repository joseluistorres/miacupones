<?php echo $form->create('Cupone',array('action'=>'search'));?>
		
              <div id="searchdiv">
              <?php
                echo $form->input('Search.keywords', array('value' =>'Buscar x', 'label' => '', 'div' => 'false'));
                echo $form->submit('Search');
                
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
