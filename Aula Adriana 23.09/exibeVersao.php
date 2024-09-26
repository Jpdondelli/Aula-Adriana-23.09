<?php
    $arquivo = fopen('versao.txt', "r");

    $texto = $arquivo ? fread($arquivo, 5000) : "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design em Foco</title>
    <link rel="stylesheet" href="styles.css">
    <?php include("compara.inc") ?>
</head>
<body>
    <header class="header">
        <h1 class="title">Bem-vindo ao site Web Design em Foco</h1>
    </header>
    <div class="conteudo">
            <p> <?php echo($texto) ?> </p>
            <a href="reiniciaIdioma.php"> Selecionar outro idioma </a>
        </div>


</body>
</html>