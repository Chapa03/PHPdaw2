
<div class="container bg-secondary rounded text-light">

	<form action="<?=base_url()?>pais/uPost" method="post">
		<h1 class="p-3 text-info">Editar país: <?=$pais -> nombre?></h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Cambiar el nombre del país</label> 
			<input type="text" name="nombrePais" class="form-control" id="id-nombre" placeholder="Escribe aquí el nuevo nombre" value="<?=$pais -> nombre?>"> 
			<small id="id-nombre" class="form-text text-muted">Procura que no esté repetido y sea distinto de "<?=$pais -> nombre?>"</small>
			
			<input type="hidden" name="idPais" value="<?=$pais -> id?>" />
		</div>
		<button type="submit" class="btn btn-light m-3 text-info">
			<i class="bi bi-save"></i> Guardar nuevo nombre
		</button>
		<button type="button" class="btn btn-light m-3 text-danger" onclick="location.href='<?=base_url()?>pais/r'">
			<i class="bi bi-save"></i> Cancelar
		</button>
	</form>

</div> 
