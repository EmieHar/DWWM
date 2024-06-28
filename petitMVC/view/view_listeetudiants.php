<html>

<head>
</head>

<body>
    <h1> Voici la liste des étudiants</h1>

    <?php
    foreach ($etudiants as $et) { ?>
        <h1><?= $et['nom'] ?> <?= $et['prenom'] ?></h1>
        <h2><a href="http://localhost/developpement/petitMVC/etudiant/modifier/<?= $et['id'] ?>">Modifier</a></h2>
        <h2><a href="http://localhost/developpement/petitMVC//etudiant/dalek/<?= $et['id'] ?>">Supprimer</a></h2>
    <?php } ?>

</body>