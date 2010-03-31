<?php
    class CuponesController extends AppController
    {
        var $uses = array('Cupone', 'Categoria');
        var $components = array('Autocomplete');
        var $helpers = array('Html', 'Javascript', 'Ajax', 'cupondiv', 'Text');
        var $categorias = null;
        
        function search() {
            
            $this->setCategorias($this->getCategorias());
            
             if(isset($this->data['Cupone']['titulo'])) {
                 $keywords = $this->data['Cupone']['titulo'];
             }else{
                $keywords = '';
             }
             
             if(isset($this->data['Search']['tags']))
             
             $resultsSearchCupons = $this->Cupone->getResults($keywords, 'contador', 'activo');
             $this->set('resultsSearchCupons', $resultsSearchCupons);
        }
        
        function index() {
            if ($this->Session->check('Username')){
                $this->set('username', $this->Session->read('Username')) ;
            }else{
                $this->set('username','Bienvenido') ;
            }

            $this->setCategorias($this->getCategorias());
                        
            $mostPrintedCupons = $this->Cupone->getResults('', 'contador', 'activo');
            $this->set('mostPrintedCupons', $mostPrintedCupons);
            
            $mostRecentlyCreatedCupons = $this->Cupone->getResults('', 'created', 'activo');
            $this->set('mostRecentlyCreatedCupons', $mostRecentlyCreatedCupons);
            

        }
        
        function porCategoria(){
            $this->setCategorias($this->getCategorias());
            
             if(isset($this->params['pass'][0])) {
                 $categoria = $this->params['pass'][0];
             }else{
                $categoria = '';
             }
             
             $this->set('nombreCategoria', $this->getNombreCategoria($this->categorias, $categoria));
             
             $resultsSearchCupons = $this->Cupone->getResults(null, 'contador', 'activo', $categoria);
             $this->set('resultsSearchCupons', $resultsSearchCupons);
        }
        
        function cupon(){
             $this->setCategorias($this->getCategorias());
             
            if(isset($this->params['pass'][0])) {
                 $cupon_id = $this->params['pass'][0];
             }else{
                $cupon_id = '';
             }
             
             
             $resultsSearchCupons = $this->Cupone->getResults(null, 'contador', 'activo', null, $cupon_id);
             $this->set('resultsSearchCupons', $resultsSearchCupons);
        }
        
        function planilla(){
            
        }
        
        private function getCategorias(){
           return $this->Categoria->getAllWithCupons(); 
        }
        
        private function getNombreCategoria($categorias=null, $categoria_id=0){
            return $this->Categoria->getNombreCategoria($categorias, $categoria_id); 

        }
        
        private function setCategorias($categorias=null){
            $this->categorias = $this->getCategorias();
            $this->set('categorias', $this->categorias);
        }
    }
?>
