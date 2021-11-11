<?php 
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
$aficiones = R::findAll('aficion');
desconectar();
?>

<form action="crearPersonaPost.php" method="post">
	<fieldset>
		<legend>Nueva persona</legend>
    	<label for="persona">Nombre persona</label>
    	<input type="text" id="persona" name="nombrePersona" required="required"/>
    	<br/>
    	<label for="paises">País de nacimiento: </label>
    	<select name="idPais" id="paises" required="required">
    		<option selected>Elige un país</option>
    		<?php foreach ($paises as $pais):?>
    			<option value="<?=$pais -> id?>">
    				<?=$pais -> nombrePais?>
    				
    			</option>
    		
    		<?php endforeach;?>
    	</select>
    	<br/>
    	<br/>
    	<fieldset>
    		<legend>Elegir aficiones:</legend>
        	<?php foreach ($aficiones as $aficion):?>
        		<input type="checkbox" name="aficion[]" value="<?=$aficion -> id ?>" id="id-<?=$aficion -> id ?>"/>
        		<label for="id-<?=$aficion -> id ?>"><?=$aficion -> nombreAficion ?></label>
        		
        		<?php if((($aficion -> id) % 4) == 0){echo '<br/>';}?>
        	<?php endforeach;?>
    	</fieldset>
    	<br/>
    	<input type="submit" value="Crear persona" />
    	<br/>
	</fieldset>
</form>
<a href="../leerPersona/leerPersona.php">Lista de Personas</a>