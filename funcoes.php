<?php
// criando uma função
function exibeMensagem(string $mensagem)
{
     echo $mensagem.PHP_EOL;
     
};

function depositar(array $conta, float $valorAdepositar)
{
     if ($valorAdepositar > 0) {
          # code...
          $conta['saldo'] += $valorAdepositar;
     }else {
          
          echo "o valor precisar ser positivo";
     }
     return $conta;
}

function sacar(array $conta, float $valorASacar) 
{
    if ($valorASacar > $conta['saldo']){

        exibeMensagem("Você não tem saldo suficiente");
    }
     else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
};
 


//criando um array associativo

$contaCorrente = [
     '123.456.789-10' =>[
          'titula' => 'maria',
          'saldo ' => 1000
     ],
     '123.456.689-11'=>[
          'titula'=> 'alberto',
          'saldo'=> 300
     ],
     '123.256.789-12' =>[
          'titula'=>'maria',
          'saldo'=>100
     ],
];

 

$pula = PHP_EOL;
echo $pula;

$contaCorrente ['123.456.689-11'] = sacar($contaCorrente['123.456.789-10'],500);
$contaCorrente[ '123.256.789-12'] = depositar($contaCorrente['123.456.789-10'],500);
$contaCorrente[  '123.456.789-10' ] = sacar($contaCorrente['123.456.789-10'],500);


foreach ($contaCorrente as $cpf => $conta) {

     # code...
      echo $conta['saldo'];
      echo $pula;
      echo $conta['titula'];
      echo $pula;
}

 



 
 
  