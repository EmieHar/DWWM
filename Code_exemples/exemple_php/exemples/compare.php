<?php
    require 'connec_bdd.php';

    try{
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql=$pdo->prepare("SELECT * FROM user WHERE email='$email' AND password='$password'");
        $sql->execute();

       $pass = $sql -> fetch();
     
    $cpt=  $sql->rowCount(); // donne le nbre de lignes retournées
       if($cpt > 0 ){
        print_r($pass);
        echo "<hr>";
        echo "Bienvenue à toi, cher ".$prenom." ".$nom."!, je suis heureuse de ton retour.";
       }else{
        echo "Le mot de passe ne correspond à l'adresse mail saisie";
       }
    }

    catch(Exception $e){
        echo $e->getMessage();
    }