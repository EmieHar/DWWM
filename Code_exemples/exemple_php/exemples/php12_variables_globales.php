<?php
require 'debug.php';

$prenom ="polo";
$nom="call";
$age=33;

//les variables globales sont toutes dans un tableau spécifique ) PHP =>$GLOBALS

function presente(){
    global $nom, $prenom, $age;//pour utiliser les variable globales dans ma fonction, les déclarer avec l'opérateur global
    echo "Bonjour, je suis ".$prenom." ".$nom." et j'ai ".$age." ans.<hr>";
}

function presente2(){

    echo "Bonjour, je suis ".$GLOBALS['prenom'];
}

presente();
presente2();

echo"<hr>";

debug($GLOBALS);

echo"<hr>";

// la superglobale S_SERVER donne des renseignements sur le serveur.
debug($_SERVER);
?>