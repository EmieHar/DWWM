<?php

namespace Projet\Models\Entities;

class Utilisateur 
{
    private $email;
    private $password;
    private $verifypassword;
    private $id;

        public function getId() 
        {
            return $this->id;  
        }

        public function setId($id) 
        {
            $this->id = $id;
            return $this;
        }
        
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) 
        {
            $this->email = $email;
            return $this;
        }

        public function getPassword() {
            
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
            return $this;

        }

        public function getVerifypassword()
        {
            return $this->verifypassword;
        }

        public function setVerifypassword($verifypassword)
        {
            $this->verifypassword = $verifypassword;
            return $this;
        }


}

?>