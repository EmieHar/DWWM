<?php
require 'connec_bdd2.php';

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['password'];
$id=$_POST['id_specialite'];

try{
$sql = $pdo->prepare("SELECT * FROM etudiant WHERE email='$email'");
$sql->execute();
$cpt =  $sql->rowCount();

if($cpt==0){
    $hp = password_hash($password,PASSWORD_DEFAULT);
    $sql=$pdo->prepare("INSERT INTO etudiant (nom,prenom,email,password,id_specialite)VALUES(?,?,?,?,?)");
    $sql->execute([$nom,$prenom,$email,$hp,$id]);
    $sql2=$pdo->prepare("SELECT specialite.nom_spec FROM specialite WHERE specialite.id='$id'");
    $sql2->execute();
    $specialite=$sql2->fetch();?>
<h2>La fiche de <?=$nom?> <?=$prenom?> a été crée</h2>
<p>Spécialité: <?=$specialite['nom_spec']?></p>
<p>Email: <?=$email?></p>

<?php } else{
    echo "Cette fiche existe déjà";
    } 
} 

catch (Exception $e) {
    echo $e->getMessage();
}

?>