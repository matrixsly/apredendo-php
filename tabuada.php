<?php
//escrevendo um codigo que mostre uma tabuada de um numero esoecifico
$pula_linha = PHP_EOL;
 
for ($i=0; $i <= 10; $i++) { 
     # code...
     $x = 2;
      
     $resultado = $x * $i;

     echo "$x x $i = $resultado";
     echo $pula_linha;

     
}
