<?php
declare (strict_types=1);// déclare une variable globale pour protéger/encadrer le reste des codes php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux associatifsS</title>
</head>
<body>

    <?php
     $ageetudiants = ["Mathilde"=> 27, "Popol"=> 42, "Alphonse"=> 20];

     require_once 'debug.php';
     debug($ageetudiants);

     $mailetudiants["Mathilde"]="mathilde@mail.com";
     $mailetudiants["Popol"]="popol@mail.com";
     $mailetudiants["Alphonse"]="phonse@mail.com";
     $mailetudiants["Tchoupi"]="tchoutchou@mail.com";
     debug($mailetudiants);

     foreach($mailetudiants as $cle => $valeur){
    ?><!--sort du php-->
        <h1><?php echo $cle; ?><!--réutilise php puis repasse en html--></h1>
        <p><?= $valeur; ?><!--racourci--></p>
        <hr>
        <?php }; ?><!--fracturer permet d'éviter le bug avec bcp de echo, c'est utile si bcp de html-->

</body>
</html>