<?php
// Mejorar el programa anterior para que muestre, además, 
// un formulario que permita introducir una palabra. Al enviarse, 
// se mostrará el texto contenido en el fichero “articulo.txt”, y 
// además, dicho texto pero con la palabra enviada, resaltada con 
// negrita y subrayada.
?>

<form action="articulo.php" method="GET">
	<label for="word">Introduce una palabra: </label>
	<input type="text" id="word" name="palabra" />
	<input type="submit" Value="Enviar" />
</form>