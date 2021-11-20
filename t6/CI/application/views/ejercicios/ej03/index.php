<!-- Desplegar una página con una lista de links -->
<?=titulo('Lista de links')?>

<ul>
	<?php foreach ($links as $link):?>
	
		<li>
			<?=anchor($link -> uri, $link -> label)?>
		</li>
	
	<?php endforeach;?>	
</ul>

<form action="<?= base_url()?>">
	<input type="submit" value="Volver al directorio de ejercicios" />
</form>