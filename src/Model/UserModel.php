<?php

namespace src\Model;

use Exception;

session_start();

// if ($_POST)
// {
//     $connexion = $log->connect();
//     $email = $_POST['email'];
//     $password = $_POST['password'];
// }

class Model
{
    private $email;
    private $password;
    private $server;
    private $user;
    private $pass;
    private $dbname;

    public function __construct()
    {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'pie-php';

        try {
            $db = new \PDO("mysql:host=$this->server;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (Exception $e)
        {
            die("Erreur : " . $e->getMessage());
        }
    }

    public function save($email, $password)
    {
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
    }
}