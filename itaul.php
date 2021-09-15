
<?php

//lista associativa

require_once 'arquivos_funcoes.php';

$registro = [
     'dados_pessoais00' => [
     'nome' => 'alex',
     'idade' => 20,
     'bairro'=> 'vila gilda',
     'banco' => 'itaul',
     'telefone' => 11985915146]
      
           

];

$registro['dados_pessoais01']=[
     'nome' => 'leo',
     'idade' => 24,
     'bairro'=> 'bento gilda',
     'banco' => 'bradesco',
     'telefone' => '11985815156'
];

$registro['dados_pessoais01']['idade'] = 25;

//unset($registro['dados_pessoais01']);
unset($registro['dados_pessoais01']['idade']);

print_r($registro);

echo PHP_EOL;

foreach ($registro as $key => $value) {
     # code...
      
     list('nome' => $nome, 'idade'=>$idade,) = $value;
     echo (" o nome:$nome idade:$idade".PHP_EOL);
};

  

 