<?php 
session_start();
?>
<form action="insertar.php" method="post">
	Nombre
	<input type="text" name="nombre" />
	<br/>
	
	Precio
	<input type="text" name="precio" />
	<br/>
	
	<input type="submit" value="Insertar" name="accion" />
	<input type="submit" value="Preparar" name="accion" />
</form>



<h3>Productos ya insertados</h3>

<?php 
    require_once '../../utilBD.php';
    $bd = conectarMySQL();
    $sql = <<<SQL
    select nombre, precio
    from producto
    SQL;
    $filas = $bd -> query($sql);
?>

<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Precio</th>
	</tr>
	<?php foreach ($filas as $fila):?>
		<tr>
			<td><?=$fila['nombre'] ?></td>
			<td><?=$fila['precio'] ?></td>
		</tr>
	<?php endforeach;?>
</table>