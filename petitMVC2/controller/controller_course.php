<?php

function record(){
    require('view/view_creerCourse.php');
}

function recordCourse(){
    require ('model/model_course.php');
    $course = courses($_POST);
}

function afficherCourse(){
    require ('model/model_course.php');
    $courses = listCourses();
    require ('view/view_coursesList.php');
}

?>