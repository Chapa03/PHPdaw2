<div class="container">
	<h1>Lista de países</h1>
	
	<div class="table-responsive">
    	<table class="table table-striped table-bordered align-middle">
    		<thead class="table-dark align-middle">
            	<tr>
            		<th>
            			Nombre del país
            		</th>
            		<th>
            			<button class="btn btn-info btn-sm float-end" type="button" onclick="location.href='<?=base_url()?>pais/c'">
            				<i class="bi bi-pencil-square"></i> Crear nuevo país
            			</button>
            		</th>
            	</tr>
        	</thead>
        	
        	<tbody>
            	<?php foreach ($paises as $pais):?>
            		
            		<tr>
            			<td colspan="2"><?=$pais -> nombre?></td>
            		</tr>
            	<?php endforeach;?>
        	</tbody>
        </table>
    </div>
</div>