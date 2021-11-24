<div class="container">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light"><i class="bi bi-person text-info"></i> Lista de personas</h1>
		<div class="table-responsive">
    	<table class="table table-striped table-bordered table-sm table-hover align-middle">
    		<thead class="table-dark align-middle">
            	<tr>
            		<th>
            			Nombre de la persona
            		</th>
            		<th>
            			<button class="btn btn-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>persona/c'">
            				<i class="bi bi-pencil-square"></i> Registrar nueva persona
            			</button>
            		</th>
            	</tr>
        	</thead>
        	
        	<tbody class="text-light">
            	<?php foreach ($personas as $persona):?>
            		
            		<tr>
            			<td colspan="2"><?=$persona -> nombre?></td>
            		</tr>
            	<?php endforeach;?>
        	</tbody>
        </table>
    </div>
	</div>
</div>