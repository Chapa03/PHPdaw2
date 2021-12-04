<div class="container bg-secondary rounded text-light mb-3">

	<form action="<?=base_url()?>persona/cPost" method="post">
		<h1 class="p-3 text-info">Registrar persona</h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Nombre</label> 
			<input type="text" name="nombre" class="form-control" id="id-nombre" placeholder="Escribe el nombre de la persona"> 
			<small id="id-nombre" class="form-text text-muted">Introduce el nombre de una persona nueva.</small>
		</div>
		
		<div class="form-group p-2 px-3 formulario">
			<label for="id-pais">País de nacimiento</label> 
    		<select class="form-control" id="id-pais" name="idPais">
            	<option>Elige un país</option>
            	
            	<?php foreach($paises as $pais):?>
    				<option value="<?=$pais -> id?>">
    					<?=$pais -> nombre?>
    					
    				</option>
    				
    			<?php endforeach;?>
            </select>
            <small id="id-pais" class="form-text text-muted">Elige un país de la lista.</small>
        </div>
        
        <div class="form-group p-2 px-3 formulario">
        	<div class="row justify-content-between">
        		<div class="xs-col-12 sm-col-2 md-col-2 inline">
        			<label id="aficion">Aficiones: </label> 
        		</div>
        		<div class="xs-col-12 sm-col-4 md-col-3">
        			<small id="aficion" class="form-text text-muted float-right">Marca todas las opciones que necesites de las dos listas.</small>
        		</div>
        	</div>
			
            <div class="row pt-3">
            	<div class="container form-check">
            		<div class="row justify-content-evenly">
                		<div class="col-auto pb-3">
                			<h6 class="text-decoration-underline">Me gusta:</h6>
                        	<?php foreach($aficiones as $aficion):?>
                        		
                           		<input type="checkbox" class="form-check-input" id="id-gusto-<?=$aficion -> id?>" name="idAficionesGustos[]" value="<?=$aficion -> id?>"/>
                           		<label class="form-check-label" for="id-gusto-<?=$aficion -> id?>"><?=$aficion -> texto?></label>
                           		<?='<br/>'?>
                           		
                           	<?php endforeach;?>
                    	</div>
                    	<div class="col-auto">
                    		<h6 class="text-decoration-underline">Lo odio:</h6>
                           	<?php foreach($aficiones as $aficion):?>
                        		
                           		<input type="checkbox" class="form-check-input" id="id-odio-<?=$aficion -> id?>" name="idAficionesOdios[]" value="<?=$aficion -> id?>"/>
                           		<label class="form-check-label" for="id-odio-<?=$aficion -> id?>"><?=$aficion -> texto?></label>
                           		<?='<br/>'?>
                           		
                           	<?php endforeach;?>
                		</div>
                	</div>
        		</div>
            </div>
        </div>
        
		<button type="submit" class="btn btn-light text-info m-3">
			<i class="bi bi-save"></i> Guardar
		</button>
		<button type="reset" class="btn btn-light text-danger m-3">
			<i class="bi bi-eraser"></i> Vaciar campos
		</button>
	</form>

</div>























