	<script>
		var xmlhttp;
		
		function accionAJAX(tipo){
			document.getElementById("id-"+tipo).value=xmlhttp.responseText;
		}
	
		function usarAJAX() {
			xmlhttp = new XMLHttpRequest()
			var script = tipo+.'php';
    		xmlhttp.open("GET",script,true);
    		xmlhttp.send();
    		xmlhttp.onreadystatechange=function() {
    			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    				accionAJAX();
    			}
			}
			
		}
	</script>

<button onclick="usarAJAX('pelis');" >Peli favorita</button>
<input id="id-pelis" type="text" readonly="readonly"/>
<br/>

<button onclick="usarAJAX('canciones');" >Canción favorita</button>
<input id="id-canciones" type="text" readonly="readonly"/>
<br/>