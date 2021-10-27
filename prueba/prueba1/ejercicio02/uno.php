<?php 
session_start();
$sustantivo = (isset($_POST['sustantivo'])) ? $_POST['sustantivo'] : null;

if ($sustantivo == null) {
    $_SESSION['sustantivos'] = [];
} else {
    $_SESSION['sustantivos'][] = $sustantivo;
//     array_push($_SESSION['sustantivos'], $sustantivo);
}

if ((isset($_POST['accion'])) && ($_POST['accion'] == 'Combinar')){
    header('location:dos.php');
}
?>

<h1>Introduce un sustantivo regular</h1>
<form action="uno.php" method="post">
	<input type="text" name="sustantivo" />
	<input type="submit" name="accion" value="Mas sustantivos" />
	<input type="submit" name="accion" value="Combinar" />
</form>