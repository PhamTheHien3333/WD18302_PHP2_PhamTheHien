<?php

namespace App\Models;
use App\Model\Database;

class PostModel extends BaseModel{
    
    protected $name ="PostModel";
    public $tableName = 'posts';

    public $table = "posts";
    public function __construct(){
  
        parent::__construct();
    }
    
    public function getAllPost(){
        return $this->getAll()->get();
    }
    public function getOnePost(){
        return $this->getPostId()->get();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function addPost($data){
        // $tableName = $this->tableName;
       
       $this->insertData($this->table,$data);
    }

    public function updatePost($data){
        // $tableName = $this->tableName;
        
       $this->updateData($this->table,$data);
    }

    public function deletePost($data){
        // $tableName = $this->tableName;
        
       $this->deleteData($this->table,$data);
    }

    public function create($data){
        var_dump($this->tableName);
    }
}