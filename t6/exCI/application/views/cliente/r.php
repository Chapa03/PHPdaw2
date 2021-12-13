<div class="container pb-3">
	<div class="row bg-secondary rounded p-3 pt-4">
		<h1 class="p-3 text-light display-6"><i class="bi bi-person text-info"></i> Lista de personas</h1>
		<div class="table-responsive">
        	<table class="table table-striped table-bordered table-sm table-hover align-middle">
        		<thead class="table-dark align-middle">
                	<tr>
                		<th>
                			Nombre
                		</th>
                		<th>
                			¿Madrileño?
                		</th>
                		<th>
                			<button class="btn btn-light text-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>cliente/c'">
                				<i class="bi bi-pencil-square"></i> Registrar nuevo cliente
                			</button>
                		</th>
                	</tr>
            	</thead>
            	
            	<tbody class="text-light">
                	<?php foreach ($clientes as $cliente):?>
                		<tr>
                			
                			<td><?=$cliente -> nombre?></td>
                			<td colspan="2"><?=($cliente -> localidad -> provincia) == 'Madrid' ? 'Si' : 'No'?> </td>
                		</tr>
                		
                	<?php endforeach;?>
            	</tbody>
            </table>
    	</div>
	</div>
</div>