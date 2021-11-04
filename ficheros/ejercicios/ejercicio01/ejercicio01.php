<?php
// Hacer un programa que, dado el texto de debajo, 
// cree un fichero llamado articulo.txt  y guarde dicho contenido en él.

$articulo = fopen('articulo.txt', 'w');

$texto = <<<ARTICULO
Julio Iglesias ha entrado en
una polémica sin quererlo por
la decisión de Ana Botella de
investirle como hijo predilecto.
O, por lo menos, la oposición
es la que ha criticado este
reconocimiento porque, dicen,
es una decisión que ha llegado
sin el acuerdo de los grupos.
Estas propuestas, aseguran,
las tienen que alcanzar los
partidos en consenso, pues son
unos "honores que la ciudad
tiene que entregar y no
otorgarlos sólo el Gobierno".
Al margen de esto, se prevé que
marzo sea el mes en que Madrid
otorgue el premio al cantante.
ARTICULO;

fputs($articulo, $texto);
?>