<?php 
    $stringa = "L'esercizio consiste nel censurare una parola. La parola censurare dev'essere sostituita da tre asterischi.";
    echo $stringa;
    echo strlen($stringa);

    $_GET["censura"];
    $stringa_censurata = str_replace($_GET, '***', $stringa)
?>