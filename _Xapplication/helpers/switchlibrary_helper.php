<?php
if ( ! function_exists('includeCss')){
    
    function includeCss($controllerName = null){
           if(isset($controllerName)){
                $style = 'public/css/style.css';
                $slidercss = 'public/css/anythingslider.css';
                $fancyboxcss = 'public/js/fancybox/jquery.fancybox-1.3.0.css';

                switch($controllerName){
                    case 'Works':
                        $styles=array($style,$slidercss,$fancyboxcss);
                    break;
                    default:
                        $styles=array($style);
                    break;
                }

                foreach ($styles as $style) {
                   $returnStyles.=link_tag($style);
                }

                return $returnStyles;
            }else{
                return false;
            }
    }
}


if ( ! function_exists('includeJs')){
    
    function includeJs($controllerName = null){
           if(isset($controllerName)){
                $jquery = 'public/js/jquery.min.js';
                $cufon = 'public/js/cufon.yui.js';
                $quicksand ='public/js/quicksand.js';
                $general = 'public/js/general.js';
                $custom_works = 'public/js/custom_works.js';
                $custom_index = 'public/js/custom_index.js';
                $fancybox = 'public/js/fancybox/jquery.fancybox-1.3.0.pack.js';
                $slider = 'public/js/jquery.anythingslider.js';
                $simpleslide = 'public/js/slide.js';
     
                switch($controllerName){
                    case 'Home':
                        $scripts=array($jquery,$cufon,$quicksand,$simpleslide,$general,$custom_index);
                    break;
                    case 'Works':
                        $scripts=array($jquery,$cufon,$quicksand,$fancybox,$slider,$general,$custom_works);
                    break;
                    case 'Contact':
                        $scripts=array($jquery,$cufon,$quicksand,$general);
                    break;
                    default:
                        $scripts=array($jquery,$cufon,$quicksand,$simpleslide,$general,$custom_index);
                    break;
                }

                foreach ($scripts as $script) {
                   $returnScripts.=link_script($script);
                }

                return $returnScripts;
            }else{
                return false;
            }
    }
}

?>
