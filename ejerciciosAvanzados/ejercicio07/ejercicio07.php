<!-- Observar cómo algunos de los nuevos controles y elementos de HTML5 
    envían información al servidor utilizando el siguiente código. -->


<form autocomplete="on">
	Estaciones <input list="estaciones" name="estacion">
	<datalist id="estaciones">
		<option value="Primavera"><option value="Verano">
		<option value="Oto&ntilde;o"><option value="Invierno">
	</datalist><br />
	Color favorito <input type="color" name="colorFavorito"><br /> 
	Buscar <input type="search" name="busca" placeholder="Escribe aqu&iacute;"><br />  
	E-mail <input type="email" name="email" >  <br />
	Fecha nacimiento <input type="date" name="fNac"> <br /> 
	Edad (de 0 a 150) <input type="number" name="edad" min="0" max="150"> <br />  
	P&aacute;gina personal <input type="url" name="paginaPersonal"> <br />
	Horario: De <input type="time" name="horaEntrada"> a <input type="time" name="horaSalida"><br /> 
	Semana de vacaciones <input type="week" name="semanaVacaciones"> <br />
	<input type="submit">
</form>
