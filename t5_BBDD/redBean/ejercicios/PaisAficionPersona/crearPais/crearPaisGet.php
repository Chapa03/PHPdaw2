<form action="crearPaisPost.php" method="post">
	<fieldset>
		<legend>Nuevo país</legend>
    	<label for="pais">Nombre país</label>
    	<input type="text" id="pais" name="pais" required="required"/>
    	<input type="submit" value="Crear país" />
    	<br/>
	</fieldset>
</form>
<form action="../leerPais/leerPais.php">
	<input type="submit" value="Lista de Países" />
</form>