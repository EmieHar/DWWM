<?php require ('header.php'); ?>
<html>

<head>
</head>

<body>
    <h1> Ce cours est suivi par </h1>
       <hr>
     <?php
    foreach ($students as $student) { 
        ?>
        <h1><?= $student['name'] ?> <?= $student['firstname'] ?></h1> 
        <h2>email: <?= $student['email'] ?></h2>
        <hr>
 
    <?php } ?>

</body>