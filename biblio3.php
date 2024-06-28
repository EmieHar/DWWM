
<?php 
// Connection à la base de données
$dbname = "biblio3" ; // nom de la Base De Donnees
$dbhost = "127.0.0.1" ; // url de host (ou 127.0.0.1)
$dbuser = "root" ;
$password= "" ;


$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $dbuser , $password) ;
// $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs

?>

<?php
$sql = $pdo->prepare("SELECT DISTINCT ecrivain.* FROM ecrivain, livre, editeur, ecrire WHERE editeur.nom='flammarion' AND livre.id_Editeur = editeur.id AND ecrire.id_livre = livre.id AND ecrire.id_Ecrivain= ecrivain.id");
$sql->execute();
$rows =$sql->fetchAll();

?>

<h1>Aux éditions flammarion</h1>
<hr>
<?php 
foreach($rows as $row){
   $auteur= $row['id'];
?>

<h1>Auteur: <?=$row['nom']?> <?=$row['prenom']?></h1>
<h2></h2>
<hr>

<?php $sql2 = $pdo->prepare("SELECT livre.titre, livre.isbn FROM ecrivain, livre, ecrire WHERE  ecrire.id_livre = livre.id AND ecrire.id_Ecrivain= ecrivain.id AND ecrivain.id= $auteur");
$sql2->execute();
$livres = $sql2->fetchAll();

foreach($livres as $livre){?>
    <h2><?=$livre['titre']?></h2>
    <h3><?=$livre['isbn']?></h3>
    <hr>


 <?php }
 
}?>




<hr>
<?php
$sql = $pdo->prepare("SELECT livre.*, ecrivain.* FROM ecrivain, livre, ecrire WHERE ecrivain.nom='Dumas' AND ecrire.id_livre = livre.id AND ecrire.id_Ecrivain= ecrivain.id");
$sql->execute();
$rows =$sql->fetchAll();?>
<h1>Dumas Alexandre</h1>
<hr>
<?php 
foreach($rows as $row){?>
<h2><?=$row['titre']?></h2>
<h3><?=$row['isbn']?></h3>
<hr>

<?php }
?>