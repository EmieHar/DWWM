<?php
//
// DAO : data access object 
// le DAO est un design pattern (patron de conception)
// 
namespace Emili\MvcObjet\MvcObjet2\Models\Daos;

use PDO;

class BaseDao
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql://host=localhost;dbname=cinema2;charset=utf8", 'root' , '');
    }
}