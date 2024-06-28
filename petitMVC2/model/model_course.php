<?php


function courses($course){
    require('model_connectStudent.php');
    $sql = $pdo->prepare("INSERT INTO course (code, titre, langage) VALUES (?,?,?)");
    $sql->execute([$course['code'], $course['titre'], $course['langage']]);
}

function listCourses(){
    require ('model_connectStudent.php');
    $sql = $pdo->prepare( 'SELECT * from course');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}
?>
