<div class="container">

	<form action="<?=base_url()?>aficion/cPost" method="post">
		<h1>Nueva afición</h1>
		<div class="form-group">
			<label for="id-nombre">Afición</label> 
			<input type="text" name="texto" class="form-control" id="id-nombre" placeholder="Introduce la nueva afición"> 
			<small id="id-nombre" class="form-text text-muted">Intenta que sea una afición no registrada previamente.</small>
		</div>
		<button type="submit" class="btn btn-primary float-end">
			<i class="bi bi-save"></i> Crear afición
		</button>
	</form>

</div>