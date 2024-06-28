<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture fichier</title>
</head>
<body>
    <?php
    if (file_exists('texte.txt')){//fonction php vérifiant que le fichier existe bien sur le disque

        if(is_file('texte.txt')){//fonction php pour vérifier que le fichier .txt est bien du texte et non un répertoire

    // $handler = fopen("texte.txt","r");//ouverture du fichier texte en lecture seule
    // echo fread($handler, filesize('texte.txt'));

    $handler = fopen("texte.txt","a+");//permet de lire et ecrire le fichier

    // $handler = fopen("texte.txt","w"); //écrase le fichier
    echo "<hr>";

    // echo fgets($handler,1024);//récupère la ligne
    // echo "<br>";
    // echo fgets($handler,1024);

    echo "<hr>";

     // fgetc lit caractères par caractères

    // while(!feof($handler)){//tant qu'il n'est pas arrivé à la fin du fichier, faire
    //     echo fgets($handler,1024);
    //     echo "<br>";
    // }
    echo "<hr>";

    fwrite($handler,"un texte supplémentaire\n ");//à chaque rechargement écrit dans le fichier cible

    fclose($handler);

    }
  }
    ?>
</body>
</html>