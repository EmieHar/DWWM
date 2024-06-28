<?php

namespace Projet\Models\Daos;

session_start();
use Exception;
use Projet\Models\Entities\Utilisateur;

class UtilisateurDaos extends BaseDaos
{

    public function verifEmail(Utilisateur $utilisateur){
        try{

            $requete = $this->db->prepare("SELECT * FROM utilisateur WHERE email = ?");
            $requete->execute([$utilisateur->getEmail()]);
            $resultat = $requete->rowCount();
            return $resultat;
        }
        catch (Exception $e) {
            echo $e->getMessage();
            }
    }


    public function recordUtilisateur(Utilisateur $utilisateur) {
       try{

            $resultat = $this->verifEmail($utilisateur);


            if($resultat == 0)
            {
                $password = $utilisateur->getPassword();
                $hashpassword = password_hash($password, PASSWORD_DEFAULT);

                    $register = $this->db->prepare("INSERT INTO utilisateur (email, password) VALUES (?,?) ");
                    $register->execute([$utilisateur->getEmail(), $hashpassword]);

                    $session = $this->db->prepare("SELECT utilisateur.id FROM utilisateur WHERE email =?");
                    $session->execute([$utilisateur->getEmail()]);

                    $result = $session->fetch();

                    $_SESSION['id'] = $result;
                    print_r($_SESSION['id']);               


            }
            else {
                echo "Cet utilisateur existe déja";
                
            }
        
        }  

        catch (Exception $e) {
        echo $e->getMessage();
        }
    }
  

    public function objetUtilisateur($req)
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setId($req['id'])
                    ->setEmail($req['email']);

        return $utilisateur; 
    }

    public function findOne($id) {
    
        $request = $this->db->prepare("SELECT * FROM Utilisateur WHERE id =?");
        $request->execute([$id]);
        $req= $request->fetch();

        $this->objetUtilisateur($req);
        return $this;
        

    }

    

}



