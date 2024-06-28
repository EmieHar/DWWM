<?php
 require 'connec_bdd.php';
    try{
      
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $id=$_POST["id"];

        $sql = $pdo->prepare("UPDATE user SET nom='$nom', prenom='$prenom', age='$age',email='$email' WHERE id='$id'");
        $sql->execute();
        
        }
        
    catch(Exception $e){
        echo $e->getMessage();
    }
?>