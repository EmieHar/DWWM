<?php
require 'connec_bdd2.php';

try {

    $sql = $pdo->prepare("SELECT etudiant.id, etudiant.nom, etudiant.prenom, etudiant.email, etudiant.password, specialite.nom_spec, specialite.id as idspec FROM etudiant, specialite WHERE etudiant.id_specialite=specialite.id ");
    $sql->execute();
    $etudiants = $sql->fetchAll();

    foreach ($etudiants as $etudiant) { ?>
        <h2>Nom: <?= $etudiant['nom'] ?> <a href="modif_nom.php?id=<?= $etudiant['id'] ?>">Modifier</a></h2>
        <h2>Prénom: <?= $etudiant['prenom'] ?> <a href="modif_prenom.php?id=<?= $etudiant['id'] ?>">Modifier</a></h2>
        <h3>Email: <?= $etudiant['email'] ?> <a href=" modif_email.php?id=<?= $etudiant['id'] ?>">Modifier</a></h3>
        <h3>Spécialité: <?= $etudiant['nom_spec'] ?> <a href="modif_specialite.php?id=<?= $etudiant['id'] ?>">Modifier</a></h3>
        <h3>Mot de Passe: <?= $etudiant['password'] ?> <a href="modif_password.php?id=<?= $etudiant['id'] ?>">Modifier</a></h3>
        <h2><a href="modif.php?id=<?= $etudiant['id'] ?>">Tout Modifier</a></h2>
        <hr>
<?php }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>