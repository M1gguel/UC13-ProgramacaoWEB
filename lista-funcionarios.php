<?php

include "funcionarios.php";

?>

<html>

<head>
    <title>Lista De Funcionários</title>
</head>

<body>
    <h1>Lista De Funcionários</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($listaFuncionarios as $funcionario) : ?>
                <tr>
                    <th><?=$funcionario["ID"] ?></th>
                    <td><th><?=$funcionario["nome"] ?></th></td>
                    <td><th><?=$funcionario["email"] ?></th></td>
                    <td><th><?=$funcionario["telefone"] ?></th></td>
                    <td>Editar Visualizar Excluir</td>
                </tr>
            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Foi encontrado 5 funcionários cadastrados</td>
            </tr>
        </tfoot>

    </table>
</body>

</html>