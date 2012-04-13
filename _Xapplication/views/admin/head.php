<?php 
header ('Content-type: text/html; charset=utf-8');
echo doctype('xhtml11');  ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Administración Joseruzafa.es</title>
    <?php

        echo link_tag('public/admin/css/reset.css');
        echo link_tag('public/admin/css/style.css');
        echo link_tag('public/admin/css/invalid.css');
        echo link_tag('public/admin/css/blue.css');
    ?>
     <!--[if IE 7]>
        <?php  echo link_tag('public/admin/css/ie.css'); ?>
    <![endif]-->
     
     <?php
        echo link_script("public/admin/js/jquery-1.3.2.min.js");
        echo link_script("public/admin/js/simpla.jquery.configuration.js");
        echo link_script("public/admin/js/facebox.js");
        echo link_script("public/admin/js/jquery.wysiwyg.js");
        echo link_script("public/admin/js/scripts.js");
     ?>
     
     <!-- Internet Explorer .png-fix -->
		
    <!--[if IE 6]>

        <?=link_script("public/admin/js/DD_belatedPNG_0.0.7a.js");?>
        <script type="text/javascript">
            DD_belatedPNG.fix('.png_bg, img, li');
        </script>
    <![endif]-->
</head>