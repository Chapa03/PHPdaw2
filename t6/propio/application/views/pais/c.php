<div class="container">

	<form action="<?=base_url()?>pais/cPost" method="post">
		<h1>Nuevo país</h1>
		<div class="form-group">
			<label for="id-nombre">Nombre del país</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre del país"> 
			<small id="id-nombre" class="form-text text-muted">Procura que no esté repetido.</small>
		</div>
		<button type="submit" class="btn btn-primary float-end">
			<i class="bi bi-save"></i> Crear país
		</button>
	</form>

</div>