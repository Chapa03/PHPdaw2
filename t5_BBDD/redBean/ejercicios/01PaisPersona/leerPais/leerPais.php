<?php
require_once '../bd/bdh.php';
conectar();
?>
<h1>Lista de paises:</h1>
<table>
	<tr>
		<th>Nombre País</th>
	</tr>
	<?php foreach ($paises as $pais):?>
		<tr>
			<td><?=$pais -> nombre?></td>
		</tr>
	<?php endforeach;?>
</table>

<form action="../formulario.php" method="post">
	<input type="submit" value="Nuevo país" />
</form>