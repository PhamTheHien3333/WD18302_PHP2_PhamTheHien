<?php
namespace Php2\Oop\Model;

class BaseModel{
    public $ten = "Pham The hien <br>";
    public function Ten(){
        
      echo "Ho ten: ". $this->ten;
    }
}