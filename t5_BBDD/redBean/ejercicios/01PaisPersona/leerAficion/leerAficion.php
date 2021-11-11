<?php
require_once '../bd/bdh.php';
conectar();
$aficiones = R::findAll('aficion');
desconectar();
?>
<h1>Lista de aficiones:</h1>
<table>
	<tr>
		<th>Nombre Afición</th>
		<th>Aficionados</th>
	</tr>
	<?php foreach ($aficiones as $aficion):?>
		<tr>
			<td>
				<?=$aficion -> nombreAficion?>
			</td>
			<td>
				<?php foreach ($aficion -> sharedPersonaList as $persona):?>
					<?=$persona -> nombrePersona?>
				
				<?php endforeach;?>
			</td>
		</tr>
	<?php endforeach;?>
</table>

<form action="../menu.php" method="post">
	<input type="submit" value="Menú principal" />
</form>