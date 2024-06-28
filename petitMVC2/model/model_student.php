<?php

function creation($student){
    require('model_connectStudent.php');
    $sql = $pdo->prepare("INSERT INTO student (name, firstname, email, password) VALUES (?,?,?,?)");
    $sql->execute([$student['name'], $student['firstname'], $student['email'], $student['password']]);
}

function listStudents(){
    require ('model_connectStudent.php');
    $sql = $pdo->prepare( 'SELECT * from student ORDER BY name');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

function rechercheStudent($id) {
    require ('model_connectStudent.php');
    $sql = $pdo->prepare( 'SELECT * from student WHERE id = ?');
    $sql->execute([$id]);
    $row = $sql->fetch();
    return $row ;
}

function modif($modi){
    require ('model_connectStudent.php');
    $id = $modi['id_student'];
    $sql = $pdo->prepare("UPDATE student SET student.name=?, student.firstname=?, student.email=?, student.password=? WHERE student.id= $id");
    $sql->execute([$modi['name'], $modi['firstname'],$modi['email'],$modi['password']]);
}

function dalek($id){
    require('model_connectStudent.php');
    $sql = $pdo->prepare("DELETE FROM student WHERE student.id = ?");
    $sql->execute([$id]);
}

?>