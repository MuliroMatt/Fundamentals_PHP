<?php
    for ($numero = 0; $numero <= 500; $numero ++){
        if($numero % 2 == 0){
            $numpar = $numero;
            echo $numpar . ' ';
        }
    }

    echo ("<br>");
    echo ("<br>");
    
    for ($numero2 = 500; $numero2 >= 0; $numero2 --){
        if($numero2 % 2 != 0){
            $numimpar = $numero2;
            echo $numimpar . ' ';
        }
    }
?>