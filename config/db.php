<?php 
namespace AdminDelete\Config; 

class DB {

    private $servername;
    private $username;
    private $password;
    private $databasename;
    public $connection;
    public function __construct() {

        $this->connection = mysqli_connect(
            $this->servername       = "localhost",
            $this->username         = "root",
            $this->password         = "nasa",
            $this->databasename     = "admindelete",
        );
    }
}