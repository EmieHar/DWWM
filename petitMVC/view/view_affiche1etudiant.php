<html>

<head>
</head>

<body>
    <h1> Voici l' étudiant <?= $etudiant['id'] ?></h1>

    <h1><?= $etudiant['nom'] ?> <?= $etudiant['prenom'] ?></h1>
    <h2><a href="http://localhost/developpement/petitMVC/index.php?controller=etudiant&action=modifier&argument1=<?= $etudiant['id'] ?>">Modifier</a></h2>


</body>

</html>