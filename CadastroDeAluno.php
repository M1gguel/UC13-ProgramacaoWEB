<?php
include "AtividadeAlexandra.php"
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cadastro de aluno</title>
</head>
<body>
    <div>
    <h1>Cadastro De Aluno</h1>
    <?php
        if (isset($_GET['success'])) {
            echo 'Cadastro foi feito com sucesso!';
        }
        ?>
    <form action="processar_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <br>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="telefone">Telefone:</label>
        <br>
        <input type="text" name="telefone" id="telefone" required>
        <br><br>
        <label for="dataNascimento">Data de Nascimento:</label>
        <br>
        <input type="date" name="dataNascimento" id="dataNascimento" required>
        <br><br>
        <label for="cpf">CPF:</label>
        <br>
        <input type="text" name="cpf" id="cpf" required>
        <br><br>
        <label for="celular">Celular:</label>
        <br>
        <input type="text" name="celular" id="celular" required>
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
    </div>
</body>
</html>