<?php
session_start();//obligatoire en première ligne pour pourvoir utiliser les sessions
require 'connec_bdd2.php';

try {

    $password = $_POST["password"];
    $email = $_POST['email'];
   
   $sql1 = $pdo->prepare("SELECT user.nom, user.prenom, user.password, role.nomRole FROM user, role WHERE user.idRole = role.id AND user.email=?");
   $sql1->execute([$email]);

    if ( $sql1->rowCount() == 1) {

        
       $user= $sql1->fetch();
       if(password_verify($password, $user['password'])){ ?>

            <h2> Bonjour et bienvenue  <?=$user['nom']?> <?=$user['prenom']?> !</h2>
            <h3>Rôle: <?=$user['nomRole']?></h3>

    <?php

        // setcookie("nom",$user['nom']);
        // setcookie("prenom",$user['prenom']);
        // setcookie("role",$user['nomRole']);

        // $_SESSION["nom"] = $user['nom'];//tableau côté serveur
        // $_SESSION["prenom"] = $user['prenom'];
        // $_SESSION["role"] = $user['nomRole'];



            if ( $user['nomRole'] == 'Technicien'){?>
                <a href="listeEtudiant_modif.php">Liste des étudiants</a>
                <a href="formulaire_etudiant.php">Créer une fiche étudiant</a>
                <a href="">Supprimer la fiche</a>
                <a href="">Supprimer toutes les fiches</a>
                <a href="autrePage.php">Autre page</a>
                
            <?php } else if($user['nomRole']=='Directeur'|| $user['nomRole'] =='Recrutement'){?>
                <a href="listeEtudiant_modif.php">Liste des étudiants</a>
                <a href="formulaire_etudiant.php">Créer une fiche étudiant</a>

           <?php } else if($user['nomRole'] == 'Professeur' || $user['nomRole'] == 'Secretaire'){?>
                <a href="listeEtudiant.php">Liste des étudiants</a>

            <?php } else if($user['nomRole'] == 'Etudiant'){ ?>
                <a href="modif_password.php">Changer votre Mot de Passe</a>
                <a href="modif.php">Modifier vos informations personelles</a>

           <?php } else{?>
            <h2>Pas de compte trouvé</h2>
          <?php }
        }  
    
    } else {
        echo "Aucun compte n'a été trouvé, veuillez en créer un ou modifier vos informations de connexion";
    }

} 

catch (Exception $e) {
    echo $e->getMessage();
}
