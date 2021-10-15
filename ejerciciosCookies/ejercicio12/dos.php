<?php 

    session_start();
    $nSumandos = isset($_GET['nSumandos']) ? $_GET['nSumandos'] : null;
    
    $n = isset($_GET['n']) ? $_GET['n'] : null;
    
    if ($nSumandos != null) {
        $_SESSION['nSumandos'] = $nSumandos;
        $_SESSION['n'] = 1;
        $_SESSION['sumandos'] = [];
    } else {
        $_SESSION['n'] ++;
        $_SESSION['sumandos'][] = $n;
        
        if ($_SESSION['n'] > $_SESSION['nSumandos']){
            header('Location:tres.php');
        } 
    }

?>

<form>
	<h4>Introduce el sumando número <?=$_SESSION['n']?>/<?=$_SESSION['nSumandos']?> (1..10)</h4>
	<input type="number" min="2" max="15" value="5" name="n" />
	<br/>
	<input type="submit" />

</form>