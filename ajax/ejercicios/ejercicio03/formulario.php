<script>
	var xmlhttp;
	
	function accionAJAX(){
		var etiquetas = xmlhttp.responseText.split(':');
		
		document.getElementById("idPalabraLabel").innerHTML = etiquetas[0];
		document.getElementById("idTraduccionLabel").innerHTML = etiquetas[1];
		document.getElementById("idBoton").value = etiquetas[2];
	}

	function usarAJAX() {
		xmlhttp = new XMLHttpRequest()
		
		var idioma = document.querySelector('input[name="bandera"]:checked').value;
		
		xmlhttp.open("GET","ajax.php?idioma="+idioma,true);
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
		
	}
</script>

<img src="img/es.jpg" height="30" width="50" />
<input type="radio" name="bandera" value="es" checked="checked" onchange="usarAJAX()"/>

<img src="img/fr.png" height="30" width="50" />
<input type="radio" name="bandera" value="fr" onchange="usarAJAX()" />

<img src="img/uk.png" height="30" width="50" />
<input type="radio" name="bandera" value="en" onchange="usarAJAX()" />

<hr/>

<label for="idPalabraTexto" id="idPalabraLabel">Palabra</label>
<input type="text" id="idPalabraTexto" />
<br/>

<label for="idTraduccionTexto" id="idTraduccionLabel">Traducción</label>
<input type="text" id="idTraduccionTexto" />

<br/>
<br/>

<input id="idBoton" type="submit" value="Enviar" />





