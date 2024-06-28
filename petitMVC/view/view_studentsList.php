<html>

<head>
</head>

<body>
    <h1> Voici la liste des étudiants</h1>

    <?php
    foreach ($students as $st) { ?>
        <h1><?= $st['name'] ?> <?= $st['firstname'] ?></h1>
        <h2>email: <?= $st['email'] ?> </h2>
        <!-- <h2><a href="http://localhost/developpement/petitMVC/etudiant/modifier/<?= $st['id'] ?>">Modifier</a></h2>
        <h2><a href="http://localhost/developpement/petitMVC//etudiant/dalek/<?= $st['id'] ?>">Supprimer</a></h2> -->
    <?php } ?>

</body>