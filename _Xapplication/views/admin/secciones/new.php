<div id="tab1" class="tab-content default-tab" style="display: block;">
<fieldset>             
<?php echo(validation_errors("<div class='notification error png_bg'><div>","</div></div>")); ?>
<?=form_open('admin/sections/create');  ?>
<p>
<?php 
$attrNombre['class']="text-input small-input";
$attrNombre['name']="nombre";
$attrNombre['value']=set_value('nombre');
   echo form_label('Nombre','nombre').form_input($attrNombre); ?>
    <br />
</p>

 <p>
<?php 
$attrNombre_en['class']="text-input small-input";
$attrNombre_en['name']="nombre_en";
$attrNombre_en['value']=set_value('nombre_en');

   echo form_label('Nombre (en)','nombre_en').form_input($attrNombre_en); ?>
    <br />
</p>
<p>
    <?php 
    $attrDesc['class'] = "text-input textarea wysiwyg";
    $attrDesc['name'] = "descripcion";
    $attrDesc['value'] = set_value('descripcion');
  echo form_label('Descripcion','descripcion').form_textarea($attrDesc); ?>
    <br />
</p>

<p>
    <?php 
    $attrDesc_en['class'] = "text-input textarea wysiwyg";
    $attrDesc_en['name'] = "descripcion_en";
    $attrDesc_en['value'] = set_value('descripcion_en');
  echo form_label('Descripcion (en)','descripcion_en').form_textarea($attrDesc_en); ?>
    <br />
</p>
 <p>
<?php $attrSubmit['class']='button';
$attrSubmit['name']='crear';
$attrSubmit['value']='Crear';
   echo form_submit($attrSubmit); ?>
     <br />
 </p>
<?=form_close();?>
</fieldset>
<div class="clear"></div><!-- End .clear -->
</div>