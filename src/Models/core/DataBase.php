<?php
namespace Palata\Gs\Core;
use mysqli;

class  Database {
    protected $conn;

    public function __counstruct()
    {
        $host = 'localhost' ;
        $db = 'oop';
        $user = 'root' ;
        $pass = '';
        //mysqli connecton
        $this->conn = new \mysql($thist,$user,$pass,$db);
        if ($this->conn ->connect_error) {
            die ("connect failed: ", $this->conn->connect_error);
        }
    }
}

    

