<div class="container pb-3">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light display-6"><i class="bi bi-heart text-info"></i> Lista de aficiones</h1>
		<div class="table-responsive">
    	<table class="table table-striped table-bordered table-sm table-hover align-middle">
    		<thead class="table-dark align-middle">
            	<tr>
            		<th>
            			Descripción de la afición
            		</th>
            		<th>
            			Seguidores
            		</th>
            		<th>
            			Detractores
            		</th>
            		<th>
            			<button class="btn btn-light text-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>aficion/c'">
            				<i class="bi bi-pencil-square"></i> Crear nueva afición
            			</button>
            		</th>
            	</tr>
        	</thead>
        	
        	<tbody class="text-light">
            	<?php foreach ($aficiones as $aficion):?>
            		
            		<tr>
            			<td>
            				<?=$aficion -> texto?>
            			</td>
            			<td>
            				<?php foreach ($aficion -> ownGustaList as $gusta):?>
            					<?=$gusta -> persona -> nombre?>
            					<?='<br/>'?>
            				<?php endforeach;?>
            			</td>
            			<td colspan="2">
            				<?php foreach($aficion -> ownOdiaList as $odia):?>
            					<?=$odia -> persona -> nombre ?>
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