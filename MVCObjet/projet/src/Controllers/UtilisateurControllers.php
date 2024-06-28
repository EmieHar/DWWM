<?php

namespace Projet\Controllers;

use Projet\Models\Services\UtilisateurServices;

class UtilisateurControllers
{
    private $utilisateurServices;
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
        $this->utilisateurServices = new UtilisateurServices();

    }

    // fonction affiche formulaire pour inscription
    public function addUtilisateur()
    {
        echo $this->twig->render('CreateUtilisateur.html.twig');
    }
    
    // tester mdp avant d'insérer dans base de données
    public function recordUtilisateur($u){

        $password = $u->getPassword();
        $verifyPassword = $u->getVerifypassword();

        if ($password === $verifyPassword){
           $this->utilisateurServices->recordUtilisateur($u); 
        }else{
           echo 'les mots de passe ne correspondent pas';
        }
        
    }
    
}





?>