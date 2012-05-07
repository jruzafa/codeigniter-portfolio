<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
* Transform name if work from database to image filename
* @param string $name : string from database to convert image filename
*/

function paramsImgWork($name,$width,$height,$type,$class = null){
    //check variable is it empty
    if($name!=""){
     $name=trim($name);
     $name=str_replace(" ","",$name);
     $name=strtolower($name);
     
     
       $img_properties=array('class' => $class,
                            'alt' => $name,
                            'title' => $name,
                            'src' => "public/images/fotos_trabajos/".$name."_".$type.".jpg",
                            'width' => $width.'px',
                            'height' => $height.'px');
       
       return $img_properties;
    }
}

?>
