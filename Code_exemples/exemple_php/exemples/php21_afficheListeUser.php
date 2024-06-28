<?php
require 'connec_bdd.php';
$sql=$pdo->prepare("SELECT * FROM user");
$sql->execute();

$list= $sql->fetchAll();
// print_r($list);

echo "<hr>";

foreach($list as $row){?>
<p>
    <h1><?=$row['nom']?> <?=$row['prenom']?></h1>
    <p><?=$row['email']?></p>
    <a href="php19_exo_bdd2.php?id=<?=$row['id']?>">Modifier</a>
</p>
<hr>
<?php }


?>