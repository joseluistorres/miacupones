<?php
    class CuponesPublicado extends AppModel
    {
        var $name = 'CuponesPublicado';

       var $belongsTo = array('cupones' =>
                 array('className'    => 'cupone',
                     'conditions'   => '',
                     'order'        => '',
                     'foreignKey'   => 'cupone_id'
                 )
             );
            
    }
?>
