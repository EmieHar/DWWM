<?php
session_start();
require 'connec_bdd3.php';

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['password'];

try{
$sql = $pdo->prepare("SELECT * FROM client WHERE email='$email'");
$sql->execute();
$cpt =  $sql->rowCount();

if($cpt==0){
    $hp = password_hash($password,PASSWORD_DEFAULT);
    $sql=$pdo->prepare("INSERT INTO client (nom,prenom,email,password)VALUES(?,?,?,?)");
    $sql->execute([$nom,$prenom,$email,$hp]);

    $sql2=$pdo->prepare("SELECT * FROM client WHERE email='$email'");
    $sql2->execute();
    $client=$sql2->fetch();
    
    $_SESSION["nom"] = $client['nom'];
    $_SESSION["prenom"] = $client['prenom'];
    $_SESSION['id']=$client['id'];
    ?>
<h2>Bienvenue <?=$_SESSION["nom"]?> <?=$_SESSION["prenom"]?></h2>
<p>Votre compte a été créé.</p>
<a href="produits.php">Retour vers la boutique</a>

<?php } else{
    echo "Cette fiche existe déjà";
    } 
} 

catch (Exception $e) {
    echo $e->getMessage();
}

?>