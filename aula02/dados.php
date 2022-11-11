<?php

//criando o array de alunos
$alunos = [];

//conectar ao banco de dados do mysql
//e mostrar os dados vindos do banco de dados

$alunos[] = [
    'nome' => 'Chiquim',
    'cidade' =>'Caucaia',
    'matricula' => '23',
];

$alunos[] = [
    'nome' => 'Madeinusa',
    'cidade'=> 'Quixadá',
    'matricula'=>'28',
];

$alunos[] = [
   'nome'=> 'Valcigleydson',
    'cidade'=>'Mauriti',
    'matricula'=> '11',
];

//incluindo a tabela com o html
include 'tabela.php';
