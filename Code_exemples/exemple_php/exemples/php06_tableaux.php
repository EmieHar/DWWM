<?php
declare (strict_types=1);// déclare une variable globale pour protéger/encadrer le reste des codes php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>

    <?php
        $tab1 = [23,55,44];
        $prenoms = array("pierre","Paul","Jacky");

        require_once 'debug.php';//function mise dans un fichier à part et appelée
    
    //    function debug($v){
    //     echo"<pre>";
    //         print_r($v);//fonction pour parcourir un tableau
    //     echo"</pre> <hr>";
    //    }

        debug($tab1);
        debug($prenoms);

        echo $prenoms[0]."<hr>";
   
        $taille= count($prenoms);//fonction php de comptage --> donne la longueur du tableau
   
    // parcours du tableau
        for ($i=0; $i<$taille; $i++){
        echo $prenoms[$i]."<br>";
        }

    echo "<hr>";

        foreach($prenoms as $p){
            echo $p."<br>";
        }
    
    ?>

</body>
</html>