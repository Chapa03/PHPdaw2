<?php 
session_start();
session_unset();
?>

<form action="dos.php">
	<label for="numSumandos">Número de sumandos (2..15)</label>
	<input type="number" id="numSumandos" name="numSumandos" min="2" max="15" /><br/>
	<input type="submit" value="Enviar" />
</form>