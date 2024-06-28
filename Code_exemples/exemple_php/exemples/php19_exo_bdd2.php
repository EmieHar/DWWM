<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'connec_bdd.php';
    try{

        $sql = $pdo->prepare("SELECT * FROM user WHERE id=$_GET[id]");
        $sql->execute();
        
        }
        
    catch(Exception $e){
        echo $e->getMessage();
    }
    $row = $sql->fetch();

    // $sql->rowCount(); // donne le nbre de lignes retournées

    ?>
    <form action="modif.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" value="<?=$row["nom"]?>" placeholder="Saisissez votre Nom">

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" value="<?=$row["prenom"]?>" placeholder="Saisissez votre Prénom">

        <label for="age">Age</label>
        <input type="number" name="age" value="<?=$row["age"]?>" placeholder="Saisissez votre âge">

        <label for="email">Votre Email</label>
        <input type="text" name="email" value="<?=$row["email"]?>" placeholder="Saisissez votre email">

        <label for="password">Votre Mot de Passe</label>
        <input type="text" name="password" placeholder="Saisissez votre nouveau Mot de passe">

        <input type="hidden" name="id" value="<?=$_GET['id']?>">

        <input type="submit">
    </form>
</body>
</html>