<?php
require 'connec_bdd.php';

try{//try et catch permettent de sécuriser le développement, 
    // catch permet d'afficher un message d'erreur plus complet

$sql = $pdo->prepare("SELECT * FROM user");
$sql->execute();
}

catch(Exception $e){
    echo $e->getMessage();
}


$rows = $sql->fetchAll();//affiche chaque ligne de la table user
echo"<pre>";
print_r($rows);
echo"</pre>";

echo"<hr>";
try{

$sql = $pdo->prepare("SELECT * FROM user WHERE id=1");
$sql->execute();

}

catch(Exception $e){
    echo $e->getMessage();
}

$row = $sql->fetch();//va chercher la ligne(donc l'utilisateur) de la table user qui a l'id 1
print_r($row);

?>