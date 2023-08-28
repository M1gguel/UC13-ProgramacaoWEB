<?php
if(isset($_POST['cep'])&& !empty($_POST['cep'])){

    $cep = $_POST['cep'];
    $resultado = file_get_contents("http://viacep.com.br/ws/$cep/json/");

    $dadosEnedereco = json_decode($resultado, true);

    //var_dump($dadosEnedereco);

}else{
    header("location:buscar-endereco.php");
    exit;
}
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Dados do CEP</title>
    </head>
    <body>
        <h1>Endereço</h1>
        <hr>
        <p>CEP: <?=$dadosEnedereco['cep']?></p>
        <p>Logradouro: <?=$dadosEnedereco['logradouro']?></p>
        <p>Complemento: <?=$dadosEnedereco['complemento']?></p>
        <p>Bairro: <?=$dadosEnedereco['bairro']?></p>
        <p>Localidade: <?=$dadosEnedereco['localidade']?></p>
        <p>Estado: <?=$dadosEnedereco['uf']?>
        <p>IBGE: <?=$dadosEnedereco['ibge']?>
        <p>Gia: <?=$dadosEnedereco['gia']?>
        <p>DDD: <?=$dadosEnedereco['ddd']?>
        <p>Siafi: <?=$dadosEnedereco['siafi']?>
    </body> 
</html>