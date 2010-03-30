<?php

    class CupondivHelper extends AppHelper{
        
        var $helpers = array('Html', 'Text');
        
        function setArray($arrCupones=array(), $cols=3, $rows=0){
            $count = 1;
            $thumbDiv = "";
            $url = $this->Html->url('/', true);

                        foreach ($arrCupones as $cupon){
                        	$mod = ($count-1) % $cols;
                            $arrAtribsImage = array(
                'alt' => "".$cupon['Cupone']['titulo']."");

                            $classthumb = $this->getClassthumb($count, $mod);
                        	$basicPath = 'Contenido/'.$cupon['Cupone']['imagen_url'];
                        	$complexPath = $url. $basicPath;
                        	$imgThumbnailArr = array('rel' => 'lightbox', 'title' => $cupon['Cupone']['titulo'], 'escape' =>false);
                        	
                            $imageCupon = $this->Html->link($this->Html->image($basicPath, $arrAtribsImage),
                            $complexPath, $imgThumbnailArr);
                            
                            $count++;
                            
                            $tituloFixed = $this->Text->truncate($cupon['Cupone']['titulo'],25,'',false);
                            $url_plus_id = $url.'cupon/'.$cupon['Cupone']['id'];
                            
                            $frame_image = $this->Html->div('frame_image', $imageCupon);
                            $tituloCupon = $this->Html->div('tituloCupon', $this->Html->link($tituloFixed, $url_plus_id));
                            $textoCupon = $this->Html->div('textoCupon', $cupon['Cupone']['descripcion']);
                            
                            $thumbDiv .= $this->Html->div($classthumb, $frame_image.$tituloCupon.$textoCupon);


                            if ($rows==($count-1) && $rows!=0)
                                break;
                        }
                        
                return $this->output($thumbDiv);
        }
        
        function getClassthumb($count=0, $mod=0){
            if ($count==1 || $mod==0){
            	return 'thumbnail';
            }else{
            	return 'thumbnail leftcupon';
            }
             
        }
    }
?>