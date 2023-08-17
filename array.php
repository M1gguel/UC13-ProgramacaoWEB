<?php
// Comando para criar uma lista (array)
$listaCompra = ["Arroz", "Feijão", "Ovo", "Picanha"];

// Comando para Mostrar a lista tipo um "echo", mostrando os itens e posições 
print_r ($listaCompra);

// Comando ele vai mostrar tudo dentro do array, quantidade de valores, o tipo, quantos caracteres no string, etc.
var_dump($listaCompra);

echo "<hr>";

echo $listaCompra[2];

echo "<hr>";

// Foreach é o melhor laço de repetoção para escrever lista do itpo array
foreach($listaCompra as $item){
    echo $item. "- ";
}

echo "<hr>";

$listaCompra[] = "Óleo";

foreach($listaCompra as $indice => $item){
    echo $indice. "- " .$item. ", ";
}