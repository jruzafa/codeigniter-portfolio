<div id="tab1" class="tab-content default-tab" style="display: block;">
    <table>
        <thead>
            <tr>
                <th><input type='checkbox' class='check-all'></th>
                <th>Nombre</th>
                <th>Descripci&oacute;n</th>
                <th>Fecha de creaci&oacute;n</th>
                <th>Fecha de modificaci&oacute;n</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $cont = 0;
        foreach ($sections as $row)
        {
            echo "<div id='capadesc" . $row['id'] . "' style='display: none'>" .$row['descripcion_es'] . "</div>";

            if ($cont == 0 || ($cont % 2) == 0):
                echo "<tr class='alt-row'>";
            else:
                echo "<tr>";
            endif;

            echo "<td><input type='checkbox'></td>";
            echo "<td>" . $row['nombre_es']."</td>";
            echo "<td><a href='#capadesc" . $row['id'] . "' rel='modal' title='Ver descripci&oacute;n'>".img("public/admin/images/icons/magnifying_glass.gif",'Ver descripcion')."</a></td>";
            echo "<td>" . $row['fecha_creacion']. "</td>";
            echo "<td>" . $row['fecha_modificacion']. "</td>";
            echo "<td>".anchor('admin/sections/edit/'.$row['id'],img('public/admin/images/icons/pencil.png','Editar'));

            if($row['id']!=1):
                echo anchor('admin/sections/delete/'.$row['id'],img('public/admin/images/icons/cross.png','Borrar'));
            endif;

            echo "</td>";
            echo "</tr>";
            $cont++;
        }
        ?>

        </tbody>
        <tfoot>
            
            <td colspan="6">
                    <div class="bulk-actions align-left">
                            <select name="dropdown">
                                    <option value="option1">Choose an action...</option>
                                    <option value="option2">Edit</option>
                                    <option value="option3">Delete</option>
                            </select>
                            <a class="button" href="#">Apply to selected</a>
                    </div>

                    <div class="pagination">
                            <?=$this->pagination->create_links();?>
                            <a href="#" title="First Page">« Primero</a><a href="#" title="Previous Page">« Previo</a>
                            <a href="#" class="number" title="1">1</a>
                            <a href="#" class="number" title="2">2</a>
                            <a href="#" class="number" title="3">3</a>
                            <a href="#" class="number" title="4">4</a>
                            <a href="#" title="Next Page">Siguiente »</a><a href="#" title="Last Page">Último »</a>
                    </div> <!-- End .pagination -->
                    <div class="clear"></div>
            </td>
								
        </tfoot>
    </table>
</div>

<div id="tab2" class="tab-content" style="display: block;">
<table>
<thead>
<tr>
<th><input type='checkbox' class='check-all'></th>
<th>Nombre(EN)</th>
<th>Descripci&oacute;n(EN)</th>
<th>Fecha de creaci&oacute;n</th>
<th>Fecha de modificaci&oacute;n</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php 
$cont = 0;
foreach ($sections as $row)
{
/* echo $row['id'];
echo $row['id']
echo $row['body'];*/
echo "<div id='capadesc" . $row['id'] . "_en' style='display: none'>" .$row['descripcion_en'] . "</div>";


if ($cont == 0 || ($cont % 2) == 0):
echo "<tr class='alt-row'>";
else:
echo "<tr>";
endif;
echo "<td><input type='checkbox'></td>";
echo "<td>" . $row['nombre_en'] . "</td>";
echo "<td><a href='#capadesc" . $row['id'] . "_en' rel='modal' title='Ver descripci&oacute;n'>".img("public/admin/images/icons/magnifying_glass.gif",'Ver descripcion')."</a></td>";
echo "<td>" . $row['fecha_creacion']. "</td>";
echo "<td>" . $row['fecha_modificacion']. "</td>";
echo "<td>".anchor('admin/sections/edit/'.$row['id'],img('public/admin/images/icons/pencil.png','Editar'));

if($row['id']!=1):
    echo anchor('admin/sections/delete/'.$row['id'],img('public/admin/images/icons/cross.png','Borrar'));
endif;

echo "</td>";
echo "</tr>";
$cont++;
}
?>
</tbody>
</table>
</div>


