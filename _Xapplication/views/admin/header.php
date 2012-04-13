<body>
<div id="body-wrapper">
<div id="sidebar">
<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
<h1 id="sidebar-title"><?=anchor('http://joseruzafa.es','JoseRuzafa.es');?></h1>
<!-- Logo (221px wide) -->
<a href="#"><?= img(array('id' => 'logo','src' => 'public/admin/images/logo_or.png')); ?></a>
<!-- Sidebar Profile links -->


<div id="profile-links">
Hola, <a title="Edit your profile" href="#"><?=$this->session->userdata('email'); ?></a>, Ultimo acceso:  <?php echo unix_to_human($this->session->userdata('last_activity'));?><br>
<br>
<?=anchor('http://joseruzafa.es/es','Ver el sitio');?> | <?=anchor('admin/dashboard/logout','Cerrar sesi&oacute;n');?>
</div>