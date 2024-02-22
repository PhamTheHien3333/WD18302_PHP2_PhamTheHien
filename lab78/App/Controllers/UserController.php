<?php

namespace App\Controllers;
use App\Core\RenderBase;
use App\Models\UserModel;
class  UserController  extends BaseController{
    private $_renderBase;
    private $_model;
    public $data = [];
    function __construct()
    {

        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->_model = new UserModel();
    }

    public function addUser(){
        
        $this->_renderBase->renderHeader();

        $this->load->render('layouts/admin/Users/add');
        $this->_renderBase->renderFooter();
    }
    
    public function listUser(){
        $this->_renderBase->renderHeader();
        $this->data['listUser'] = $this->_model->getAllUser();
        // var_dump($this->data['listUser']);die();
        $this->load->render('layouts/admin/Users/list', $this->data);
        $this->_renderBase->renderFooter();
    }
    public function updateUser(){
        if(isset($_POST['capnhat']) && $_POST['capnhat']){
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];
            $this->_model->updateUser($data);
        }
        
            $this->_renderBase->renderHeader();
            $this->load->render('layouts/admin/Users/update');
            $this->_renderBase->renderFooter();
            
    }
    public function suaUser(){
        
        if(isset($_GET['user_id']) && ($_GET['user_id']>0)){
            $data=[($_GET['user_id'])];
            $this->_model->getOneUser($data);
            }
            $this->updateUser();   
        
    }
    public function xoaUser(){
        if(isset($_GET['user_id']) && ($_GET['user_id']>0)){
            $data=[($_GET['user_id'])];
            $result = $this->_model->deleteUser($data);
            }
        

        if($result){
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/Users/list');
        $this->_renderBase->renderFooter();
        }
    }

    public function handleUser(){    
  
        if(isset($_POST['themmoi']) && $_POST['themmoi']){
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];
            $this->_model->addUser($data);
        }
        $this->addUser();
    }
}
