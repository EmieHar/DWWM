<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression fichier</title>
</head>
<body>
    <?php 
        //supprimer un fichier
      if(  unlink("texte.txt")){
        echo "Le fichier texte.txt a bien été supprimé.";
      }else{
        echo "Le fichier n'a pas été supprimé.";
      }
    ?>
</body>
</html>