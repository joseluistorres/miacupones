<?php

	echo $this->element('headerdivcontainer', array('tituloDiv' => $tituloDiv));
  
    echo $cupondiv->setArray($arrCupons, $cols, $rows);
    
    echo $this->element('footerdivcontainer');

?>