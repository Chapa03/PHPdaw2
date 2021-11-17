<h1>Lista de personas</h1>

<table>

    <tr>
    	<th>ID</th>
    	<th>NOMBRE</th>
    </tr>
    
    <?php foreach ($resultado as $fila):?>
    	<tr>
    		<td> <?=$fila['id']?> </td>
    		<td> <?=$fila['nombre_persona']?> </td>
    	</tr>
    	
    <?php endforeach;?>

</table>