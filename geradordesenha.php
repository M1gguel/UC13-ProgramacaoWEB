<html>
    <head>
        <meta charset="utf-8">
        <title>Gerador de Senha</title>

        <style>
            .boxSenha {
                border:1px solid #cccccc;
                display: inline-block;
                padding:20px;
                width: 50px;
                text-align: center;
                background-color: #fbec5d;
                font-size: 20px;
                color: black;
                font-weight: bold;
            }
        </style>

    </head>
    <body>
        <h1>Gerador de Senha</h1>

        <form action="geradordesenha.php"
        method="get">
            <label for="qtdsenha">Quantidades de Senhas</label>
            <br>
            <input name="qtdsenha" type="number" id="qtdsenha">
            <br>
            <button type="submit">Gerar</button>
            <a href="geradordesenha.php">Cancelar Senhas</a>
        </form>

        <hr>

        <?php if(isset($_GET['qtdsenha'])): ?>
                
            <?php for($i = 1; $i <= $_GET['qtdsenha']; $i++): ?>
            <div class="boxSenha">
                <?=$i ?>
            </div>
            <?php endfor ?>
            
        <?php endif; ?>
<hr>
        <p>
            Copyright &copy; <?=date("Y")?> - Todos os direitos são reservados
        </p>

    </body>
</html>