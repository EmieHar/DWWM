<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php, bases, opérateurs, conditions, switch</title>
</head>
<body>
    <?php
    echo "<p>Document</p>"; 
    // ne pas oublier le ; php en a besoin à la fin de chaque intruction
    // php peut être fait n'importe où, possible d'ajouter du html puis de relancer du php
    ?>
    <h1>TITRE</h1>
    <?php
    // une varible php toujours préfixée par $
    $unechaine="lorem ipsum blalala";
    echo "<p>".$unechaine."</p>";//opérateur de concaténation en php . .

    $x=1;
    $y=4;
    $z=$x+$y;

    echo "<p>".$x."+".$y."=".$z."</p>";
    // opéateurs: ++ , +=, --, -=, *=, /=, %=

    $w=++$y;// il affecte d'abord
    echo"<p>$w</p>";

    // possible stocker chaîne de caracères

    // conditions
    if($y>2){
        echo "<br> y est supérieur à 2";
    }else{
        echo "<br> y est inférieur à 2";
    }
    //>, <, >=, <=, ==, !=

    if($y>2){
        echo "<br> y est supérieur à 2";
    }else if ($y<2){
        echo "<br> y est inférieur à 2";
    }else{
        echo"<br> x est égal à 2";
    }

    $cvrai=true;
    if($cvrai){
        echo "<p>true</p>";
    }

    //possible combiner condition avec AND(&&) et OR(||)
    if(($y>2) && ($x ==1)){echo"<br>vrai";}// && renvoie true si toutes les comparaisons sont vraies
    //if($y>2 && $x ==1){echo"vrai";} fonctionne aussi mais moins lisible
    if(($y>2) || ($x ==1)){echo"<br> vrai";}// || renvoie true si une des comparaisons est vraie
    
    if(!($y==2) || ($x ==1)){echo"<br> vrai";}

    //opérateur ternaire (manière plus courte de faire if/else)
    $a=4;

    if($a>=0){
        echo "<br> a est positif";
    } else{
        echo "<br> a est négatif";
    }//peut s'écrire en opérateur ternaire:

    echo $a >=0? "<br> a est positif":"<br> a est négatif";//si la comparaison est vraie (?)affiche "a est positif" sinon (:) affiche "a est négatif"
    
    //switch
    switch($a){
        case 0:
            echo"<br> a est 0";
            break;
        case 1:
            echo"<br> a est 1";
            break;
        case 2:
            echo"<br> a est 2";
            break;
        case 3:
            echo"<br> a est 3";
            break;
        case 4:
            echo"<br> a est 4";
            break;
        default:
            echo"bug";

    }
    ?>
</body>
</html>