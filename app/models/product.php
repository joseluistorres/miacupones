<?php

class Product extends AppModel {
        var $name = 'Product';
       
        var $hasAndBelongsToMany = array(
                'Tag' => array(
                        'className' => 'Tag',
                        'joinTable' => 'product_to_tags',
                        'foreignKey' => 'product_id',
                        'associationForeignKey' => 'tag_id',
                        'with' => 'ProductToTag',
 
                ),
        );     
       
}

?>