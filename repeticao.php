<?php
// apredendo sobre loops while e o for
// apredendo sobre break e o continue

$contador = 1;

$pula_linha = PHP_EOL;

// repetindo com while
while ($contador <= 15) {
     # code...
    
     if ($contador == 10 ) {
          # code...
          $contador++;

     }
     if ($contador == 12) {
          # code...
          break;
     }
     
     echo ("# $contador");
     echo ($pula_linha);
     $contador++;

     
     
    
     

}


echo ($pula_linha);

//repetindo for
for ($contador=1; $contador <=15 ; $contador++) { 
     # code...
     if ($contador == 2 or $contador ==6) {
          # code...
          continue;
     }
     echo ($pula_linha);
     echo ("# $contador");
}

 
 