<?php
    require 'connec_bdd3.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <style>
        img{
            width: 200px;
        
        }
    </style>
</head>


<body>
    <?php

    try {
        
    $id=$_GET['id'];

    $sql=$pdo->prepare("SELECT * FROM produit WHERE produit.id='$id'");
    $sql->execute();
    $produit = $sql->fetch();
    

    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>

    <h2 id="<?=$produit['id']?>"><?=$produit['nom_produit']?></h2>

    <img src="<?=$produit['photo']?>" alt="photo du produit">
    <p>Prix à l'unité: <?=$produit['prix']?> Euros</p>
    <p>Stock: <?=$produit['stock']?></p>
    
    <form action="panier.php" method="POST">

        <label for="quantite">Quantité souhaitée</label>
        <input type="number" name="quantite" min="1" max="<?=$produit['stock']?>" required>

        <input type="hidden" name="id_produit" value="<?=$produit['id']?>">

        <input type="submit" value="Ajouter au panier">
    </form>

</body>

</html>