<?php

require 'connec_bdd2.php';

try {

    $password = $_POST["password"];
    $email = $_POST['email'];
   
   $sql1 = $pdo->prepare("SELECT user.nom, user.prenom, user.password, role.nomRole FROM user, role WHERE user.idRole = role.id AND user.email=?");
   $sql1->execute([$email]);

    if ( $sql1->rowCount() == 1) {

        
       $user= $sql1->fetch();
       if(password_verify($password, $user['password'])){ 

         print_r("<h2> Bonjour et bienvenue " .$user['nomRole']." ".$user['nom']." " .$user['prenom']." !</h2>");
     }
    
       

     } else {
        echo "Aucun compte n'a été trouvé, veuillez en créer un ou modifier vos informations de connexion";
    }

} 

catch (Exception $e) {
    echo $e->getMessage();
}

?>