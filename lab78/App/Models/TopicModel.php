<?php

namespace App\Models;

class TopicModel extends BaseModel{
    
    protected $name ="TopicModel";
    public $tableName = 'topics';

    public $table = "topics";
    public function __construct(){
  
        parent::__construct();
    }
    
    public function getAllTopic(){
        return $this->getAll()->get();
    }

    public function getOneTopic(){
        return $this->getTopicId()->get();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function addTopic($data){
        // $tableName = $this->tableName;
       
       $this->insertData($this->table,$data);
    }

    public function updateTopic($data){
        // $tableName = $this->tableName;
        
       $this->updateData($this->table,$data);
    }

    public function deleteTopic($data){
        // $tableName = $this->tableName;
        
       $this->deleteData($this->table,$data);
    }

    public function create($data){
        var_dump($this->tableName);
    }
}