<?php
namespace Php2\Oop\Controller;

class BaseController{
    public $mssv = "PC07191 <br>";
    public function Hello(){
        
      echo "MSSV: ". $this->mssv;
    }
}