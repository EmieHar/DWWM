
<?php
require 'connec_bdd2.php';

try {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $specialite=$_POST['id_specialite'];
    $id = $_POST['id'];
    $hp = password_hash($password, PASSWORD_DEFAULT);

    $sql = $pdo->prepare("UPDATE etudiant SET nom='$nom', prenom='$prenom', email='$email', password='$hp', id_specialite='$specialite' WHERE etudiant.id='$id'");
    $sql->execute();
    ?>
    <h1>Les modifications ont été prises en compte. Merci.</h1>

<?php  
  header('Location: http://localhost/developpement/Code_exemples/exemple_php/exercice_bdd/exo_etudiant_spec/listeEtudiant_modif.php');

} catch (Exception $e) {
    echo $e->getMessage();
}

?>