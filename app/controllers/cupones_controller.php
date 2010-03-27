<?php
    class CuponesController extends AppController
    {
        var $components = array('Autocomplete');
        var $helpers = array('Html', 'Javascript', 'Ajax', 'cupondiv', 'Text');
        
        function search() {
            
            $this->set('categorias', $this->getCategorias());
            
             if(isset($this->data['Cupone']['titulo'])) {
                 $keywords = $this->data['Cupone']['titulo'];
             }else{
                $keywords = '';
             }
             
             $resultsSearchCupons = $this->Cupone->getResults($keywords, 'contador', 'activo');
             $this->set('resultsSearchCupons', $resultsSearchCupons);
        }
        
        function index() {

            $this->set('categorias', $this->getCategorias());
                        
            $mostPrintedCupons = $this->Cupone->getResults('', 'contador', 'activo');
            $this->set('mostPrintedCupons', $mostPrintedCupons);
            
            $mostRecentlyCreatedCupons = $this->Cupone->getResults('', 'created', 'activo');
            $this->set('mostRecentlyCreatedCupons', $mostRecentlyCreatedCupons);
            

        }
        
        function porCategoria(){
            $this->set('categorias', $this->getCategorias());
            $this->set('test', print_r($this->params['pass'][0], true)."xxx");
            
             if(isset($this->params['pass'][0])) {
                 $categoria = $this->params['pass'][0];
             }else{
                $categoria = '';
             }
             
             $resultsSearchCupons = $this->Cupone->getResults(null, 'contador', 'activo', $categoria);
             $this->set('resultsSearchCupons', $resultsSearchCupons);
        }
        
        private function getCategorias(){
            $this->loadModel('Categoria');
            return $this->Categoria->getAllWithCupons(); 
        }
        
    }
?>
