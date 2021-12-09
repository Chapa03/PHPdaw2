<div class="container pb-3">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light display-6"><i class="bi bi-signpost-split text-info"></i> Lista de países</h1>
		<div class="table-responsive">
    	<table class="table table-striped table-bordered table-sm table-hover align-middle">
    		<thead class="table-dark align-middle">
            	<tr>
            		<th>
            			Acciones
            		</th>
            		<th>
            			Nombre del país
            		</th>
            		<th>
            			Nacidos
            		</th>
            		<th>
            			Residentes
            		</th>
            		<th>
            			<button class="btn btn-light text-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>pais/c'">
            				<i class="bi bi-pencil-square"></i> Crear nuevo país
            			</button>
            		</th>
            	</tr>
        	</thead>
        	
        	<tbody class="text-light">
            	<?php foreach ($paises as $pais):?>
            		
            		<tr>
            			<td>
            				<div class="d-flex justify-content-evenly">
            					<form action="<?=base_url()?>pais/u">
                					<button class="btn btn-light text-primary" type="submit" name="idPais" value="<?=$pais -> id?>"><i class="bi bi-pencil text-"></i></button>
                				</form> 
                				<form action="<?=base_url()?>pais/d" method="post">
                					<button class="btn btn-light text-danger" type="submit" name="idPais" value="<?=$pais -> id?>"><i class="bi bi-trash"></i></button>
                				</form> 
            				</div>
            			</td>
            			<td>
            				<?=$pais -> nombre?>
            			</td>
            			<td>
            				<?php foreach ($pais -> alias('paisNacimiento') -> ownPersonaList as $persona):?>
            					<?="· " . $persona -> nombre?>
            					<?='<br/>'?>
            				<?php endforeach;?>
            			</td>
            			<td colspan="2">
            				<?php foreach ($pais -> alias('paisResidencia') -> ownPersonaList as $persona):?>
            					<?="· " . $persona -> nombre?>
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


