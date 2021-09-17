<?php
    function sum(...$numeros) {
        $acc = 0;
        foreach ($numeros as $n) {
            $acc += $n;
        }
        return $acc;
    }
    echo sum(1, 2, 3);
?>