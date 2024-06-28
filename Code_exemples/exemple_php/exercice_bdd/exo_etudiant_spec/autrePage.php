<?php
session_start();
print_r($_SESSION);

if(isset($_SESSION['nom'])){?>
<h1>Bienvenue<?=$_SESSION['nom']?></h1>
<?php
 } else {?>
 <h2>connectez-vous</h2>
 <?php 
 header('Loction:connexion.php');

 }

 ?>