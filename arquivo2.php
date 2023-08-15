<html>  
    <head>
        <title>Aula de PHP</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore harum reprehenderit esse repellendus architecto atque ea! Modi exercitationem officia, vitae optio ea deserunt soluta nulla mollitia ut voluptate minus adipisci.</p>
    </body>

    <?php

        echo "Miguel Perez Silva";
    ?>
        <br>

    <?php
        print "Senac Marília";
    ?>

    <br>

    <!-- Comentário em HTML -->
    <?php
        //Comentário em PHP

        /*
        Comentário em
        várias linhas
        */

        $nomeCompleto = "Miguel Perez Silva";
        $idade = 40;
        $status = true;
        $salario = 1320.50;

        echo $nomeCompleto." ".$idade;
        echo "<br>";
        echo "$nomeCompleto $idade anos";

        $logoSenac ="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";

    ?>
    <img src="<?php echo $logoSenac ?>" alt="Senac Marília">

    <!-- short echo -->
    <img src="<?=$logoSenac ?>" alt="Senac Marília">
</html>