<?php 
$numero = (isset($_GET['opcion'])) ? $_GET['opcion'] : 1;
?>

<h2>Resultado Final:</h2>
<br/>
<h1><?= $numero?> + 2 = <?=($numero + 2)?></h1>