<div class="container pb-3">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light display-6"><i class="bi bi-person text-info"></i> Lista de personas</h1>
		<div class="table-responsive">
        	<table class="table table-striped table-bordered table-sm table-hover align-middle">
        		<thead class="table-dark align-middle">
                	<tr>
                		<th>
                			Acciones
                		</th>
                		<th>
                			Nombre
                		</th>
                		<th>
                			Nacionalidad
                		</th>
                		<th>
                			Residencia
                		</th>
                		<th>
                			Le encanta
                		</th>
                		<th>
                			Odia
                		</th>
                		<th>
                			<button class="btn btn-light text-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>persona/c'">
                				<i class="bi bi-pencil-square"></i> Registrar nueva persona
                			</button>
                		</th>
                	</tr>
            	</thead>
            	
            	<tbody class="text-light">
                	<?php foreach ($personas as $persona):?>
                		<tr>
                		
                			<td>
                				<div class="d-flex justify-content-evenly">
                					<form action="<?=base_url()?>persona/u">
                    					<button class="btn btn-light text-primary" type="submit" name="idPersona" value="<?=$persona -> id?>"><i class="bi bi-pencil text-"></i></button>
                    				</form> 
                    				<form action="<?=base_url()?>persona/d" method="post">
                    					<button class="btn btn-light text-danger" type="submit" name="idPersona" value="<?=$persona -> id?>"><i class="bi bi-trash"></i></button>
                    				</form> 
                				</div>
                			</td>
                			
                			<td><?=$persona -> nombre?></td>
                			<td><?=$persona -> fetchAs('pais') -> paisNacimiento -> nombre?></td>
                			<td><?=$persona -> fetchAs('pais') -> paisResidencia -> nombre?></td>
                			<td>
                				<?php foreach ($persona -> ownGustaList as $gusto):?>
                					<?="· " . $gusto -> aficion -> texto?>
                					<?='<br/>'?>
                				<?php endforeach;?>
                			</td>
                			<td colspan="2">
                				<?php foreach ($persona -> ownOdiaList as $odio):?>
                					<?="· " . $odio -> aficion -> texto?>
                					<?='<br/>'?>
                				<?php endforeach;?>
                			</td>
                		</tr>
                		
                	<?php endforeach;?>
            	</tbody>
            </table>
    	</div>
	</div>
</div>