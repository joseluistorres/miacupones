<?php
	echo $this->element('cupondivcontainer', array('tituloDiv' => "Lo m&aacute;s nuevo", 'arrCupons' => $mostPrintedCupons, 'cols' => 3, 'rows' => ''));
    
    echo $this->element('cupondivcontainer', array('tituloDiv' => "Lo m&aacute;s impreso", 'arrCupons' => $mostRecentlyCreatedCupons, 'cols' => 3, 'rows' => 6));
?>