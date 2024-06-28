<html>
<head>
</head>
<body>
<h1> Voici la liste des profs</h1>

<?php
foreach($profs as $p) { ?>
<h1><?= $p['nom'] ?> <?= $p['prenom'] ?></h1>
<h2><?= $p['specialite'] ?>
<?php } ?>

</body>