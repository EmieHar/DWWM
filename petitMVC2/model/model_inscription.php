<?php
 function inscription($inscript){
    require('model_connectStudent.php');
   //  print_r($_POST['id_course']);
   //  print_r($_POST['id_student']);
   $id_course= $inscript['id_course'];
    foreach($id_course as $idc){
      $sql = $pdo->prepare("INSERT INTO inscription (id_student,id_course) VALUES (?,?)");
      $sql->execute([$inscript['id_student'],$idc]);
    }
    
 }

 function rechercheCours($id){
   require ('model_connectStudent.php');
   $sql = $pdo->prepare( 'SELECT course.* FROM student, course, inscription WHERE student.id = ? AND student.id = inscription.id_student AND course.id = inscription.id_course');
   $sql->execute([$id]);
   $rows = $sql->fetchAll();
   return $rows ; 
 }

 function listeStudents($id){
   require ('model_connectStudent.php');
   $sql = $pdo->prepare( 'SELECT student.name, student.firstname, student.email, course.titre FROM student, course, inscription WHERE  student.id = inscription.id_student AND course.id = inscription.id_course AND course.id = ?');
   $sql->execute([$id]);
   $rows = $sql->fetchAll();
   return $rows ; 
 }

 function inscriptionCours($id){
  require('model_connectStudent.php');
  $sql = $pdo->prepare('SELECT inscription.*, course.* FROM course, inscription, student WHERE  student.id = inscription.id_student AND course.id = inscription.id_course AND student.id = ?');
  $sql->execute([$id]);
  $rows = $sql->fetchAll();
  return $rows; 
 }

 function majBdd($maj){
  require('model_connectStudent.php');
  $id = $maj['id_student'];
  $id_course = $maj['id_course'];
  foreach ($id_course as $idc) {
    $sql = $pdo->prepare("INSERT INTO inscription (id_student,id_course) VALUES (?,?)");
    $sql->execute([$id, $idc]);
  }
 }
?>