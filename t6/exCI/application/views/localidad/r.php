<div class="container pb-3">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light display-6"><i class="bi bi-signpost-split text-info"></i> Lista de localidades</h1>
		<div class="table-responsive">
    	<table class="table table-striped table-bordered table-sm table-hover align-middle">
    		<thead class="table-dark align-middle">
            	<tr>
            		<th>
            			Nombre
            		</th>
            		<th>
            			Provincia
            		</th>
            		<th>
            			<button class="btn btn-light text-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>localidad/c'">
            				<i class="bi bi-pencil-square"></i> Crear nueva localidad
            			</button>
            		</th>
            	</tr>
        	</thead>
        	
        	<tbody class="text-light">
            	<?php foreach ($localidades as $localidad):?>
            		
            		<tr>
            			<td>
            				<?=$localidad -> nombre?>
            			</td>
            			<td colspan="2">
            				<?=$localidad -> provincia?>
            			</td>
            		</tr>
            	<?php endforeach;?>
        	</tbody>
        </table>
    	</div>
	</div>
</div>












