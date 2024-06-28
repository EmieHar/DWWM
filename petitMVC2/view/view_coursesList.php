<?php require ('header.php'); ?>
<html>

<head>
</head>

<body>
    <h1> Voici la liste des Cours</h1>
    <hr>
    <?php
    foreach ($courses as $cs) { ?>
        <h1><?= $cs['titre'] ?></h1>
        <h2>Langue du cours: <?= $cs['langage'] ?></h2>
        <h2>code: <?= $cs['code'] ?> </h2>
        <h2><a href="<?= _BASE ?>/inscription/afficherStudent/<?= $cs['id'] ?>">Elèves inscrits</a></h2>
        <hr>
       
    <?php } ?>

</body>