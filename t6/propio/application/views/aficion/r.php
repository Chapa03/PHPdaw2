<div class="container">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light"><i class="bi bi-heart text-info"></i> Lista de aficiones</h1>
		<div class="table-responsive">
    	<table class="table table-striped table-bordered table-sm table-hover align-middle">
    		<thead class="table-dark align-middle">
            	<tr>
            		<th>
            			Descripción de la afición
            		</th>
            		<th>
            			<button class="btn btn-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>aficion/c'">
            				<i class="bi bi-pencil-square"></i> Crear nueva afición
            			</button>
            		</th>
            	</tr>
        	</thead>
        	
        	<tbody class="text-light">
            	<?php foreach ($aficiones as $aficion):?>
            		
            		<tr>
            			<td colspan="2"><?=$aficion -> texto?></td>
            		</tr>
            	<?php endforeach;?>
        	</tbody>
        </table>
    </div>
	</div>
</div>