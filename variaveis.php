<?php
$nomeCompleto = 'Miguel Perez';
$idade = 16;
$status = true;
$salario = 1500.00;

// Comando para colocar uma linha (separar)
echo "<hr>";

// Significa "Se"
"?";

// Significa "Ou"
":";

echo $nomeCompleto;
echo "<hr>";

// Converte string em maiscúlo
echo strtoupper($nomeCompleto);
echo "<hr>";

// Converte string em minúsculo
echo strtolower($nomeCompleto);
echo "<hr>";

// Converte a primeira letra da string em minúsculo
echo ucwords($nomeCompleto);
echo "<hr>";

// Irá substituir uma string por outra usando os parâmetros 1- O que você quer mudar, 2- Pelo que você quer mudar e 3-  De onde você quer mudar
echo str_replace("Perez", "Silva",$nomeCompleto);
echo "<hr>";

// Repete o termo que você atribuiu
echo str_repeat("Miguel ", 4);
echo "<hr>";

// Verificar se existe a váriavel citada
echo isset($nome) ? 'true' : 'false';
echo "<hr>";

// Verificar se a váriavel está vazia
echo empty($nomeCompleto) ? 'true' : 'false';
echo "<hr>";