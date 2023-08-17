<?php

$listaFuncionarios = [
    [
        "ID" => 1,
        "nome" => "Miguel Perez Silva",
        "email" => "miguelpsilva0@gmail.com",
        "telefone" => "(14) 9999-9999"
    ], 
    [
        "ID" => 2,
        "nome" => "Rafael Naoki",
        "email" => "rafinha09@gmail.com",
        "telefone" => "(14) 9999-9999"
    ],
    [
        "ID" => 3,
        "nome" => "AArão Abbate",
        "email" => "aaraozinhoo@gmail.com",
        "telefone" => "(14) 9999-9999"
    ],
    [
        "ID" => 4,
        "nome" => "Rodolfo",
        "email" => "rodolfão@gmail.com",
        "telefone" => "(14) 9999-9999"
    ],
];

$quatfuncionario = count($listaFuncionarios);

// Adicionando um item no array pronto
$listaFuncionarios [$quatfuncionario]["ID"] = 5;
$listaFuncionarios [$quatfuncionario]["nome"] = "Cleinton";
$listaFuncionarios [$quatfuncionario]["email"] = "cleitinobrabo@gmail.com";
$listaFuncionarios [$quatfuncionario]["telefone"] = "(14) 9999-9999";

//var_dump($listaFuncionarios);