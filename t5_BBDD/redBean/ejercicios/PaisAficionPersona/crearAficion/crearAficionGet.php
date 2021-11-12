<form action="crearAficionPost.php" method="post">
	<fieldset>
		<legend>Nueva afición</legend>
    	<label for="aficion">Nombre afición</label>
    	<input type="text" id="aficion" name="aficion" required="required"/>
    	<input type="submit" value="Crear aficion" />
    	<br/>
	</fieldset>
</form>
<form action="../leerAficion/leerAficion.php">
	<input type="submit" value="Lista de Aficiones" />
</form>