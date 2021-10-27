<script>
	var xmlhttp;
	
	function accionAJAX(){
		document.getElementById("texto").innerHTML=xmlhttp.responseText;
	}

	function usarAJAX() {
		xmlhttp = new XMLHttpRequest();
		
		xmlhttp.open("GET","raiz.php?sustantivo=" + document.getElementById('sustantivo').value,true);
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
		
	}
	
	function usarAJAX2() {
    	xmlhttp = new XMLHttpRequest();
    	
    	xmlhttp.open("GET","combinar.php?sustantivo=" + document.getElementById('sustantivo').value,true);
    	xmlhttp.send();
    	
    	xmlhttp.onreadystatechange=function() {
    		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    			accionAJAX();
    		}
    	}
		
	}
</script>

<h2>Introduce un sustantivo regular</h2>

<input type="text" id="sustantivo" name="sustantivo" />

<input type="submit" onclick="usarAJAX();" value="Raiz"/>
<input type="submit" onclick="usarAJAX2();" value="Combinar"/>
<h4>... y observa el resultado</h4>
<div id="texto"></div>