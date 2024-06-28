<?php
    print_r($_POST) ;


require 'connec_bdd.php';


$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];
$email=$_POST["email"];

$sql= $pdo->prepare("INSERT INTO user (nom,prenom,age,email) VALUES (?,?,?,?)");
$sql->execute([$nom,$prenom,$age,$email]);


?>
