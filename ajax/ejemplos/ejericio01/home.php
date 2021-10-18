<head>
	<script>
		var xmlhttp;
		
		function accionAJAX(){
			document.getElementById("idDiv").innerHTML=xmlhttp.responseText;
		}
	
		function usarAJAX() {
			
				//Crea objeto de la clase XMLHttpRequest()
			
			 xmlhttp = new XMLHttpRequest()

				//Ese objeto abre una conexión con el servidor mandándole el comando GET cuando lo haga
				//ajax.php es la uri a la que se va a conectar
				//true - la conexión va a ser asíncrona
			
    		xmlhttp.open("GET","ajax.php",true);
    		
    			//manda la petición al servidor
    			
    		xmlhttp.send();
    		
    		xmlhttp.onreadystatechange=function() {
    			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    				accionAJAX();
    			}
			}
			
		}
	</script>
</head>
<body>
	<h2>Texto fijo</h2>
	<div id="idDiv">
		<h2>Texto cambiante</h2>
	</div>
	<button type="button" onclick="usarAJAX();">Cambiar</button>
</body>