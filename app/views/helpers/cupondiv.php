<?php

    class CupondivHelper extends AppHelper{
        
        var $helpers = array('Html', 'Text');
        
        function setArray($arrCupones=array(), $cols=3, $rows=0){
            $count = 1;
            $thumbDiv = "";

                        foreach ($arrCupones as $cupon){
                        	$mod = ($count-1) % $cols;
                            $arrAtribsImage = array(
                'alt' => "".$cupon['Cupone']['titulo']."");

                        	if ($count==1 || $mod==0){
                            	$classthumb = 'thumbnail';
                            }else{
                            	$classthumb = 'thumbnail leftcupon';
                            }


                            $imageCupon = $this->Html->link($this->Html->image('Contenido/'.$cupon['Cupone']['imagen_url'], $arrAtribsImage),
                            'http://192.168.50.213/img/Contenido/'.$cupon['Cupone']['imagen_url'], array('rel' => 'lightbox', 'title' => "".$cupon['Cupone']['titulo']."", 'escape' =>false));
                            $count++;
                            
                            $frame_image = $this->Html->div('frame_image', $imageCupon);
                            $tituloCupon = $this->Html->div('tituloCupon', $this->Html->link($this->Text->truncate($cupon['Cupone']['titulo'],25,'',false), '#'));
                            $textoCupon = $this->Html->div('textoCupon', $cupon['Cupone']['descripcion']);
                            
                            $thumbDiv .= $this->Html->div($classthumb, $frame_image.$tituloCupon.$textoCupon);


                            if ($rows==($count-1) && $rows!=0)
                                break;
                        }
                        
                return $this->output($thumbDiv);
        }
    }
?>