<?php 
    session_start();
    
    function suma($sumandos){
        $suma = 0;
        foreach ($sumandos as $s){
            $suma += $s;
        }
        return $suma;
    }
 /*   
    echo '<h1>';
    
    foreach ($_SESSION['sumandos'] as $k => $sumando){
        $simbolo = ($k == sizeof($_SESSION['sumandos']) - 1) ? ' = ' : ' + ';
        echo $sumando . $simbolo;
    }
    
    echo ' = ' . suma($_SESSION['sumandos']) .'</h1>';
    
    echo '<a href="uno.php">Volver</a>';
*/
?>

<h1>
	<?php foreach ($_SESSION['sumandos'] as $k => $sumando): ?>
        <?php $simbolo = ($k == sizeof($_SESSION['sumandos']) - 1) ? ' = ' : ' + '; ?>
        <?= $sumando . $simbolo; ?>
    <?php endforeach;?>
    
    <?= suma($_SESSION['sumandos']) ?>
</h1>

