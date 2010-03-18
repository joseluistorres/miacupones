<?php echo $form->create('Product',array('action'=>'search'));?>
        <fieldset>
                <legend><?php __('Product Search xxx');?></legend>
        <?php
                echo $form->input('Search.keywords');
                echo $form->input('Search.tag_id');
                echo $form->submit('Search');
        ?>
        </fieldset>
<?php echo $form->end();?>