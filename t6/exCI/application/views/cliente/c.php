<div class="container bg-secondary rounded text-light mb-3">

	<form action="<?=base_url()?>cliente/cPost" method="post">
		<h1 class="p-3 text-info">Registrar cliente</h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Nombre</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre de la persona"> 
			<small id="id-nombre" class="form-text text-muted">Introduce el nombre del nuevo cliente.</small>
		</div>
		
		<div class="form-group p-2 px-3 formulario">
			<label for="id-localidad">Localidad del cliente</label> 
    		<select class="form-control" id="id-localidad" name="idLocalidad">
            	<option>Elige una localidad</option>
            	
            	<?php foreach($localidades as $localidad):?>
    				<option value="<?=$localidad -> id?>">
    					<?=$localidad -> nombre?> (<?=$localidad -> provincia?>)
    					
    				</option>
    				
    			<?php endforeach;?>
            </select>
            <small id="id-pais" class="form-text text-muted">Elige una localidad de la lista.</small>
        </div>
        
		<button type="submit" class="btn btn-light text-info m-3">
			<i class="bi bi-save"></i> Guardar cliente
		</button>
		<button type="reset" class="btn btn-light text-danger m-3">
			<i class="bi bi-eraser"></i> Vaciar campos
		</button>
	</form>

</div>























