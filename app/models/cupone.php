<?php
    class Cupone extends AppModel
    {
        var $name = 'Cupone';

       var $belongsTo = array('mia_clientes' =>
                 array('className'    => 'Mia_clientes',
                     'conditions'   => '',
                     'order'        => '',
                     'foreignKey'   => 'mia_cliente_id'
                 )
             );
            
    }
?>
