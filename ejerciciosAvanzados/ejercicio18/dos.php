<?php
$numeroRadios = (isset($_GET['numero'])) ? $_GET['numero'] : 1;
$numero = '';

echo '<form action="tres.php">';
for ($i = 1; $i <= $numeroRadios; $i++) {
    switch ($i){
        case 1:
            $numero = 'Uno';
            break;
        case 2:
            $numero = 'Dos';
            break;
        case 3:
            $numero = 'Tres';
            break;
        case 4:
            $numero = 'Cuatro';
            break;
        case 5:
            $numero = 'Cinco';
            break;
        case 6:
            $numero = 'Seis';
            break;
        case 7:
            $numero = 'Siete';
            break;
        case 8:
            $numero = 'Ocho';
            break;
        case 9:
            $numero = 'Nueve';
            break;
        case 10:
            $numero = 'Diez';
            break;
        case 11:
            $numero = 'Once';
            break;
        case 12:
            $numero = 'Doce';
            break;
        case 13:
            $numero = 'Trece';
            break;
        case 14:
            $numero = 'Catorce';
            break;
        case 15:
            $numero = 'Quince';
            break;
    }
    echo <<<HTML
    <input type="radio" id="opcion{$i}" name="opcion" value="{$i}" /><label for="opcion{$i}"> {$numero}</label><br/>
HTML;
}
echo '<input type="submit"></form>';

?>