<?php
//Introducir sustantivos y mostrar raiz y desinencias

function sacarRaiz($palabra){
    $raiz = "";
    
    if(substr($palabra,-2,2) == 'os' || substr($palabra,-2,2) == 'as') {
        $raiz = substr($palabra,0,-2);
    } else if (substr($palabra,-1,1) == 'o' || substr($palabra,-1,1) == 'a'){
        $raiz = substr($palabra,0,-1);
    }
    
    $raiz = ($raiz == '') ? 'Sustantivo no valido' : $raiz;
    return $raiz;
}

function combinaciones($raiz) {
    $combinaciones = <<<HTML
        <select>
            <option>{$raiz}o</option>
            <option>{$raiz}a</option>
            <option>{$raiz}os</option>
            <option>{$raiz}as</option>
        </select>
    HTML;
    return $combinaciones;
}
?>