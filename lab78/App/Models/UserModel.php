<?php

namespace App\Models;



class UserModel extends BaseModel{
    protected $name ="UserModel";
    public $tableName = 'users';

    public $table = "users";


    public function __construct(){
  
        parent::__construct();
    }

    public function getAllUser(){
        return $this->getAll()->get();
    }

    public function getOneUser(){
        return $this->getUserId()->get();
    }
    public function checkUserExist($email){
        return $this->select()->where('email', '=', $email)->first();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data){
        // $tableName = $this->tableName;

        $this->insertData($this->table,$data);
    }

    public function addUser($data){
        // $tableName = $this->tableName;
       
       $this->insertData($this->table,$data);
    }

    public function updateUser($data){
        // $tableName = $this->tableName;
        
       $this->updateData($this->table,$data);
    }

    public function deleteUser($data){
        // $tableName = $this->tableName;
        
       $this->deleteData($this->table,$data);
    }
    public function create($data){
        var_dump($this->tableName);
    }
}