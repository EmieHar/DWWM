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
            <?php }
        ?>
    </nav>
  </header>


<?php

if(isset($_SESSION['id'])){
    

    // récupérer id du produit et quantité saisie dans page achat.php
    $produit = $_POST['id_produit'];
    $quantite = $_POST['quantite'];
        // $id_client = $_SESSION['id'];
    $date = date("Y-m-d H:i:s");

    //si aucune commande n'existe
    if(!isset($_SESSION['id_commande'])){

     // requêtes sql pour insérer dans la commande
        $sql = $pdo->prepare("INSERT INTO commande (id_client,date) VALUES (?,?)");
        $sql->execute([$_SESSION['id'],$date]);
    
        $id_commande = $pdo->lastInsertId();
        $_SESSION['id_commande'] = $id_commande ;
     
    }

    // insert dans panier
        $sql2 = $pdo->prepare("INSERT INTO panier (id_commande,id_produit,quantite) VALUES (?,?,?)");
        $sql2->execute([$_SESSION['id_commande'],$produit,$quantite]);

    //Afficher récap panier dans panier.php + bouton commander
        $sql3=$pdo->prepare("SELECT panier.quantite, produit.stock, produit.nom_produit, produit.photo, produit.id, produit.TVA, produit.prix FROM panier,produit WHERE panier.id_produit = produit.id AND panier.id_commande = '$_SESSION[id_commande]'  ");
        $sql3->execute();
        $infos=$sql3->fetchAll();

        ?>

        <h1>Votre panier:</h1>
        <h3>Numéro de commande : <?=$_SESSION['id_commande']?></h3>
        
        <?php foreach($infos as $info){
            // $_SESSION['stock']=$info['stock'];
            // $_SESSION['nom-produit']= $info['nom_produit'];
            // $_SESSION['prix']= $info['prix'];
            // $_SESSION['TVA']= $info['TVA'];
            // $_SESSION['quantite']=$info['quantite'];
            $prix= ($info['quantite']* $info['prix']);
            $_SESSION['prix_total'] += $prix; 
            $_SESSION['TVA_total'] = ($info['TVA']/100)*$_SESSION['prix_total'];

            ?>
            
        
        <h2>Nom du produit:  <?=$info['nom-produit'] ?></h2>
        <h3>Quantité: <?=$info['quantite'] ?><br>Prix à l'unité: <?=$info['prix'] ?> Euros<br>TVA : <?=$info['TVA']?>% </h3>
        <h3>Montant à régler: <?=$prix?> Euros</h3>
        
        <hr>

       <?php } ?>

    <h2>Montant total du panier: <?=$_SESSION['prix_total']?> Euros</h2>
    <h3>Dont TVA : <?=$_SESSION['TVA_total']?> Euros </h3>
    <!-- <h2><a href="commande.php">Passer commande</a></h2> -->
    <hr>
    <h2><a href="produits.php">Continuer mes achats</a></h2>

<?php }       
            $nouveau_stock = $info['stock'] - $info['quantite'];
            $sql=$pdo->prepare("UPDATE produit SET stock= '$nouveau_stock' WHERE produit.id = $info[id]");
            $sql->execute();
  ?>

</body>
</html>