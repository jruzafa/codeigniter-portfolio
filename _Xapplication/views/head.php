<?php 
header ('Content-type: text/html; charset=utf-8');
echo doctype('xhtml11'); 
switch($this->lang->lang()){
        case 'en':
           $title_suffix = 'Developer web';
           break;
        case 'es':
           $title_suffix = 'Programador web';
           break;
    }

?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->lang->lang(); ?>">
<head>
<title><?=$title; ?> - <?=$title_suffix?> | Jose Ruzafa Sierra</title>
    <?php 

    $meta = array(       
        array('name' => 'title', 'content' => $title.' - '.$title_suffix.' | Jose Ruzafa Sierra'),
        array('name' => 'robots', 'content' => 'index, follow'),
        array('name' => 'description', 'content' => $description),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta); ?>
    <!--[if IE 7]>
        <?php 
         echo link_tag('public/css/ie7.css');
         echo link_tag('public/css/ie-style.css');  ?>
    <![endif]-->
    <!--[if IE 8]>
        <?php  echo link_tag('public/css/anythingslider-ie.css');  ?>
    <![endif]-->
    
     <script type="text/javascript">
        lang = '<?=$this->lang->lang()?>';        
    </script>
    <?php
    $ci = get_instance();
    $controller_name = get_class($ci); 
    echo switchlibrary($controller_name); ?>
     <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-8206524-10']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>   
</head>
<body>
<div id="wrapper">
