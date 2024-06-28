<?php
require 'connec_bdd2.php';
 
try{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST["password"];
    $email = $_POST['email'];
    $role = $_POST['idRole'];

    $sql = $pdo->prepare("SELECT * FROM user WHERE email='$email'");
    $sql->execute();
    $cpt =  $sql->rowCount();

    if($cpt==0){
    $hp = password_hash($password,PASSWORD_DEFAULT);
    $sql=$pdo ->prepare("INSERT INTO user (email,password,nom,prenom,idRole) VALUES (?,?,?,?,?)");
    $sql ->execute([$email,$hp,$nom,$prenom,$role]);

  
    print_r("Merci ".$nom." ".$prenom.". Votre compte à bien été créé."); 
    }  else{
        echo "Cette adresse email est déjà utilisée.";
    }    
    }
        
 catch(Exception $e){
    echo $e->getMessage();
    }
  


?>