<?php require('header.php'); ?>
<html>

<head>
</head>

<body>
    <h1> Autre(s) cours disponible(s) </h1>
    <hr>
    <?php
    $coursSuivis = [];
    ?>

    <h2>Vous etes actuellement inscrit au(x) cours suivant(s): </h2>
    <?php foreach ($inscrits as $inscrit) {

        array_push($coursSuivis, $inscrit['id_course']); ?>


        <h3><?= $inscrit["titre"] ?> (<?= $inscrit["code"] ?>)</h3>
    <?php } ?>

    <h2>Inscription(s) encore possible: </h2>
    <form action="<?= _BASE ?>/inscription/updateBdd" method="POST">
    
        <?php foreach ($courses as $cours) {

            if (!in_array($cours['id'], $coursSuivis)) { ?>
            

                <input type="checkbox" name="id_course[]" value="<?= $cours['id'] ?>">
                <label for="id_course"><?= $cours['titre'] ?></label>
                
            <?php  } 
        } ?>
                <input type="hidden" name="id_student" value="<?= $student['id'] ?>">
                <br><input type="submit" value="Valider">
            </form>
  


    <hr>


</body>