<?php require('header.php'); ?>
<html>

<head>
</head>

<body>
    <h1> Cet étudiant.e est inscrit.e </h1>
    <hr>
    <?php
    foreach ($cours as $cour) { ?>
        <h1><?= $cour['titre'] ?></h1>
        <h2>code: <?= $cour['code'] ?></h2>
        <h2>Langue: <?= $cour['langage'] ?></h2>
        <hr>

    <?php } ?>
    <h2><a href="<?= _BASE ?>/inscription/update/<?= $student['id'] ?>">Inscription à d'autre cours</a></h2>

</body>