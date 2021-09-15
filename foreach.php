 
 <?php

$contaCorrente =[
       123161819 => [
          'titular' => 'alex',
          'saldo' => 2000,
          'idade' => 10,
     ],
     
     291119815 => [
          'titular'=>'lucas',
          'saldo'=>1000,
          'idade' => 13,
     ],

     165189166 => [
          'titular'=> 'rodrigo',
          'saldo' => 5000,
          'idade' => 20,
     ]
];
$pula_linha = PHP_EOL;

$contaCorrente[0] = [
     'titular'=>'claudia',
     'saldo' => 2000,
];

 
 
echo $pula_linha;




// adicionando um elemento array
foreach ($contaCorrente as $cpf => $conta) {
     # code...
     
     $nome = $conta['titular'];
     $dinheiro = $conta['saldo'];
     echo "o  cpf:$cpf do titular:$nome o saldo do dinheiro:$dinheiro";

     echo $pula_linha;

    echo $conta['idade'];

    echo $pula_linha;
    
     
     
      
};


$saca =  $contaCorrente[0]['saldo'] - 200;

  $indice = count($contaCorrente);


echo $contaCorrente[$indice];