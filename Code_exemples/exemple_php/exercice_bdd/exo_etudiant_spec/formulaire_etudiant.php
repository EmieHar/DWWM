<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de fiche étudiant </title>
</head>

<body>
    <form action="formulaire_etudiant_bdd.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="saisissez le Nom" required>

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="saisissez le Prénom" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="saisissez l'Email" required>

        <label for="password">Mot de passe</label>
        <input type="text" name="password" placeholder="saisissez le Mot de Passe">

        <label for="id_specialite">Spécialité</label>
        <select name="id_specialite">
            <?php 
            require 'connec_bdd2.php';
            $sql=$pdo->prepare("SELECT*FROM specialite");
            $sql->execute();
            $specialites=$sql->fetchAll();
            foreach($specialites as $specialite){?>
            <option value="<?=$specialite['id']?>"><?=$specialite['nom_spec']?></option>
           <?php }?>
        </select>

        <input type="submit" value="Créer une fiche étudiant">
    </form>
</body>

</html>