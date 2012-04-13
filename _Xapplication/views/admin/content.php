<div id="main-content">
    <h2><?=$title;?></h2>
<br/>
<?php if(isset($message)): ?>
    <div id="notifications">
        <div class="notification success png_bg">
        <a href="#" class="close"  title="Cerrar notificación">
            <?php echo img('public/admin/images/icons/cross_grey_small.png'); ?>
        </a>
        <div>
            <?=$message;?>
        </div>
        </div>
    </div>
 <?php endif;?>
    <div class="clear"></div>
    <div class="content-box">
        <div class="content-box-header">
            <h3 style="cursor: s-resize;"><?=$action;?></h3>
            <?php if($action!='Editar' && $action!='Nueva'): ?>
            <ul class="content-box-tabs">
                <li><a class="default-tab" href="#tab1" class="current">ES</a></li> <!-- href must be unique and match the id of target div -->
                <li><a href="#tab2" >EN</a></li>
            </ul>
            <?php endif; ?>
        </div>
    <div class="content-box-content">