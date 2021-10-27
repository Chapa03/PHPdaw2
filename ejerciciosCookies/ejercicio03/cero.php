<h3>Listado de cookies por nivel:</h3>

Nivel 0 --> <a href="verCookies.php" >Listado de cookies</a><br/>
Nivel 0 --> Nivel 1 --> <a href="./nivel1/verCookiesUno.php" >Listado de cookies</a><br/>
Nivel 0 --> Nivel 1 --> Nivel 2 --> <a href="./nivel1/nivel2/verCookiesDos.php" >Listado de cookies</a><br/><br/>

<h3>Creación de cookies en diferentes niveles (directorios) por un script ubicado en /</h3>
<h4>Se permite fijar nombre y contenido de la cookie, así como el nivel:</h4>

<form action="crearCookie.php">
	<fieldset>
		<legend>Creación de cookie</legend>
    	<label for="nombre">Nombre:</label>
    	<input type="text" name="nombre" id="nombre" />
    	<label for="contenido">Contenido:</label>
    	<input type="text" name="contenido" id="contenido" /><br/><br/>
    	<label for="nivel">Nivel:</label>
    	<select name="nivel" id="nivel">    
    		<option value="0" selected="selected">0</option>   
    		<option value="1">1</option> 
    		<option value="2">2</option> 
    	</select>
    	<input type="submit" value="Crear cookie" />
	</fieldset>
</form>