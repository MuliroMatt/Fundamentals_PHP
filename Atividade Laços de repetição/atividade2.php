<?php
    $pares = array();
    $impares = array();
    for ($numero = 0; $numero <= 500; $numero ++){
        if($numero % 2 == 0){
            $numpar = $numero;
            $pares[] = $numpar;
        }else{
            $numimpar = $numero;
            $impares[] = $numimpar;
        }
    }
    echo implode(' ', $pares);
    echo "<br><br>";
    echo implode(' ', array_reverse($impares));
?>