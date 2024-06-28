<?php


function listeEtudiants(){
    require 'model_connect.php';
    $sql = $pdo->prepare( 'SELECT * from etudiant');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

function rechercheEtudiant($id) {
    require 'model_connect.php';
    $sql = $pdo->prepare( 'SELECT * from etudiant WHERE id = ?');
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row ;
}

function menregistrer($elts) {
    print_r($elts);
    require 'model_connect.php';
    $sql = $pdo->prepare( 'INSERT into etudiant (nom,prenom) VALUES (?, ?)');
    $sql->execute([$elts['nom'],$elts['prenom']]);
}

function modif($modi){
    require 'model_connect.php';
    $id = $_POST['id'];
    $sql = $pdo->prepare("UPDATE etudiant SET etudiant.nom=?, etudiant.prenom=? WHERE etudiant.id=$id");
    $sql->execute([$modi['nom'], $modi['prenom']]);
}

function suppression($extermination){
    require 'model_connect.php';
    $id=$_GET['argument1'];
    $sql=$pdo->prepare("DELETE FROM etudiant WHERE etudiant.id=$id");
    $sql->execute();
}
?>