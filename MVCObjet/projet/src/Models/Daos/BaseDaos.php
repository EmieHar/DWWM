<?php
//
// DAO : data access object 
// le DAO est un design pattern (patron de conception)
// 
namespace Projet\Models\Daos;

use PDO;

class BaseDaos
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql://host=localhost;dbname=projet;charset=utf8", 'root' , '');
    }
}