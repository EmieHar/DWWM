<?php
namespace Projet\Models\Services;

use Projet\Models\Daos\UtilisateurDaos;

class UtilisateurServices
{
    private $utilisateurDaos;

    public function __construct()
    {
        $this->utilisateurDaos = new UtilisateurDaos();

    }

    public function recordUtilisateur($u)
    {
        $uc = $this->utilisateurDaos->objetUtilisateur($u);

        $utilisateur = $this->utilisateurDaos->recordUtilisateur($uc);

    }
}

?>