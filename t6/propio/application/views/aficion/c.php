<div class="container bg-secondary rounded text-light">

	<form action="<?=base_url()?>aficion/cPost" method="post">
		<h1 class="p-3 text-info">Nueva afición</h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Afición</label> 
			<input type="text" name="texto" class="form-control" id="id-nombre" placeholder="Introduce la nueva afición"> 
			<small id="id-nombre" class="form-text text-muted">Intenta que sea una afición no registrada previamente.</small>
		</div>
		<button type="submit" class="btn btn-light m-3 text-info">
			<i class="bi bi-save"></i> Crear afición
		</button>
	</form>

</div>