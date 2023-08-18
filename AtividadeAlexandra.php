<?php

class Aluno{
    private $IDAluno;
    public $nome;
    public $dataNascimento;
    public $email;
    public $cpf;
    public $telefone;
    public $celular;

    
    public function __construct($nome)
    {
        $this -> nome = $nome; 
    }
}

class Livros{
    private $IDLivro;
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

    public function __construct(Livros $livro, Aluno $aluno)
    {
        $this -> livro = $livro;
        $this -> aluno = $aluno;

        
    }
}

class ADM{
    private $IdADM;
    public $nomeADM;
    public $cpf;
    public $area;
}