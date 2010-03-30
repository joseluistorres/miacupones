<?php

    class Categoria extends AppModel
   {
       var $name = 'Categoria';
       var $hasMany = array(
              'cupones' =>
                    array('className'    => 'Cupones',
                        'conditions'   => '',
                        'order'        => '',
                        'foreignKey'   => 'categoria_id',

                    ));
                    
       function search($conditions=null) {
           return $this->find('all', array('conditions' => $conditions));
           
       }
       
       function getAllWithCupons() {
           
           $conditionsSubQuery = array($this->name.'.id'." = `".$this->cupones->name."`.`categoria_id`");
           

           $dbo = $this->getDataSource();
           $subQuery = $dbo->buildStatement(
               array(
                   'fields' => array('count(*)'),
                   'table' => $dbo->fullTableName(''.$this->cupones->name.''),
                   'alias' => ''.$this->cupones->name.'',
                   'limit' => null,
                   'offset' => null,
                   'joins' => array(),
                   'conditions' => $conditionsSubQuery,
                   'order' => null,
                   'group' => null
               ),
               $this->name
           );
           $subQuery = ' (' . $subQuery . ')>=1 ';
           $subQueryExpression = $dbo->expression($subQuery);

           $conditions[] = $subQueryExpression;
           
           return $this->find('all', compact('conditions'));
           
       }
       
       function getNombreCategoria($categorias=null, $categoria_id=0){
           foreach ($categorias as $categoria){
              
               if ($categoria['Categoria']['id']==$categoria_id){
                   return $categoria['Categoria']['titulo'];
               }
           }
           
           return false;
       }
   }

?>