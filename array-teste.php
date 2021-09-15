<?php


$registro_pessoas = [
     0 => ['nome' => 'alex oliveira araujo',
     'cidade' => 'sao paulo',
     'idade' => 20,],
];

echo $registro_pessoas[0]['nome'];

foreach ( $registro as $cpf => $conta ) {
     # code...
     echo $cpf[0]['nome'];
};