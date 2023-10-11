<?php

//! ############### EXERCÍCIO ##############

//*CRIE UM CÓDIGO PHP QUE VALIDE O ALISTAMENTO MILITAR OBRIGATÓRIO
//*LEMBRANDO QUE +18 E MASCULINO

$sexo = "M";
$idade = 19;

if($sexo == "M" && $idade >= 18){
    echo("BEM VINDO AO EXÉRCITO BRASILEIRO");
}
else{
    echo("DISPENSADO");
}
?>