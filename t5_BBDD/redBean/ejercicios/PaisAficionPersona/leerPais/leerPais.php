<?php
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
desconectar();
?>
<h1>Lista de paises:</h1>
<table border="1">
	<tr>
		<th rowspan="2">Nombre País</th>
		<th colspan="2">Personas</th>
	</tr>
	<tr>
		<th>Nacimiento</th>
		<th>Residencia</th>
	</tr>
	<?php foreach ($paises as $pais):?>
		<tr>
			<td>
				<?=$pais -> nombrePais?>
			</td>
			<td>
				<?php foreach ($pais -> alias('nacimiento') -> ownPersonaList as $persona):?>
					<?=$persona -> nombrePersona ?>
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach ($pais -> alias('residencia') -> ownPersonaList as $persona):?>
					<?=$persona -> nombrePersona ?>
				<?php endforeach;?>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br/>
<form action="../menu.php" method="post">
	<input type="submit" value="Menú principal" />
</form>