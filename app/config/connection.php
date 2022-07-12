<?php

class Connection {
    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host       = 'localhost';
        $this->database   = 'citepo_ag';
        $this->user       = 'citepsriver';
        $this->password   = '135851m0n#A';
        $this->charset    = 'utf8mb4';
    }

    function connect(){
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false
                ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        } catch (PDOException $e) {
            print_r('Connection Error : ' . $e->getMessage());
        }
    }
}
?>