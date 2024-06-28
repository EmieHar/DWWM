<?php 
// Connection à la base de données
$dbname = "concession" ; // nom de la Base De Donnees
$dbhost = "127.0.0.1" ; // url de host (ou 127.0.0.1)
$dbuser = "root" ;
$password= "" ;


$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $dbuser , $password) ;
// $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs




$sql = $pdo->prepare("SELECT DISTINCT ecrivain.* FROM ecrivain, livre, editeur, ecrire WHERE editeur.nom='flammarion' AND livre.id_Editeur = editeur.id AND ecrire.id_livre = livre.id AND ecrire.id_Ecrivain= ecrivain.id");
$sql->execute();
$rows =$sql->fetchAll();




//requête pour nombre de voiture
$sql = $pdo->prepare("SELECT COUNT(*) as nbVoiture FROM voiture");
$sql->execute();
$row =$sql->fetch();
print_r($row);

//requête pour nombre de voiture par marque
$sql = $pdo->prepare("SELECT marque.nom , COUNT(*) FROM voiture, marque WHERE voiture.id_marque = marque.id GROUP BY marque.nom");
$sql->execute();
$row =$sql->fetch();
print_r($row);

// Écrire une fonction SQL qui me donne le nombre de voitures par marque et par type d’énergie
$sql = $pdo->prepare("SELECT marque.nom, energie.carburant, COUNT(*) FROM voiture, marque, energie WHERE voiture.id_marque = marque.id AND voiture.id_energie = energie.id GROUP BY energie.carburant, marque.nom ORDER BY marque.nom DESC"); //DESC true par ordre descendant
$sql->execute();
$row =$sql->fetch();
print_r($row);

// Ecrire une fonction SQL qui sélectionne les voitures ( marque , nom , boite, energie) non propulsées par essence et non automatiques. 
$sql = $pdo->prepare("SELECT marque.nom, energie.carburant, boite_vitesse.type, COUNT(*) FROM voiture, marque, energie, boite_vitesse WHERE voiture.id_marque = marque.id AND voiture.id_energie = energie.id AND energie.carburant != 'essence' AND voiture.id_boite_vitesse = boite_vitesse.id AND boite_vitesse.type != 'automatique' GROUP BY energie.carburant, marque.nom, boite_vitesse.type ORDER BY marque.nom DESC"); 
$sql->execute();
$row =$sql->fetch();
print_r($row);
?>