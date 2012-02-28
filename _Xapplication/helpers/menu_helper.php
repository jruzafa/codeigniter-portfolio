<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
if ( ! function_exists('is_current')) 
{ 
    function is_current($page) {
        /*$this_page = $_SERVER['REQUEST_URI']; // will return /path/to/file.php
        
        //separa la url por el caracter /
        $bits = explode('/',$this_page);
        //retorna el nombre del fichero
        $this_page = $bits[count($bits)-1]; // will return file.php, with parameters if case, like file.php?id=2
        
        //separa los caracteres del nombre de fichero
        $bits = explode('?',$this_page);
        
        //retorna el
        $this_script = $bits[0]; // will return file.php, no parameters
        //return ($page == $this_script?"class='current'":false); // return $return if this is $page, false otherwise
        
        if($page == $this_script){
            return "class='current'";
        }elseif($page==''){
            return "class='current'";
        }else{
            return false;
        }*/
        
        
        if($page ==  current_url()) return "class='current'";
    }
}


 

?>
