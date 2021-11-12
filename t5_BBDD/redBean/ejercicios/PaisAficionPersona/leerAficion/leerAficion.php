<?php
require_once '../bd/bdh.php';
conectar();
$aficiones = R::findAll('aficion');
desconectar();
?>
<h1>Lista de aficiones:</h1>
<table border="1">
	<tr>
		<th rowspan="2">Nombre Afición</th>
		<th colspan="2">Personas</th>
	</tr>
	<tr>
		<th>Les gusta</th>
		<th>La odian</th>
	</tr>
	<?php foreach ($aficiones as $aficion):?>
		<tr>
			<td>
				<?=$aficion -> nombreAficion?>
			</td>
			<td>
				<?php foreach ($aficion -> ownGustaList as $gusta):?>
					<?=$gusta -> persona -> nombrePersona?>
					<?='<br/>'?>
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach($aficion -> ownOdiaList as $odia):?>
					<?=$odia -> persona -> nombrePersona ?>
					<?='<br/>'?>
				<?php endforeach;?>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br/>
<form action="../menu.php" method="post">
	<input type="submit" value="Menú principal" />
</form>