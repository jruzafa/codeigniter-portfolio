<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
if ( ! function_exists('is_current')) 
{ 
    function is_current($page) {     
        if($page ==  current_url()) return "class='current'";
    }
}

?>
