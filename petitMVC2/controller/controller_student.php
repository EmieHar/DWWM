<?php

function add(){
    require ('view/view_creerStudent.php');
}

function addStudent(){
    require ('model/model_student.php');
    $student = creation($_POST);
}

function afficher(){
    require ('model/model_student.php');
    $students = listStudents();
    require('view/view_studentsList.php');
}


function affiche1Student($id) {
    require ('model/model_student.php');
    $student = rechercheStudent($id);
    require('view/view_afficher1Student.php');
}


//effectue les modifications en bdd
function modifierbdd(){
    require('model/model_student.php');
    $modi = modif($_POST);
}

//fonction suppression <3 doctor who
function supprimer($id){
    require('model/model_student.php');
    dalek($id);
}
?>