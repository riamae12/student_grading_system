<?php

namespace palata\Gs\Moddels;

use palata\Gs\Core\Crud;

class StudentModel implements crud {
    public int $id;
    public string $name;
    public int $year_level;
    public string $section;

    Public function __construct()

    parent::__construct();
{       
    $this->id = 0;
    $this->name ="";
    $this->course ="";
    $this->year_level=0 ;
    $this->secction = "";

    public function find($id){
        
        
    }
    public function create(){
        
    }
    public fuction read(){
        try{

            $sql = $this->conn->query
            $sql = "FROM students$sql)
            return $result->fetch_all()
        }catch (\throwable $th)
        echo $th->getMesssage();
        }
        

        
    }
    public function update($id){
    
    }
    public function delete($id){

    }
}