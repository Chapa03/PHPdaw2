<h3>Listado de cookies del directorio <?=pathinfo($_SERVER['REQUEST_URI'])['dirname'].'/';?> (Nivel 0)</h3>
<table border="1">
	<tr>
		<th>Nombre Cookie</th><th>Contenido Cookie</th>
	</tr>
<?php
foreach ($_COOKIE as $k => $v) {
    echo <<<HTML
        <tr><td>$k</td><td>$v</td></tr>
    HTML;
}
?>
</table>
<a href="cero.php" >Volver</a>