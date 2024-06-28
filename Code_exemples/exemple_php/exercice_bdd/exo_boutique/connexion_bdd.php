<?php
session_start();
require 'connec_bdd3.php';

try {

    $password = $_POST["password"];
    $email = $_POST['email'];
   
   $sql1 = $pdo->prepare("SELECT client.id, client.nom, client.prenom, client.password FROM client WHERE client.email=?");
   $sql1->execute([$email]);

    if ( $sql1->rowCount() == 1) {

        
       $client= $sql1->fetch();

       if(password_verify($password, $client['password'])){ 
        
        $_SESSION["nom"] = $client['nom'];
        $_SESSION["prenom"] = $client['prenom'];
        $_SESSION['id'] = $client['id'];

           header('Location:produits.php'); 
     
        } else {
            echo "Aucun compte n'a été trouvé, veuillez en créer un ou modifier vos informations de connexion";
        }

} 
}
catch (Exception $e) {
    echo $e->getMessage();
}
