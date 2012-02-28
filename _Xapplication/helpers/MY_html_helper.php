<?php
/**
* Generate line include src script
* @param string $src : string with route from script
*/
function link_script($src = '')
{       
    $index_page = FALSE;
    $type = 'text/javascript';

    $CI =& get_instance();

    $link = '<script ';

    if ( strpos($src, '://') !== FALSE)
    {
            $link .= 'src="'.$src.'" ';
    }
    else
    {
            $link .= 'src="'.$CI->config->slash_item('base_url').$src.'"';
    }
    $link .= ' type="'.$type.'">';

    $link .= '</script>';
    return $link;
}
