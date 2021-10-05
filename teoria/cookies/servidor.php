<?php
    $chapa = isset($_COOKIE['chapa']) ? $_COOKIE['chapa'] : 'NO EXISTE';
    $peligro = isset($_COOKIE['peligro']) ? $_COOKIE['peligro'] : 'NO EXISTE';
    
//     Se crean las cookies chapa y peligro
    setcookie("chapa", "Te la comiste, papá");
    setcookie("peligro", "Agarráte, que vienen curvas");
?>

<h1>Hola desde el servidor</h1>

<ul>
  <!-- '?=' al empezar un codigo inyectado de php equivale a 'php echo "String"' -->	
  <li> Cookie 'chapa': <?php echo "$chapa"?> </li>
  <li> Cookie 'peligro': <?=$peligro?> </li>
</ul>
