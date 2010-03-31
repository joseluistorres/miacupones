<?php

echo $this->element('headerdivcontainer', array('tituloDiv' => $tituloDiv));

?>
	<div style="border:2px solid blue;" >
<?php

//echo $cupondiv->setArray($arrCupons, $cols, $rows);

	foreach ($arrCupons as $cupon){
        echo $cupon['Cupone']['titulo']."<br />";
        echo $cupon['Cupone']['descripcion']."<br />";
        echo $cupon['Cupone']['imagen_url']."<br />";
        echo $cupon['Cupone']['vigencia']."<br />";
        echo $cupon['Cupone']['contador']."<br />";
        $contador = (int)$cupon['Cupone']['contador'];
        //echo "<pre>".print_r($cupon)."</pre>";        
	}
    
if ($contador>=1){
    echo $form->create('Cupone',array('action'=>'planilla'));
    echo $form->input('Cupone.id', array('type' => 'hidden', 'value' => $cupon['Cupone']['id']));
    echo $form->end("Agregar a planilla");
}
?>
<form>

</div>

<?php

echo $this->element('footerdivcontainer');

?>