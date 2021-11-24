<div class="container">

	<form action="<?=base_url()?>persona/cPost" method="post">
		<h1>Registrar persona</h1>
		<div class="form-group">
			<label for="id-nombre">Nombre</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre de la persona"> 
			<small id="id-nombre" class="form-text text-muted">Registra personas que no lo estén previamente.</small>
		</div>
		
		<div class="form-group mt-2">
			<label for="id-pais">País de nacimiento</label> 
    		<select class="form-control" id="id-pais" name="idPais">
            	<option>Elige un país</option>
            	
            	<?php foreach($paises as $pais):?>
    				<option value="<?=$pais -> id?>">
    					<?=$pais -> nombre?>
    					
    				</option>
    				
    			<?php endforeach;?>
            </select>
            <small id="id-pais" class="form-text text-muted">Selecciona un país de la lista.</small>
        </div>
		<button type="submit" class="btn btn-primary float-end">
			<i class="bi bi-save"></i> Registrar persona
		</button>
	</form>

</div>