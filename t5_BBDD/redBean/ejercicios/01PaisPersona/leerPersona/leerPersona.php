<?php
require_once '../bd/bdh.php';
conectar();
$personas = R::findAll('persona');
desconectar();
?>
<h1>Lista de personas</h1>
<table>
	<tr>
		<th>Nombre Persona</th>
		<th>País de nacimiento</th>
	</tr>
	<?php foreach ($personas as $persona):?>
		<tr>
			<td><?=$persona -> nombrePersona?></td><td><?=$persona -> paisNacimiento?></td>
		</tr>
	<?php endforeach;?>
</table>

<form action="../menu.php">
	<input type="submit" value="Menú principal" />
</form>