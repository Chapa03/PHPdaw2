<?php
require_once '../bd/bdh.php';
conectar();
$personas = R::findAll('persona');
desconectar();
?>
<h1>Lista de personas</h1>
<table border="1">
	<tr>
		<th rowspan="2">Nombre Persona</th>
		<th rowspan="2">País de nacimiento</th>
		<th rowspan="2">País de residencia</th>
		<th colspan="2">Gustos</th>
	</tr>
	<tr>
		<th>Le gusta</th>
		<th>Odia</th>
	</tr>
	<?php foreach ($personas as $persona):?>
		<tr>
			<td>
				<?=$persona -> nombrePersona?>
			</td>
			
			<td>
				<?=$persona -> fetchAs('pais') -> nacimiento -> nombrePais?>
			</td>
			
			<td>
				<?=$persona -> fetchAs('pais') -> residencia -> nombrePais?>
			</td>
			
			<td>
				<?php foreach ($persona -> ownGustaList as $gusto):?>
					<?=$gusto -> aficion -> nombreAficion?>
					<?='<br/>'?>
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach ($persona -> ownOdiaList as $odio):?>
					<?=$odio -> aficion -> nombreAficion?>
					<?='<br/>'?>
				<?php endforeach;?>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br/>
<form action="../menu.php">
	<input type="submit" value="Menú principal" />
</form>