<?php

$nome = "Miguel Perez Silva";
$emaill = "miguelpsilva0@gmail.com";
$senha = "12345678";
$idade = 20;

echo "<h1>Estrtura Condicional</h1>";

/////////////////////////////////////////////
echo "<hr>";

echo "<h5>Exemplo de if()</h5>";

if($idade >= 18){
    echo "O usuário $nome é maior de idade";
}

/////////////////////////////////////////////

echo "<hr>";
echo "<h5>Exemplo de if e else()</h5>";

if ($senha == "12345678"){
    echo "A senha é válida!";
}else{
    echo "A senha Inválida!";
}

/////////////////////////////////////////////

echo "<hr>";
echo "<h5>Exemplo de if e elseIf else()</h5>";

if($idade <= 18){
    echo "Jovem";
}else if ($idade <= 21){
    echo "Adulto";
}else{
    echo "Idoso";
}

/////////////////////////////////////////////

echo "<hr>";
echo "<h5>Exemplo de if Ternario()</h5>";

echo ($idade >= 18) ? "Maior de Idade" : "Menor de Idade";

/////////////////////////////////////////////

echo "<hr>";
echo "<h5>Exemplo de Condição para Formulário de Login()</h5>";

if ($emaill == "miguelpsilva0@gmail.com" && $senha == "12345678"){
    echo "Usuário autenticado";
}else{
    echo "Usuário ou Senha Inválidos";
}

/////////////////////////////////////////////

echo "<hr>";
echo "<h5>Verificar se o número é par ou ímpar()</h5>";

$numero = 10;

if ($numero % 2 == 0){
    echo "O número $numero é par";
}else{
    echo "O número $numero é ímpar";
}

/////////////////////////////////////////////

echo "<hr>";
echo "<h5>Mostre o Dia da Semana()</h5>";

$dia =  date('w');// 0 = domingo, 1 = segunda e assim por diante


if ($dia == 0){
    echo "Hoje é Domingo";
}else if ($dia == 1){
    echo "Hoje é Segunda";
}else if ($dia == 2){
    echo "Hoje é Terça";
}else if ($dia == 3){
    echo "Hoje é Quarta";
}else if ($dia == 4){
    echo "Hoje é Quinta";
}else if ($dia == 5){
    echo "Hoje é Sexta";
}else{
    echo "Hoje é Sábado";
}
