<?php
require 'connec_bdd2.php';

try {
    
    $email = $_POST['email'];
   
    $id = $_POST['id'];


    $sql = $pdo->prepare("UPDATE etudiant SET email='$email' WHERE etudiant.id='$id'");
    $sql->execute();
?>
    <h1>La modification a été prise en compte. Merci.</h1>

<?php
    header('Location: http://localhost/developpement/Code_exemples/exemple_php/exercice_bdd/exo_etudiant_spec/listeEtudiant_modif.php');
} catch (Exception $e) {
    echo $e->getMessage();
}

?>