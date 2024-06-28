<?php

function add($id){
    require ('model/model_student.php');
    $student = rechercheStudent($id);
    require ('model/model_course.php');
    $courses = listCourses();
    require ('view/view_inscription.php');
}

function addCours(){
    require ('model/model_inscription.php');
    $inscript = inscription($_POST);
}

function afficherCours($id) {
    require ('model/model_inscription.php');
    $cours = rechercheCours($id);
    require('model/model_student.php');
    $student = rechercheStudent($id);
    require('view/view_coursSuivi.php');
}

function afficherStudent($id){
    require ('model/model_inscription.php');
    $students = listeStudents($id);
    require('view/view_studentSuivi.php');
}

function update($id){
    require('model/model_inscription.php');
    $inscrits = inscriptionCours($id);
    require('model/model_course.php');
    $courses = listCourses();
    require('model/model_student.php');
    $student = rechercheStudent($id);
    require('view/view_inscription2.php');
}

function updateBdd(){
    require('model/model_inscription.php');
    $maj = majBdd($_POST);
}
?>