<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cupones Beta 1.0</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
<div id="header">
    <div id="menu">Test Menu</div>
</div>

<!-- Here's where I want my views to be displayed -->
<?php echo $form->create('Cupone',array('action'=>'search'));?>
        <fieldset>
                <legend><?php __('Cupone Search');?></legend>
        <?php
                echo $form->input('Search.keywords');
                echo $form->input('Search.tag_id');
                echo $form->submit('Search');
        ?>
        </fieldset>
<?php echo $form->end();?>
<?php foreach ($arrCupones as $cupon): ?>
<div class="desc">

							<h2><?php echo $cupon['Cupone']['titulo'];?></h2>
								<?php echo $cupon['Cupone']['descripcion'];?>
									<div class="rate-post">
					
								<div class="upper">
							
														
									
								<div>
								<img alt="" class="rectangle-rating" src="/img/no-rating2.gif"/>
								</div>
								<em><?php echo $cupon['Cupone']['vigencia'];?></em>

								
							
								 	
								
								</div>
							</div> 
							
						 
								<p>Fresh and stylish, Adara Whistler Hotel brings new meaning to unique boutiques. Adara Whistler Hotel offers a completely original experience: integ... 
							<a href="/profiles/adara-hotel">More</a></p>
						</div>
<?php endforeach; ?>


<!-- Add a footer to each displayed page -->
<div id="footer">...</div>

</body>
</html>