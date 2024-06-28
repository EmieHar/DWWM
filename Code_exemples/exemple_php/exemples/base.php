<?php

// print_r($_POST);
// foreach($_GET as $cle => $var){
//     $_GET[$cle] = htmlspecialchars($var);
// }
// echo "<hr>Bonjour, je suis ".$_GET["nom"]." ".$_GET["prenom"]." et j'ai ".$_GET["age"]." ans.";

foreach($_POST as $cle => $var){
    $_POST[$cle] = htmlspecialchars($var);
}
echo "<hr>Bonjour, je suis ".$_POST["nom"]." ".$_POST["prenom"]." et j'ai ".$_POST["age"]." ans.";

if (file_exists('form2.txt')){

    if(is_file('form2.txt')){

    $handler = fopen("form2.txt","a+");

    fwrite($handler,$_POST["nom"].";". $_POST["prenom"].";". $_POST["age"].";". $_POST["mdp"]."\n");

    header('location:form2.php');
    }
}
?>