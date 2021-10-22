<!-- Corregir los siguientes códigos “formulario.html” y “mostrar.php” 
    para que el segundo muestre los datos enviados por el primero. 
    Se deben enviar los siguientes datos (vía GET)
    
        - Nombre ➔ texto
        - Contraseña ➔ asteriscos en formulario. El valor en claro.
        - Oculto ➔ el texto “invisible”
        - Radios ➔ un solo color (excluyente): rojo, naranja o verde
        - Checkbox múltiple ➔ Se pueden enviar varios idiomas
        - Select simple ➔ Que aparezca preseleccionado el año 2011
        - Select de ciudades ➔ Que sea múltiple y se visualicen dos opciones
        - Textarea ➔ Que aparezca por defecto el texto “Escriba aquí sus comentarios”
        			 Que tenga un tamaño de 5 filas x 50 columnas
        - Fichero ➔ Que se pueda enviar un archivo (se envía el nombre)
        - Botón reset ➔ Se borran todos los campos del formulario
        Imagen flecha verde ➔ Se envían las coordenadas x, y donde se ha hecho clic -->

<html>
	<head>
	   <title>Formulario completo</title>
	</head> 
	<body> 
    	<h1>Formulario con múltiples campos</h1> 
    	
    	<form name="f1" method="get" action="mostrar.php"> 
    	
    		<b>CAMPOS DE TEXTO:</b> <br /> 
    		Nombre: <input type="text" name="txtNombre" value="Pepe" /> <br /> 
    		Contraseña: <input type="password" name="pswClave" /> <br /> 
    		Oculto <input type="hidden" name="hdnOculto" value="invisible" /> <br /> 
    		<hr /> 
    		
    		<!-- Todos los radiobutton, checkbox o input texts deben ir acompañados de su label for -->
    		<b>RADIO:</b> <br /> 
    		&nbsp;&nbsp; Rojo <input type="radio" value="Rojo" name="rdColor" /> <br /> 
    		&nbsp;&nbsp; Naranja <input type="radio" value="Naranja" name="rdColor" checked="true" /> <br /> 
    		&nbsp;&nbsp; Verde <input type="radio" value="Verde" name="rdColor" /> <br /> <hr /> 
    		
    		<b>CHECKBOX:</b> <br /> 
    		&nbsp;&nbsp; Quiero recibir publicidad <input type="checkbox" value="Publicidad"/> <br /> 
    		
    		MULTI CHECKBOX: <br /> <!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array --> 
    		&nbsp;&nbsp; <label>Inglés</label> <input type="checkbox" name="cbIdioma[]" value="English" />  
    		&nbsp;&nbsp; Francés <input type="checkbox" name="cbIdioma[]" checked="checked" value="Français" /> 
    		&nbsp;&nbsp; Alemán <input type="checkbox" name="cbIdioma[]" value="Deutch" /> 
    		<hr /> 
    		
    		<b>SELECT: </b> <br /> 
    		<b>Simple:</b> 
    		<br /> Año de finalización de estudios: 
    		<select name="selAnioFinEstudios">   
    			<option value="2010">2010</option>     
    			<option value="2011" selected="selected">2011</option>   
    			<option value="2012">2012</option> 
    		</select> <br /> 
    		
    		<b>Múltiple:</b> <br /> 
    		Ciudades: <!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array --> 
    		<select name="selCodigosPostales[]" multiple="multiple">   
    			<option value="17">Gerona</option>     
    			<option value="28" selected="selected">Madrid</option>   
    			<option value="50" selected="selected">Zaragoza</option> 
    		</select> <br /> <hr /> 
    		
    		<b>TEXTAREA:</b> <br />   
    		Comentarios <textarea name="txaComentarios" cols="50" rows="5" placeholder="Escriba aquí sus comentarios"></textarea> 
    		<hr /> 
    		
    		<b>ARCHIVO:</b> <br />   
    		<input type="file" name="flArchivo" /> 
    		<hr />
    		
    		<b>BOTONES:</b> <br />   
    		<input type="button" value="Mostrar un mensaje" onclick="alert('Un botón genérico');" />  
    		<input type="submit" name="botonEnviar" value="Enviar formulario al servidor" /> 
    		<input type="image" src="flechaVerde.png" width="30" height="30" title="Equivalente a submit" /> 
    		<input type="reset" value="Resetear el formulario" /> 
    	</form>  
    	
    	
	</body> 
</html>
		
		
		
		
		
		
		
		
		
		
		
		
		