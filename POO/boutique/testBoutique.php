<?php
session_start();

function chargerClasse($nomClasse) {
    require_once $nomClasse.'.php';
}

spl_autoload_register('chargerClasse');

$co = new BaseDonnees("127.0.0.1", "boutique", "root", "");

if (!isset($_POST['form'])) {
    $co->afficheFormConnexion();
}

if (isset($_POST['form']) && $_POST['form'] === 'connexion') {
    $co->seConnecter($_POST['email'], $_POST['password']);
}

$produit = new Produits(); // Ajoutez cette ligne pour créer une instance de la classe Produits

$prod = $produit->afficherProduits("produit");
echo "<pre>";
var_dump($prod);
echo "</pre>";
echo "<hr>";

$co->seConnecter("larme-de-pierre64@hotmail.fr", "poule"); // Supprimez cette ligne si elle n'est pas nécessaire

print_r($_SESSION);

$creer = new Client();
$creer->creerCompte("Haritchabalet", "Emilie", "larme-de-pierre64@hotmail.fr", "poule");

$c = new Client();
if (!isset($_POST['action'])) {
    $c->afficheForm();
}

if ((isset($_POST['action'])) && ($_POST['action'] === 'creerCompte')) {
    $c->creerCompte($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']);
}
