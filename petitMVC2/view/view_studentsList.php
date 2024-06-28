<?php require('header.php'); ?>
<html>

<head>
</head>

<body>
    <h1> Voici la liste des étudiants</h1>
    <hr>

    <!-- appelé par controller_student, fonction afficher -->
    <!-- controller_student, fonction afficher fera appel: model_student, fonction listStudents -->

    <!-- ancre Modifier appelle: controller_student, fonction affiche1Student -->
    <?php
    foreach ($students as $st) { ?>
        <h1><?= $st['name'] ?> <?= $st['firstname'] ?></h1>
        <h2>email: <?= $st['email'] ?> </h2>
        <h2><a href="<?= _BASE ?>/student/affiche1Student/<?= $st['id'] ?>">Modifier</a> | <a href="<?= _BASE ?>/inscription/afficherCours/<?= $st['id'] ?>">Cours suivi</a> | <a href="<?= _BASE ?>/student/supprimer/<?= $st['id'] ?>">Supprimer</a></h2>
        <hr>


    <?php } ?>

</body>