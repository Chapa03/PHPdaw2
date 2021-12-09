
<div class="container bg-secondary rounded text-light">

	<form action="<?=base_url()?>aficion/uPost" method="post">
		<h1 class="p-3 text-info">Editar afición: <?=$aficion -> texto?></h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-texto">Cambiar la descripción de la afición</label> 
			<input type="text" name="textoAficion" class="form-control" id="id-texto" placeholder="Escribe aquí la nueva descripción" value="<?=$aficion -> text?>"> 
			<small id="id-texto" class="form-text text-muted">Procura que no esté repetida y sea distinta de "<?=$aficion -> texto?>"</small>
			
			<input type="hidden" name="idAficion" value="<?=$aficion -> id?>" />
		</div>
		<button type="submit" class="btn btn-light m-3 text-info">
			<i class="bi bi-save"></i> Guardar nueva descripción
		</button>
		<button type="button" class="btn btn-light m-3 text-danger" onclick="location.href='<?=base_url()?>aficion/r'">
			<i class="bi bi-save"></i> Cancelar
		</button>
	</form>

</div> 
