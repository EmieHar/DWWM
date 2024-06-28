<?php require('header.php'); ?>
<html>

<head>
</head>

<body>
    <!-- ancre Modifier amène sur controller_student, fonction affiche1student -->
    <!-- appelé par controller_student, fonction affiche1Student -->
    <!-- fera appel: model_student, fonction rechercheStudent -->

    <h1> Voici l' étudiant <?= $student['id'] ?></h1>

    <h1><?= $student['name'] ?> <?= $student['firstname'] ?></h1>
    <form action="<?= _BASE ?>/student/modifierbdd" method="POST">
        <input type="text" name="name" value="<?= $student['name'] ?>" required><br>
        <input type="text" name="firstname" value="<?= $student['firstname'] ?>" required><br>
        <input type="hidden" name="id_student" value="<?= $student['id'] ?>">
        <input type="email" name="email" value="<?= $student['email'] ?>"><br>
        <input type="password" name="password" value="<?= $student['password'] ?>"><br>
        <input type="submit" value="Modifier">
    </form>
    <h2><a href="<?= _BASE ?>/inscription/add/<?= $student['id'] ?>">Inscription cours</a></h2>


</body>

</html>