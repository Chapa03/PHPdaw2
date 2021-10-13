<!-- 
// Visualizar en la barra de navegación de un navegador 
// la siguiente URI (sin escribirla a mano, y sin utilizar hipervínculos)
//      http://somos.los.mas?listos=del&mundo=entero
// ¿Qué habría que hacer para visualizar esta otra URI?
//      http://somos.los.mas?listos=del&mundo.entero=
 -->
 
<form action="http://somos.los.mas">
	<input type="text" name="listos" />
	<input type="text" name="mundo" />
	<input type="submit">
	<!-- Para visualizar "http://somos.los.mas?listos=del&mundo.entero=", el name
	del segundo input tendría que ser mundo.entero y su campo de texto tendría
	que estar en blanco al enviar el formulario -->
</form>