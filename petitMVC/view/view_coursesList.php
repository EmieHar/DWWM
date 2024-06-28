<html>

<head>
</head>

<body>
    <h1> Voici la liste des Cours</h1>

    <?php
    foreach ($courses as $cs) { ?>
        <h1><?= $cs['titre'] ?> <?= $cs['langage'] ?></h1>
        <h2>code: <?= $cs['code'] ?> </h2>
        <!-- <h2><a href="http://localhost/developpement/petitMVC/etudiant/modifier/<?= $st['id'] ?>">Modifier</a></h2>
        <h2><a href="http://localhost/developpement/petitMVC//etudiant/dalek/<?= $st['id'] ?>">Supprimer</a></h2> -->
    <?php } ?>

</body>