<?php
require 'connec_bdd2.php';

try{

    $sql=$pdo->prepare("SELECT etudiant.nom, etudiant.prenom, etudiant.email, specialite.nom_spec FROM etudiant,specialite WHERE etudiant.id=specialite.id");
    $sql->execute();
    $etudiants=$sql->fetchAll();

    foreach ($etudiants as $etudiant){?>
    <h2>Nom: <?=$etudiant['nom']?></h2> 
    <h2>Prénom: <?=$etudiant['prenom']?></h2> 
    <h3>Email: <?=$etudiant['email']?></h3>
    <h3>Spécialité: <?=$etudiant['nom_spec']?></h3>
    <hr>
   <?php }

} catch (Exception $e) {
    echo $e->getMessage();
}

?>