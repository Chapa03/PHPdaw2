<!-- // Mejorar el programa anterior, añadiendo un select que 
// me permita escoger entre varios colores, y un par de 
// checkboxes que me permitan escoger si quiero la palabra 
// subrayada y/o en negrita. El texto se devolverá con la 
// palabra introducida, resaltada con las opciones de color, 
// subrayado y negrita que haya escogido el usuario. -->
<?php
session_start();
session_destroy();

$texto = file_get_contents('../ejercicio01/articulo.txt');
$textoF = isset($_SESSION['textoF']) ? $_SESSION['textoF'] : $texto;
?>

<h3>Ejercicio 4 - Formateo</h3>
<div class="contenedor"><pre><?=$textoF?></pre></div>
<form action="formateo.php" method="get">
    <select name="color">
    	<option value="teal">Verde azulado</option>
    	<option value="cadetblue">Cadetblue</option>
    	<option value="chartreuse">Monasterio</option>
    	<option value="darkorange">Naranja</option>
    	<option value="deeppink">Rosa chicle</option>
    	<option value="lavender">Lavanda</option>
    	<option value="lightcoral">Coral</option>
    	<option value="rebeccapurple">Morado</option>
    </select>
    <br/>
    <input type="checkbox" name="subrayar" id="subrayar" />
    <label for="subrayar">Subrayar</label>
    <input type="checkbox" name="negrita" id="negrita" />
    <label for="negrita">Negrita</label>
    <br/><br/>
    <label for="buscar">Introduce una palabra:</label>
    <br/>
    <input type="text" id="buscar" name="palabra" />
    <input type="submit" value="Formatear" />
</form>




