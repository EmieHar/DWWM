<?php

function affiche_professeur() {
  // dans cette fonction le controller va chercher 
  // ce qu'il faut pour afficher les étudiants
  // 1) les données 
  // 2) l'affichage des données
  require ('model/model_professeur.php');
  // récupérer les données
  $profs = listeprofs();
  require ('view/view_listeprofs.php');
}
?>