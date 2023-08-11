<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: pink}
        .laura {color: purple}
    </style>

</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class="laura">Programador: Laura Cernev</p>
    <hr>

    <?php
        // Geração de texto (string)
        echo "Chama Sesi-Senai !";

        /* Geração de texto estruturado (com tags, atributos) */
        echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP. </h2>";
        echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP. </h2>";

    ?>

    <h1>HTML e PHP mesclados</h1>
    <p>Parágrafos HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p class="grifa">Parágrafo mesclando HTML com <?=$linguagem?> </p>
</body>
</html>