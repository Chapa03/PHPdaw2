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
    	<br/>
    	<label for="paisesN">País de nacimiento: </label>
    	<select name="idPaisN" id="paisesN" required="required">
    		<option selected>Elige un país</option>
    		<?php foreach ($paises as $pais):?>
    			<option value="<?=$pais -> id?>">
    				<?=$pais -> nombrePais?>
    				
    			</option>
    		
    		<?php endforeach;?>
    	</select>
    	<br/>
    	<br/>
    	<label for="paisesR">País de residencia: </label>
    	<select name="idPaisR" id="paisesR" required="required">
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
    		<legend>Me gusta:</legend>
        	<?php foreach ($aficiones as $aficion):?>
        		<input type="checkbox" name="gusto[]" value="<?=$aficion -> id ?>" id="idL-<?=$aficion -> id ?>"/>
        		<label for="idL-<?=$aficion -> id ?>"><?=$aficion -> nombreAficion ?></label>
        		
        		<?php if((($aficion -> id) % 4) == 0){echo '<br/>';}?>
        	<?php endforeach;?>
    	</fieldset>
    	<br/>
    	<fieldset>
    		<legend>Odio:</legend>
        	<?php foreach ($aficiones as $aficion):?>
        		<input type="checkbox" name="odio[]" value="<?=$aficion -> id ?>" id="idD-<?=$aficion -> id ?>"/>
        		<label for="idD-<?=$aficion -> id ?>"><?=$aficion -> nombreAficion ?></label>
        		
        		<?php if((($aficion -> id) % 4) == 0){echo '<br/>';}?>
        	<?php endforeach;?>
    	</fieldset>
    	<br/>
    	<input type="submit" value="Crear persona" />
    	<br/>
	</fieldset>
</form>
<form action="../leerPersona/leerPersona.php">
	<input type="submit" value="Lista de Personas" />
</form>


