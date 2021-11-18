<!-- Desplegar una página con una lista de links -->
<h1>Lista de links</h1>

<ul>
	<?php foreach ($links as $nombre => $enlace):?>
	
		<li>
			<a href="<?=$enlace?>"><?=$nombre?></a>
		</li>
	
	<?php endforeach;?>	
</ul>

<form action="<?= base_url()?>">
	<input type="submit" value="Volver al directorio de ejercicios" />
</form>