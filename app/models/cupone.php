<?php
    class Cupone extends AppModel
    {
        var $name = 'Cupone';

       var $belongsTo = array(
           'mia_clientes' =>
                 array('className'    => 'Mia_clientes',
                     'conditions'   => '',
                     'order'        => '',
                     'foreignKey'   => 'mia_cliente_id',
                     
                 ),
             'categorias' =>
                      array('className'    => 'Categorias',
                          'conditions'   => '',
                          'order'        => '',
                          'foreignKey'   => 'categoria_id',

                      )
             );
        
        function search($conditions=null) {
            return $this->find('all', array('conditions' => $conditions));
            
        }
        
        function getResults($keywords=null) {
            $conditions = $this->createConditionsArray($keywords);
            return $this->search($conditions);
        }
        
        function createConditionsArray($keywords=null, $orderBy=null, $activo=null) {
            $conditions = array();
            
            if (isset($keywords)) {
                $conditions['OR'] =  array(
                                $this->name.'.titulo LIKE' => "%$keywords%",
                                $this->name.'.descripcion LIKE' => "%$keywords%",

                        );
            }
            
            if (isset($activo)) {
                $conditions['AND'] = array(
                    $this->name.'.status' => "activo",
                    $this->name.'.vigencia >=' => date('m-d-y')
                    );
            }
            
                
            if (isset($orderBy)) {
                $conditions['order'] = array($this->name.'.'.$orderBy);
            }
                
            return $conditions;
        }
        
         
    }
?>
