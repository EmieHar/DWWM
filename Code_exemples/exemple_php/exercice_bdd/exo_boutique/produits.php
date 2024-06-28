<!DOCTYPE html>
<?php
session_start();
require 'connec_bdd3.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="./image/favicon-32x32.png"/>
    <link rel="stylesheet" href="./css/styles.css">
    <title>Presentation produits</title>
   
</head>
<body>

  <header>
        <div class="logo">
            <img src="./image/logo.png" id="logo" alt="logo">
        </div>
        
        <div class="bienvenue">
            <?php 
                if(isset($_SESSION['id'])){?>
                <h2> Bonjour! Et bienvenue  <?=$_SESSION["nom"]?> <?=$_SESSION["prenom"]?> !</h2>
            <?php } ?>
        </div>

        <nav>
            <?php if(isset($_SESSION['id'])){?>
                <ul>
                    <li><a href="deconnexion.php">Se Déconnecter</a></li>
                </ul>
            <?php } else{?>
                <ul>
                    <li><a href="connexion.php">Se connecter</a></li>
                    <li><a href="creation.php">Créer un compte</a></li>
                </ul>
            <?php } ?>
        </nav>

    

  </header>

    <?php
    $sql=$pdo->prepare("SELECT*FROM produit");
    $sql->execute();
    $produits=$sql->fetchAll();?>
    
<div class="produits">
   <?php foreach($produits as $produit){?>
    <div class="produit">
        <h2 id="<?=$produit['id']?>"><?=$produit['nom_produit']?></h2>

        <img src="<?=$produit['photo']?>" alt="photo du produit">

        <p class="cache" id="p<?=$produit['id']?>"><?=$produit['description']?></p>
        <p> Prix: <?=$produit['prix']?> Euros <br>
        Stock: <?=$produit['stock']?></p>
   
        <?php if(isset($_SESSION['id'])){

            if($produit['stock'] > 0){?>
        <h2><a href="achat.php?id=<?=$produit['id']?>">Acheter</a></h2>
        <?php } else{?>
                <h2>Produit victime de son succès</h2>
        <?php }
        }
        ?>
    </div>
        <script>
            $(document).ready(function () {
                $("#" + <?=$produit['id']?>).click(function(){
                    $("#p"+<?=$produit['id']?>).toggle();
                });
            })
        </script>

    <?php }
    ?> 
    </div>
    <footer>
        <ul>
            <li><a href="#">Plan du site</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li><a href="#">Conditions générales de vente</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </footer>
 
</body>
</html>