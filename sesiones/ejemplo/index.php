<?php
// session_start() te guarda la cookie asociandote una id de sesion
    session_start();
//     Si existe esta variable, ya se ha hecho una visita (isset)
    if (isset($_SESSION['visitas'])){               //En en archivo de MAMP>tmp>php>id_sesion se guardan los datos
       $_SESSION['visitas']++;                      //y no se destruyen los anteriormente guardados
    } else {
        $_SESSION['visitas'] = 1;
    }
                                                    
//     $_SESSION['cositas'] = 'cosas';
//     unset($_SESSION['cositas']);     //borrará la entrada del array
?>
<h1>Bienvenido</h1>

<h3>Es tu visita número <?=$_SESSION['visitas']?></h3>

<a href="fin.php">Terminar la visita</a>