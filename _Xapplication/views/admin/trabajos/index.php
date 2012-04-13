<pre><?php print_r($works); ?></pre>

<div id="tab1" class="tab-content default-tab" style="display: block;">
<table>
<thead>
<tr>
<th><input type='checkbox' class='check-all'></th>
<th>Nombre</th>
<th>Desc</th>
<th>Imagen</th>
<th>Servicios</th>
<th>Enlace</th>
<th>Orden</th>
<th>Fecha de creaci&oacute;n</th>
<th>Fecha de modificaci&oacute;n</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php 
$cont = 0;
foreach ($works as $row)
{

echo "<div id='capadesc" . $row['id'] . "' style='display: none'>" .$row['descripcion_es'] . "</div>";
echo "<div id='imagen" . $row['id'] . "' style='display: none'>" .img('public/images/fotos_trabajos/'.name2imagefn($row['nombre']).'_full.jpg'). "</div>";

if ($cont == 0 || ($cont % 2) == 0):
echo "<tr class='alt-row'>";
else:
echo "<tr>";
endif;

echo "<td><input type='checkbox'></td>";
echo "<td>" . $row['nombre']."</td>";
echo "<td><a href='#capadesc" . $row['id'] . "' rel='modal' title='Ver descripci&oacute;n'>".img("public/admin/images/icons/magnifying_glass.gif",'Ver descripcion')."</a></td>";
echo "<td><a href='#imagen" . $row['id'] . "' rel='modal' title='Ver imagen'>".img("public/admin/images/icons/magnifying_glass.gif",'Ver imagen')."</a></td>";
echo "<td>" . $row['servicios_es']."</td>";
echo "<td>" . $row['enlace']."</td>";
echo "<td>" . $row['orden']."</td>";
echo "<td>" . $row['fecha_creacion']. "</td>";
echo "<td>" . $row['fecha_modificacion']. "</td>";
echo "<td>".anchor('admin/works/edit/'.$row['id'],img('public/admin/images/icons/pencil.png','Editar'));

if($row['id']!=1):
    echo anchor('admin/works/delete/'.$row['id'],img('public/admin/images/icons/cross.png','Borrar'));
endif;

echo "</td>";
echo "</tr>";
$cont++;
}
?>

</tbody>
</table>
</div>

<div id="tab2" class="tab-content" style="display: block;">
<table>
<thead>
<tr>
<th><input type='checkbox' class='check-all'></th>
<th>Nombre</th>
<th>Descripci&oacute;n(EN)</th>
<th>Servicios(EN)</th>
<th>Enlace</th>
<th>Orden</th>
<th>Fecha de creaci&oacute;n</th>
<th>Fecha de modificaci&oacute;n</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php 
$cont = 0;
foreach ($works as $row)
{
echo "<div id='capadesc" . $row['id'] . "_en' style='display: none'>" .$row['descripcion_en'] . "</div>";


if ($cont == 0 || ($cont % 2) == 0):
echo "<tr class='alt-row'>";
else:
echo "<tr>";
endif;
echo "<td><input type='checkbox'></td>";
echo "<td>" . $row['nombre'] . "</td>";
echo "<td>" . $row['servicios_en']."</td>";
echo "<td>" . $row['enlace']."</td>";
echo "<td>" . $row['orden']."</td>";
echo "<td><a href='#capadesc" . $row['id'] . "_en' rel='modal' title='Ver descripci&oacute;n'>".img("public/admin/images/icons/magnifying_glass.gif",'Ver descripcion')."</a></td>";
echo "<td>" . $row['fecha_creacion']. "</td>";
echo "<td>" . $row['fecha_modificacion']. "</td>";
echo "<td>".anchor('admin/works/edit/'.$row['id'],img('public/admin/images/icons/pencil.png','Editar'));

if($row['id']!=1):
    echo anchor('admin/works/delete/'.$row['id'],img('public/admin/images/icons/cross.png','Borrar'));
endif;

echo "</td>";
echo "</tr>";
$cont++;
}
?>
</tbody>
</table>
  
</div>
  <?php echo $links;?>


