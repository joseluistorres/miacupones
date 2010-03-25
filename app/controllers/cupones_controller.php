<?php
    class CuponesController extends AppController
    {
        var $components = array('Autocomplete');
        var $helpers = array('Html', 'Javascript', 'Ajax', 'cupondiv');
        
        function search() {
             if(isset($this->passedArgs['Search.keywords'])) {
                 $keywords = $this->passedArgs['Search.keywords'];
             }else{
                $keywords = '';
             }
             
             $resultsSearchCupons = $this->Cupone->getResults($keywords, 'contador', 'activo');
             $this->set('resultsSearchCupons', $resultsSearchCupons);
        }
        
        function index() {

            $this->loadModel('Categoria');
            $categorias = $this->Categoria->getAllWithCupons();
            $this->set('categorias', $categorias);
                        
            $mostPrintedCupons = $this->Cupone->getResults('', 'contador', 'activo');
            $this->set('mostPrintedCupons', $mostPrintedCupons);
            
            $mostRecentlyCreatedCupons = $this->Cupone->getResults('', 'created', 'activo');
            $this->set('mostRecentlyCreatedCupons', $mostRecentlyCreatedCupons);
            

        }
        
    }
?>
