<?php
if ( ! function_exists('switchlibrary')){
    
    function switchlibrary($controllerName = null){
           if(isset($controllerName)){

                $styles;
                $scripts;

                $returnScripts='';
                $returnStyles='';

                $jquery = 'public/js/jquery.min.js';
                $cufon = 'public/js/cufon.yui.js';
                $quicksand ='public/js/quicksand.js';
                $general = 'public/js/general.js';
                $custom_works = 'public/js/custom_works.js';
                $custom_index = 'public/js/custom_index.js';
                $fancybox = 'public/js/fancybox/jquery.fancybox-1.3.0.pack.js';
                $slider = 'public/js/jquery.anythingslider.js';
                $simpleslide = 'public/js/slide.js';

             //   $reset = 'public/css/reset.css';
                $style = 'public/css/style.css';
                $slidercss = 'public/css/anythingslider.css';
                $fancyboxcss = 'public/js/fancybox/jquery.fancybox-1.3.0.css';
                $twitter = 'public/js/twitter.min.js';

                switch($controllerName){
                    case 'Home':
                        $scripts=array($jquery,$cufon,$quicksand,$simpleslide,$general,$custom_index);
                        $styles=array($style);
                    break;
                    case 'Portfolio':
                        $scripts=array($jquery,$cufon,$quicksand,$fancybox,$slider,$general,$custom_works);
                        $styles=array($style,$slidercss,$fancyboxcss);
                    break;
                    case 'Services':
                        $scripts=array($jquery,$cufon,$quicksand,$general);
                        $styles=array($style);
                    break;
                    case 'Contact':
                        $scripts=array($jquery,$cufon,$quicksand,$general);
                        $styles=array($style);
                    break;
                }

                for($sc=0;$sc<count($scripts);$sc++){
                    $returnScripts.=link_script($scripts[$sc]);
                }

                for($st=0;$st<count($styles);$st++){
                    $returnStyles.=link_tag($styles[$st]);
                }

                return $returnStyles.$returnScripts;
            }else{
                return false;
            }
    }
}
?>
