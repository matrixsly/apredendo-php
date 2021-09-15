<?php
 // imc = peso/ (altura x altura),

 
 $peso = 65;
 $altura = 1.65 ** 2;
 
 $imc = $peso /$altura;

 echo "$imc";

 if ($imc < 19 ) {
      # code...
      echo "voce esta magro";

 }elseif ($imc > 19 and $imc < 25) {
      # code...
      echo "voce esta normal";

 }elseif ( $imc > 25 and $imc < 31) {
      # code...
      echo "voce esta em sobrepeso";
 }else {
      echo "voce esta obeso";
 }