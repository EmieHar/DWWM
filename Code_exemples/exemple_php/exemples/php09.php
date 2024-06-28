<?php
declare (strict_types=1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 11</title>
</head>
<body>

    <?php
     require 'debug.php';

     $users = [
        ['nom'=>"Mathilde",'email'=>"maya@gmail.com"],
        ['nom'=>"Paolo",'email'=>"polo@gmail.com"],
        ['nom'=>"Jean",'email'=>"jano@gmail.com"],
        ['nom'=>"Patrice",'email'=>"pat@gmail.com"]
     ];

     foreach($users as $cle =>$valeur){
    ?>
       <h1>Utilisateur <?=$cle;?></h1>
       <?php
        foreach($valeur as $c=>$v){
            echo '<p>'.$c.' : '.$v.'</p>';
        }
     }
    ?>
    <hr>
    <?php

        $produits=[
            'livres'=>['titre'=>"Autant en emporte le vent",'quantite'=>12, 'valeur'=>8.90],
            'CDs'=>['titre'=>"Best Of Beethoven",'quantite'=>25, 'valeur'=>19.99],
        ];

        debug($produits);//var_dump donne plus de détails que print_r

        foreach($produits as $cle=>$produit){
            echo'<h1>'.$cle.'</h1>';
            foreach($produit as $attribut =>$valeur){
        ?>
                <p><?=$attribut; ?> = <?=$valeur; ?></p>
        <?php } ?>
       <?php } ?>
  
</body>
</html>