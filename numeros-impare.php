<?php
// criando um programa que mostre so numeros
//impares vamos la ;)
$pula_linha = PHP_EOL;
$constante = 2;
$impar_a = $a%2;
 

for ($i=1; $i <= 100 ; $i++) { 
     # code...

     $impar = $i%2;

     if ($impar == 0) {
        continue;
        echo "$i";

     }else {
          # code...
          echo "$i";
     }
     echo $pula_linha;
      
     
}
echo $pula_linha;
echo "numeros pares";

for ($i=1; $i <= 100 ; $i++) { 
     # code...

     $impar = $i%2;

     if ($impar == 1) {
        continue;
        echo "$i";

     }else {
          # code...
          echo "$i";
     }
     echo $pula_linha;
      
     
}


 

      
 
