<?php


function listeprofs(){
    require 'model_connect.php';
    $sql = $pdo->prepare( 'SELECT * from professeur ORDER BY nom');
    $sql->execute();
    $rows = $sql->fetchAll();
    return $rows ;
}

?>