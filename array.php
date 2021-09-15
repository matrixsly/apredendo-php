<?php
// criando um array com php ;)

$nomes = [0 => 'alex', 'cpf' => 415316,
         1=> 'lucas', 'cpf' => 553119,
         2=>'leo', 'cpf' => 415616,
         3 =>'bruno','cpf' => 415716,
         4=>'amanda','cpf' => 445316,
         5 =>'carol','cpf' => 489316,];

$pula_linha = PHP_EOL;


for ($i=0; $i < count($nomes) ; $i++) { 
     # code...
     echo ("$nomes[$i]");
     echo $pula_linha;
     


}
echo count($nomes);

foreach ($nomes as $pessoa) {
     # code...
     echo $pessoa[0]['cpf'];
}
 
