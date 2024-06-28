<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>

<body>
    <?php
    require 'connec_bdd2.php';
    try {
    $id=$_GET['id'];

    $sql=$pdo->prepare("SELECT etudiant.id, etudiant.nom, etudiant.prenom, etudiant.email, etudiant.password, specialite.nom_spec, specialite.id as idspec FROM etudiant, specialite WHERE etudiant.id_specialite=specialite.id AND etudiant.id='$id'");
    $sql->execute();
    $row = $sql->fetch();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <form action="modif_password_bdd.php" method="post">
        <label for="password">Votre Mot de Passe</label>
        <input type="text" name="password" placeholder="Nouveau Mot de Passe">
        

        <input type="submit">
    </form>
</body>

</html>