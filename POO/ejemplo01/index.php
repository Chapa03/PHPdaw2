<?php

    include "Musico.php";
    
    $p = new Persona();
    
    $p->setNombre('Pepe');
    $p->dimeNombre();
    $p -> __toString();
    
    $personas = [];
    
    for ($i = 10; $i <= 20; $i ++) {
        if (time() % 2 == 0) {
            $personas[] = new Musico("Músico $i", $i);
        } else {
            $personas[] = new Persona("Persona $i", $i);
        }
        
    }
    
    foreach ($personas as $persona) {
        echo "\n==================\n";
        echo $persona . "\n";
        
        $persona -> dimeNombre();
        $persona -> hablar();
        $persona -> __toString();
    }
    

    
?>