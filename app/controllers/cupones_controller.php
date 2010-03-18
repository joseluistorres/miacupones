<?php
    class CuponesController extends AppController
    {
        //var $scaffold;
        
        function search() {
                // the page we will redirect to
                $url['action'] = 'index';
               
                // build a URL will all the search elements in it
                // the resulting URL will be
                // example.com/cake/products/index/Search.keywords:mykeyword/Search.tag_id:3
                foreach ($this->data as $k=>$v){
                        foreach ($v as $kk=>$vv){
                                $url[$k.'.'.$kk]=$vv;
                        }
                }
echo "testxxx";
                // redirect the user to the url
                $this->redirect($url, null, true);
        }
        
        function index() {
                // the elements from the url we set above are read  
                // automatically by cake into $this->passedArgs[]
                // eg:
                // $passedArgs['Search.keywords'] = mykeyword
                // $passedArgs['Search.tag_id'] = 3

                // we want to set a title containing all of the
                // search criteria used (not required)         
                $title = array();
               
                //
                // filter by keywords
                //
                if(isset($this->passedArgs['Search.keywords'])) {
                        $keywords = $this->passedArgs['Search.keywords'];
                        $conditions['OR'] =  array(
                                        'Cupone.titulo LIKE' => "%$keywords%",
                                        'Cupone.descripcion LIKE' => "%$keywords%",
                                        
                                );
                        
                        $this->data['Search']['keywords'] = $keywords;
                        $title[] = __('Keywords',true).': '.$keywords;
                }
                
                $conditions['AND'] = array(
                    'Cupone.status' => "activo",
                    'Cupone.vigencia >=' => date('m-d-y')
                    );
                
                
                $this->paginate['conditions'][] = $conditions;
 
                //
                // filter by tag (habtm) - id
                //
                /*
                if (isset($this->passedArgs['Search.tag_id'])) {
						
                        $this->Product->bindModel(array(
                                'hasOne' => array(
                                        'ProductToTag' => array(
                                                'className' => 'ProductToTag',
                                                'foreign_key' => 'product_id',
                                        ),
                                ),
                        ),false);
                                               
                        // set the conditions
                        $this->paginate['conditions'][]['ProductToTag.tag_id'] = $this->passedArgs['Search.tag_id'];

                        // set the Search data, so the form remembers the option
                        $this->data['Search']['tag_id'] = $this->passedArgs['Search.tag_id'];

                        // set the Page Title to the Tag Name
                        $title[] = __('Tag',true).': '.$this->Product->Tag->field('name',array('Tag.id'=>$this->passedArgs['Search.tag_id']));
                        
                }
                */
             
                // get products           
                $products = $this->paginate();
 $this->set('arrCupones', $products);
                /*if (count($products) == 0) {
                   echo Configure::read('Settings.NoDataMessage');
                }*/
               
                // set title
                $title = implode(' | ',$title);
                $title = (isset($title)&&$title)?$title:'All Cupones';
               
                // set related data
              /*  $tags = $this->Product->Tag->find('list');
                $this->set(compact('products','tags','title'));
                */
        }
    }
?>
