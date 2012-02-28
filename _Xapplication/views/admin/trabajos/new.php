<div id="tab1" class="tab-content default-tab" style="display: block;">
<fieldset>             
<?php echo(validation_errors("<div class='notification error png_bg'><div>","</div></div>")); ?>
<?=form_open_multipart('admin/works/create');  ?>
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
$attrServicios['class']="text-input small-input";
$attrServicios['name']="servicios";
$attrServicios['value']=set_value('servicios');

   echo form_label('Servicios','servicios').form_input($attrServicios); ?>
    <br />
</p>
 <p>
<?php 
$attrServicios_en['class']="text-input small-input";
$attrServicios_en['name']="servicios_en";
$attrServicios_en['value']=set_value('servicios_en');

   echo form_label('Servicios (en)','servicios_en').form_input($attrServicios_en); ?>
    <br />
</p>

<p>
<?php 
$attr_enlace['class']="text-input small-input";
$attr_enlace['name']="enlace";
$attr_enlace['value']=set_value('enlace');
   echo form_label('Enlace','enlace').form_input($attr_enlace); ?>
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
<?php 
$attrNombre['class']="text-input small-input";
$attrNombre['name']="nombre";
$attrNombre['value']=set_value('nombre');
   echo form_label('Nombre','nombre').form_input($attrNombre); ?>
    <br />
</p>
 <p>
<?php $attr_image['class']='text-input small-input';
$attr_image['name']='imagen';
$attr_image['value']=set_value('imagen');
   echo form_label('Imagen','imagen').form_upload($attr_image); ?>
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