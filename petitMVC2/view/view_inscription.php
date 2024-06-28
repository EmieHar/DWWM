<?php require('header.php'); ?>
<html>

<head>
</head>

<body>
    <h1> Inscription aux cours </h1>
    <hr>

    <form action="<?= _BASE ?>/inscription/addCours" method="POST">

        <?php foreach ($courses as $cs) { ?>
            <input type="checkbox" name="id_course[]" value="<?= $cs['id'] ?>">
            <label for="id_course"><?= $cs['titre'] ?></label>
        <?php  } 
        ?>
        <input type="hidden" name="id_student" value="<?= $student['id'] ?>">
        <input type="submit" value="Valider">
    </form>
    <hr>


</body>

