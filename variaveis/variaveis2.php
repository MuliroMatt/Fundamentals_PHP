<?php

#STRING
#INTEIRO
#FLOAT OU DOUBLE
#BOOL

#EXEMPLO 1
$nome = "Murilo Matt"; //*STRING OU TEXTO 
#EXEMPLO 2 
$idade = 18; //*INTEIRO
#EXEMPLO 3
$altura = 1.90; //*DOUBLE O FLOAT
#EXEMPLO 4
$verdadeiro = true; //*BOOLEANO
$falso = false; //*BOOLEANO

//!#################### EXERCÍCIO #################### */

//*1 - IMPRIMA TODOOS OS VALORES NA TELA CONTENDO SEUS DADOS (PULE LINHA)
echo($nome . "<br>");
echo($idade . "<br>");
echo(number_format($altura, 2, ',','.') . "<br>");
echo($verdadeiro . "<br>");
echo($falso . "<br>");
?>