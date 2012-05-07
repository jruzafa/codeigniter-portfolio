<div id="fancybox_content">
    <div id="imagen">
        <?php 
        $properties=property_image_work($work['name'],500,354,'full');
        echo img($properties); ?>
    </div>
    <div class="clear"></div>
    <div id="texto">
        <h1><?=$work['name']; ?></h1>
        <br/>
        <h3><?=$work['services']; ?></h3>
        <br/>
        <p><?=$work['description']; ?></p>

    </div>
</div>

