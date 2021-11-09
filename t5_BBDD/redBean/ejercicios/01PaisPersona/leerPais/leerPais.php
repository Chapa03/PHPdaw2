<?php
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
desconectar();
?>
<h1>Lista de paises:</h1>
<table>
	<tr>
		<th>Nombre País</th>
	</tr>
	<?php foreach ($paises as $pais):?>
		<tr>
			<td><?=$pais -> nombrePais?></td>
		</tr>
	<?php endforeach;?>
</table>

<form action="../menu.php" method="post">
	<input type="submit" value="Menú principal" />
</form>