<?php
 $listaAluno = [
    [
        "ID" => 1,
        "nome" => "Miguel Perez Silva",
        "email" => "miguelpsilva0@gmail.com",
        "telefone" => "(14) 9999-9999"
    ]
    ];

    $listaLivro = [
        [
            "ID" => 1,
            "titulo" => "assassin's creed black flag",
            "autor" => "Anton Gill",
            "DataEmprestimo" => "02/01/2023",
            "DataDevolucao" => "02/02/2023"
        ],
        [
            "ID" => 1,
            "titulo" => "A História de Um Banana",
            "autor" => "Will Smith",
            "DataEmprestimo" => "18/01/2023",
            "DataDevolucao" => "18/02/2023"
        ],
        ];
    
class Aluno{
    public $IDAluno;
    public $nome;
    public $dataNascimento;
    public $email;
    public $cpf;
    public $telefone;
    public $celular;
}

class Livros{
    public $IDLivro;
    public $titulo;
    public $valor;
    public $autor;
    public $numeropagina;
    public $anopublicacao;
    public $isbn;
}

class Emprestimo{
    private $IDEmprestimo;  
    public $aluno;
    public $livro; 
    public $DataEmprestimo;
    public $DataDevolucao;
}

class ADM{
    private $IdADM;
    public $nomeADM;
    public $cpf;
    public $area;
}