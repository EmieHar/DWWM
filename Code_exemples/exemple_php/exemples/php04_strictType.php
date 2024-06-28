<?php
declare (strict_types=1);// déclare une variable globale pour protéger/encadrer le reste des codes php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strict_types</title>
</head>
<body>
    <?php
    function addition(float $a, float $b){//type des arguments float (chiffres à virgules), int (entier), string, bool
        echo $a + $b."<br>";
    }
    addition(3,5);
    addition(3,4.5);
    addition(3.5,4.2);
    addition(3,"Pierre")//erreur de type
    ?>
</body>
</html>