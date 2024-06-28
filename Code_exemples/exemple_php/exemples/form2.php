<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>

<form action="base.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Saisissez votre Nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="Saisissez votre Prénom">
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="Saisissez votre âge">
        <label for="mdp">Votre Mot de Passe</label>
        <input type="password" name="mdp" placeholder="Saisissez votre mot de passe">
        
<!-- 
        coding <input type="checkbox" name="interet[]">
        musique <input type="checkbox" name="interet[]">
        lecture <input type="checkbox" name="interet[]"> -->

        <input type="hidden" name="id" valur="12">
        <input type="submit">

    </form>
    <?php
    if (file_exists('form2.txt')){
        if(is_file('form2.txt')){
            $handler = fopen("form2.txt","r");
            while(!feof($handler)){
                $string = fgets($handler,1024);
                $result= explode(";",$string);?>

                <p>Nom: <?=$result[0]?></p>
                <p>Prénom: <?=$result[1]?></p>
                <p>Age: <?=$result[2]?></p>
                <p>Mdp: <?=$result[3]?></p>
                <hr>

           <?php }
        fclose($handler);

        }
    }
    ?>
    </body>
</html>