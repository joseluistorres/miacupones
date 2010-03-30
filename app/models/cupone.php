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
        
        function search($conditions=null, $orderBy=null) {
            return $this->find('all', array('conditions' => $conditions, 'order' => $orderBy));
            
        }
        
        function getResults($keywords=null, $orderBy=null, $activo=null, $categoria=null, $cupon_id=null) {
            $conditions = $this->createConditionsArray($keywords, $activo, $categoria, $cupon_id);
            if (isset($orderBy)) {
                    $orderBy = array($this->name.'.'.$orderBy);
            }
            return $this->search($conditions, $orderBy);
        }
        
        function createConditionsArray($keywords=null, $activo=null, $categoria=null, $cupon_id=null) {
            $conditions = array();
            
            if (isset($keywords)) {
                $conditions['OR'] =  array(
                                $this->name.'.titulo LIKE' => "%$keywords%",
                                $this->name.'.descripcion LIKE' => "%$keywords%",

                        );
            }
            
            if (isset($activo)) {
                $activoConditions = array(
                    $this->name.'.status' => "activo",
                    $this->name.'.vigencia >=' => date('m-d-y')
                    );
                    
                if (isset($categoria)) {
                    $activoConditions[$this->name.'.categoria_id'] = $categoria;
                }
                
                if (isset($cupon_id)) {
                    $activoConditions[$this->name.'.id'] = $cupon_id;
                }
                
                $conditions['AND'] = $activoConditions;
            }
            
            
                
           
                
            return $conditions;
        }
        
         
    }
?>
