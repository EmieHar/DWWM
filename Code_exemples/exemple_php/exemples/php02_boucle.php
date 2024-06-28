<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle</title>
</head>
<body>
    <?php
        // fonction include
        //  include "nav.php"; //si include ne trouve pas le fichier, déclanche un warning mais reste code s'execute
        require_once 'nav.php';//once pour une seule fois, si require ne trouve pas le fichier, erreur sera levée et reste code ne peut pas s'exécuter
     ?>

    <?php
    $x=0;
    while($x<=10){
        echo "x=$x<br>";
        $x++;
    }
    ?>

    <hr>

    <?php
    $y=0;
    for ($y=0;$y<10;$y++){
        echo"y=$y <br>";
    }
    ?>

     <hr>

    <?php
     require_once 'footer.php';
    ?>

   
</body>
</html>