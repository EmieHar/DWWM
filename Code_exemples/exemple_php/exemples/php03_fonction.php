<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonctions</title>
</head>
<body>
    <?php
    function bonjour($prenom,$age=18){//$age=18 met une valeur par défaut à la variable age
        echo "bonjour, je suis ".$prenom." j'ai ".$age."ans <br>";
    }
    bonjour(" Pierre","6");
    bonjour(" Paul","25");
    bonjour(" Jack");

    ?>
    <hr>
    <?php

    function rebonjour(...$prenoms){
        foreach($prenoms as $p){
            echo "bonjour".$p."<br>";
        }
    }

    rebonjour(" Pierre","Paul", " Jack", " Pauline");
    ?>
</body>
</html>