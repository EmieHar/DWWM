<?php
require 'connec_bdd2.php';

try {

    $password = $_POST['password'];
   
    $id = $_POST['id'];
    $hp = password_hash($password, PASSWORD_DEFAULT);

    $sql = $pdo->prepare("UPDATE etudiant SET password='$hp' WHERE etudiant.id='$id'");
    $sql->execute();
?>
    <h1>La modification a été prise en compte. Merci.</h1>

<?php
    header('Location: http://localhost/developpement/Code_exemples/exemple_php/exercice_bdd/exo_etudiant_spec/listeEtudiant_modif.php');
} catch (Exception $e) {
    echo $e->getMessage();
}

?>