<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>
</head>

<body>
    <h1> Modifier l' étudiant <?= $etudiant['id'] ?></h1>

    <form action="http://localhost/developpement/petitMVC/etudiant/modifierbdd/<?= $etudiant['id'] ?>" method="POST">
        <input type="text" name="nom" value="<?= $etudiant['nom'] ?>" required><br>
        <input type="text" name="prenom" value="<?= $etudiant['prenom'] ?>" required><br>
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <input type="submit" value="Enregister">
    </form>
</body> 