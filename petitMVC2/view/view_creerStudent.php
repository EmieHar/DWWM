<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création étudiant</title>
</head>

<body>

    <!-- appelé par controller_student, fonction add -->
    <!-- controller_student, fonction addStudent fera appel: model_student, fonction creation -->

    <form action="<?= _BASE ?>/student/addStudent" method="POST">
        <input type="text" name="name" placeholder="nom"><br>
        <input type="text" name="firstname" placeholder="prenom"><br>
        <input type="email" name="email" placeholder="adresse@efgrd.com"><br>
        <input type="password" name="password" placeholder="Mot de passe"><br>
        <input type="submit" value="Créer">
    </form>
</body>

</html>