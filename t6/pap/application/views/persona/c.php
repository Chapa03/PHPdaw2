<div class="container">

	<form action="<?=base_url()?>persona/cPost" method="post">
		<h1>Registrar persona</h1>
		<div class="form-group">
			<label for="id-nombre">Nombre</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre de la persona"> 
			<small id="id-nombre" class="form-text text-muted">Registra personas que no lo estén previamente.</small>
		</div>
		<button type="submit" class="btn btn-primary float-end">
			<i class="bi bi-save"></i> Registrar persona
		</button>
	</form>

</div>