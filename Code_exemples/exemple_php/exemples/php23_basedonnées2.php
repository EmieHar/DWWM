<?php
require 'connec_bdd.php';

$sql=$pdo->prepare("SELECT* FROM produit WHERE categorie=$_POST[id]");
$sql->execute();
$produits = $sql->fetchAll();
// print_r($produits);

foreach($produits as $produit){?>
<h1><?=$produit['nom_produit']?></h1>
<p><?=$produit['description']?></p>
<img src="<?=$produit['phto']?>">
<p>Prix Hors taxes: <?=$produit['PHT']?><br>
TVA: <?=$produit['TVA']?></p>
<?php }
?>