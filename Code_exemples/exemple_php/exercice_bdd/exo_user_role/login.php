<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte </title>
</head>

<body>
    <form action="client.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="saisissez votre Nom" required>

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="saisissez votre Prénom" required>

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="saisissez votre Email" required>

        <label for="password">Mot de passe</label>
        <input type="text" name="password" placeholder="saisissez votre Mot de Passe">

        <label for="role">Rôle</label>
        <select name="idRole">
            <?php
            require 'connec_bdd2.php';
            $sql = $pdo->prepare("SELECT*FROM role");
            $sql->execute();
            $roles = $sql->fetchAll();
            foreach ($roles as $role) { ?>
                <option value="<?= $role['id'] ?>"><?= $role['nomRole'] ?></option>
            <?php } ?>
            <!-- <option value="1">Admin</option>
            <option value="2">Visiteur</option>
            <option value="3">Tech</option>            
            <option value="4">Utilisateur</option> -->
        </select>

        <input type="submit" value="Soumettre">
    </form>
</body>

</html>