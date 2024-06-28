<?php

function affiche_etudiants() {
  // dans cette fonction le controller va chercher 
  // ce qu'il faut pour afficher les étudiants
  // 1) les données 
  // 2) l'affichage des données
  require ('model/model_etudiant.php');
  // récupérer les données
  $etudiants = listeEtudiants();
  require ('view/view_listeetudiants.php');
}

function affiche1etudiant($id) {
    require ('model/model_etudiant.php');
    $etudiant = rechercheEtudiant($id);
    require('view/view_affiche1etudiant.php');
}

function creer(){
    require ('view/view_creeretudiant.php');
}

function enregistrer() {
    require('model/model_etudiant.php');
    $elts= menregistrer($_POST);
}

// affiche le formulaire de modification
function modifier($id){
    require('model/model_etudiant.php');
    $etudiant = rechercheEtudiant($id);
    require('view/view_modifier.php');
}

//effectue les modifications en bdd
function modifierbdd(){
    require('model/model_etudiant.php');
    $modi = modif($_POST);
}

//fonction suppression ref doctor who
function dalek(){
    require('model/model_etudiant.php');
    $extermination = suppression($_GET);
}
?>