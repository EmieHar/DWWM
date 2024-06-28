<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin: 10px 0 10px 10px;
        }
    </style>
</head>
<body>
    <form action="base.php" method="get"><!--méthode Get passe par url donc est limitée en taille (nb caractères), 
    pas trop recommandée pour formaulaire car tout est visible dans l'url-->
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Saisissez votre Nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="Saisissez votre Prénom">
        <label for="age">Age</label>
        <input type="text" name="age" placeholder="Saisissez votre âge">
        <input type="submit">
    </form> 
    <hr>
    <form action="base.php" method="post"><!--méthode post ne passe pas par url donc n' est limitée en taille (nb caractères)
valeurs sont récupérées par php dans un tableau-->
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Saisissez votre Nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="Saisissez votre Prénom">
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="Saisissez votre âge">
        <label for="mdp">Votre Mot de Passe</label>
        <input type="password" name="mdp" placeholder="Saisissez votre mot de passe">
        <input type="submit">
    </form> 
</body>
</html>