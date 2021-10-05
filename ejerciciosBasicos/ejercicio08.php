<?php
// Dado un día, mes y año entre el 1 de enero de 1971 y la actualidad,
// mostrar el número de años, meses, días, horas, minutos y segundos
// transcurridos desde entonces hasta ahora (no es necesario tener en cuenta 
// años bisiestos, y se pueden considerar todos los meses como si tuvieran 30 días)
    echo 'Introduce un día: ';
    fscanf(STDIN, '%s\n', $dia);
    echo 'Introduce un mes: ';
    fscanf(STDIN, '%s\n', $mes);
    echo 'Introduce un año: ';
    fscanf(STDIN, '%s\n', $anio);
    
//     Almacenar la fecha nueva
    $fecha = "$dia/$mes/$anio";
    
//     Almacenando en segundos la diferencia entre la fecha actual y 
//     los segundos transcurridos desde el 01/01/1970 00:00:00 hasta la fecha introducida
    $segTranscurridos = time() - strtotime($fecha);
    
//     Creando constantes de hora, minutos,... para operar con ellas
    const segXMin = 60;                     //Segundos por minuto
    const segXHora = segXMin * 60;          //Segundos por hora
    const segXDia = segXHora * 24;          //Segundos por día
    const segXMes = segXDia * 30;           //Segundos por mes
    const segXAnio = segXDia * 365;         //Segundos por año
    
//     A los segundos de diferencia entre fechas le vamos quitando años, meses, dias,... hasta quedarnos con los segundos
    $aniosTranscurridos = (int) ($segTranscurridos / segXAnio);
    $segTranscurridos = $segTranscurridos % segXAnio;
    
    $mesesTranscurridos = (int) ($segTranscurridos / segXMes);
    $segTranscurridos = $segTranscurridos % segXMes;
    
    $diasTranscurridos = (int) ($segTranscurridos / segXDia);
    $segTranscurridos = $segTranscurridos % segXDia;
    
    $horasTranscurridas = (int) ($segTranscurridos / segXHora);
    $segTranscurridos = $segTranscurridos % segXHora;
    
    $minutosTranscurridos = (int) ($segTranscurridos / segXMin);
    $segTranscurridos = $segTranscurridos % segXMin;
    
//     Mostramos por pantalla todos los resultados
    echo "Desde $fecha, han transcurrido:\n $aniosTranscurridos años, $mesesTranscurridos meses,"
        . " $diasTranscurridos días,\n $horasTranscurridas horas, $minutosTranscurridos minutos y $segTranscurridos segundos.";
    
?>