

<?php
$toto = "<a href='test'>Test</a>";
echo $toto."<hr>";

$new= htmlspecialchars("<a href='test'>Test</a>");
echo $new."<hr>";

$tata ="<script>alert('danger');</script>";
// echo $tata;
$protect = htmlspecialchars($tata);//htmlentities() permet de remplacer tout les caractères par les valeurs des entités html
// htmlspecialchars() et htmlentities() permettent d'éviter l'execution des codes en affichant les caractères au lieu de les interpréter
echo $protect."<hr>";

$entities = htmlentities('<Il était une fois un être>.');
echo $entities;
// Output: &lt;Il &eacute;tait une fois un &ecirc;tre&gt;.
//                ^^^^^^^^                 ^^^^^^^

$special= htmlspecialchars('<Il était une fois un être>.');
echo $special;
// Output: &lt;Il était une fois un être&gt;.
       
?>

