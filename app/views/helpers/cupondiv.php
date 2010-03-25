<?php

    class CupondivHelper extends AppHelper{
        
        var $helpers = array('Html');
        
        function setArray($arrCupones=array(), $cols=3, $rows=0){
            $count = 1;
            $imageCupon = "";

                        foreach ($arrCupones as $cupon){
                        	$mod = ($count-1) % $cols;
                            $arrAtribsImage = array(
                "alt" => "".$cupon['Cupone']['titulo']."", 
               'url' => array('controller' => 'cupone', 'action' => 'view', $cupon['Cupone']['id'])
            );

                        	if ($count==1 || $mod==0){
                            	$arrAtribsImage["class"] = "";
                            }else{
                            	$arrAtribsImage["class"] = "leftcupon";
                            }

                            $imageCupon .= $this->Html->image("Contenido/cupon.jpg", $arrAtribsImage);
                            $count++;
                            if ($rows==($count-1) && $rows!=0)
                                break;
                        }
                        
                return $this->output($imageCupon);
        }
    }
?>