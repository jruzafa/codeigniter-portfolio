<div id="fancybox_content">
    <div id="imagen">
        <?php 
        $properties=property_image_work($work['nombre'],500,354,'full');
        echo img($properties); ?>
    </div>
    <div class="clear"></div>
    <div id="texto">
        <h1><?=$work['nombre']; ?></h1>
        <br/>
        <h3><?=$work['servicios']; ?></h3>
        <br/>
        <p><?=$work['descripcion']; ?></p>
        <br/>
        <p><?=anchor($work['enlace'],$this->lang->line('portfolio.viewlink'))?></p>
           
    </div>
</div>

