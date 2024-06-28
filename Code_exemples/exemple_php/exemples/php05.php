<?php
declare (strict_types=1);// déclare une variable globale pour protéger/encadrer le reste des codes php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction</title>
</head>
<body>
    <?php

    function addition(int $a, int $b): int {//depuis version php7 :int permet de dire à la fonction qu'elle doit renvoyer un entier
        return $a + $b;
    }
    $res = addition(3,5);
    
    echo $res."<br>";

    echo addition(66,44);
    ?>
    <hr>
    <?php

    //variables statiques
    
    define("CONSTANTE",56);//convention: si majuscule = constante

    function compteur(){
        static $x =0;//fige l'argument
        echo "x".$x."<br>";
        $x++;
    }

    compteur();
    compteur();
    compteur();
    compteur();

    echo "la constante est : ".CONSTANTE."<br>";
    //constantes magiques (déjà inclue dans le php)
    echo __FILE__."<br>";// fichier courant
    echo __DIR__."<br>";// répertoire courant
    echo __LINE__."<br>";// ligne courante

    ?>

</body>
</html>