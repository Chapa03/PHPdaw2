<!-- Hacer un “Hola <usuario>”, donde <usuario> es 
un dato que le viene (vía GET) al controlador a 
través del parámetro “nombre” -->
<h1>¡Hola <?=$nombre?>!</h1>

<form action="<?= base_url()?>">
	<input type="submit" value="Volver al directorio de ejercicios" />
</form>