<div class="container bg-secondary rounded text-light">

	<form action="<?=base_url()?>pais/cPost" method="post">
		<h1 class="p-3 text-info">Nuevo país</h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Nombre del país</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre del país"> 
			<small id="id-nombre" class="form-text text-muted">Procura que no esté repetido.</small>
		</div>
		<button type="submit" class="btn btn-light m-3 text-info">
			<i class="bi bi-save"></i> Crear país
		</button>
		<button type="button" class="btn btn-light m-3 text-danger" onclick="location.href='<?=base_url()?>pais/r'">
			<i class="bi bi-save"></i> Cancelar
		</button>
	</form>

</div>