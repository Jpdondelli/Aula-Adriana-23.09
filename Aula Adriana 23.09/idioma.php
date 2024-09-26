<?php

setcookie("idioma", $_GET["idioma"], time() + 259200); // Cria um cookie que dura 3 dias
header ("Location: exibeVersao.php"); //recarrega a página index.php
?>