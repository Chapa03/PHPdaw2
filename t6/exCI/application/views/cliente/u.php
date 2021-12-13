
<div class="container bg-secondary rounded text-light mb-3">

	<form action="<?=base_url()?>persona/uPost" method="post">
		<h1 class="p-3 text-info">Editar persona: <?=$persona -> nombre?></h1>
		<div class="form-group p-2 px-3 formulario">
			<label for="id-nombre">Cambiar el nombre de la persona:</label> 
			<input type="text" name="nombrePersona" class="form-control" id="id-nombre" placeholder="Escribe aquí el nuevo nombre" value="<?=$persona -> nombre?>"> 
			<small id="id-nombre" class="form-text text-muted">Procura que no esté repetido y sea distinto de "<?=$persona -> nombre?>"</small>	
		</div>
		
		<div class="form-group p-2 px-3 formulario">
			<label for="id-pais-nacimiento">Nuevo país de nacimiento</label> 
    		<select class="form-control" id="id-pais-nacimiento" name="idPaisNacimiento">
            	<option>Elige un país</option>
            	
            	<?php foreach($paises as $pais):?>
    				<option value="<?=$pais -> id?>"
    				<?php if (($persona -> fetchAs('pais') -> paisNacimiento -> id) == ($pais -> id)):?>
    					<?=" selected"?>
    				<?php endif;?>>
    					<?=$pais -> nombre?>
    					
    				</option>
    				
    			<?php endforeach;?>
            </select>
            <small id="id-pais" class="form-text text-muted">Elige un país de la lista.</small>
        </div>
            
        <div class="form-group p-2 px-3 formulario">
			<label for="id-pais-residencia">Nuevo país de residencia</label> 
    		<select class="form-control" id="id-pais-residencia" name="idPaisResidencia">
            	<option>Elige un país</option>
            	
            	<?php foreach($paises as $pais):?>
    				<option value="<?=$pais -> id?>"
    				<?php if (($persona -> fetchAs('pais') -> paisResidencia -> id) == ($pais -> id)):?>
    					<?=" selected"?>
    				<?php endif;?>>
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
                			<h6 class="text-decoration-underline">Le gusta:</h6>
                			<?php $idAficionesGustos = []; foreach ($persona -> ownGustaList as $gusto) {$idAficionesGustos[] = $gusto -> aficion_id;}?>
                        	<?php foreach($aficiones as $aficion):?>
                        		
                           		<input type="checkbox" class="form-check-input" id="id-gusto-<?=$aficion -> id?>" name="idAficionesGustos[]" value="<?=$aficion -> id?>"
                           		<?=in_array($aficion -> id, $idAficionesGustos) ? 'checked="checked"' : '' ?>
                           		/>
                           		<label class="form-check-label" for="id-gusto-<?=$aficion -> id?>"><?=$aficion -> texto?></label>
                           		<?='<br/>'?>
                           		
                           	<?php endforeach;?>
                    	</div>
                    	<div class="col-auto">
                    		<h6 class="text-decoration-underline">Lo odia:</h6>
                    		<?php $idAficionesOdios = []; foreach ($persona -> ownOdiaList as $odio) {$idAficionesOdios[] = $odio -> aficion_id;}?>
                           	<?php foreach($aficiones as $aficion):?>
                        		
                           		<input type="checkbox" class="form-check-input" id="id-odio-<?=$aficion -> id?>" name="idAficionesOdios[]" value="<?=$aficion -> id?>"
                           		<?=in_array($aficion -> id, $idAficionesOdios) ? 'checked="checked"' : '' ?>
                           		/>
                           		<label class="form-check-label" for="id-odio-<?=$aficion -> id?>"><?=$aficion -> texto?></label>
                           		<?='<br/>'?>
                           		
                           	<?php endforeach;?>
                		</div>
                	</div>
        		</div>
            </div>
        </div>
			
		<input type="hidden" name="idPersona" value="<?=$persona -> id?>" />
		
		<button type="submit" class="btn btn-light m-3 text-info">
			<i class="bi bi-save"></i> Guardar cambios
		</button>
		<button type="button" class="btn btn-light m-3 text-danger" onclick="location.href='<?=base_url()?>persona/r'">
			<i class="bi bi-save"></i> Cancelar
		</button>
	</form>

</div> 
