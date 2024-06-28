<?php

require 'connec_bdd.php';

$sql=$pdo->prepare("SELECT * FROM categorie ");
  $sql->execute();
  $categ= $sql->fetchAll();?>


  
    <form action="php23_basedonnées2.php" method="post">
         <select name="categorie">
            <?php foreach($categ as $cat){?>
               
                    <option value="<?=$cat['nom']?>"><?=$cat['nom']?></option>
               
            <?php } ?>
         </select>
        <input type="hidden" name="id" value="<?=$cat['id']?>">
        <input type="submit" value="Afficher les produits correspondants">
    </form>
  

