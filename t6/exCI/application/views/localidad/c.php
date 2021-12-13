<div class="container bg-secondary rounded text-light">

	<form action="<?=base_url()?>localidad/cPost" method="post">
		<h1 class="p-3 text-info">Nueva localidad</h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Nombre de la localidad</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre de la localidad"> 
			<small id="id-nombre" class="form-text text-muted">Procura que no esté repetida.</small>
		</div>
		
		<div class="form-group p-2 px-3 formulario">
			<label for="id-provincia">Provincia</label> 
    		<select class="form-control" id="provincia" name="provincia">
            	<option>Madrid</option>
            	<option>Segovia</option>
            	<option>Zaragoza</option>
            	<option>Badajoz</option>
            </select>
            <small id="id-pais" class="form-text text-muted">Elige una localidad</small>
        </div>

		<button type="submit" class="btn btn-light m-3 text-info">
			<i class="bi bi-save"></i> Crear localidad
		</button>
		<button type="button" class="btn btn-light m-3 text-danger" onclick="location.href='<?=base_url()?>localidad/r'">
			<i class="bi bi-save"></i> Cancelar
		</button>
	</form>

</div>