
<?php

//criando um array associativos
$conta1 = ['titular' => 'alex',
          'saldo ' => 2500];

$conta2 = ['titular' => 'leo',
          'saldo' => 1000];

$conta3 = ['titular' => 'vinicius',
        'saldo' => 2000];
$pula_linha = PHP_EOL;

$conta_corrente = [$conta1,$conta2,$conta3];

for ($i=0; $i <= count($conta_corrente) ; $i++) {
     echo $conta_corrente[$i]['saldo'];
     echo $pula_linha;

     # code...
}

$indice = count($conta_corrente);

$x = 0;

echo ($conta_corrente[0]['saldo']);


while ($x<= 3) {
     
     echo $conta_corrente[$x]['titular'];
     echo $pula_linha;
     $x++;

     # code...
}

foreach ($conta_corrente as $conta) {
     # code...
     echo['saldo'];
     

};