<?php

function soma(){ //dentro de parenteses chamaremos de parâmetros
    echo "<hr>Seja Bem Vindo a função</br>";
    Echo "Volte Sempre";

}

echo soma();
echo soma();


function soma1($n1,$n2){
    
    $res = $n1+$n2;
    echo "A Soma total da variavel é =".$res;


}

echo soma1(8,8);