<?php

namespace App\Controllers;
use App\Core\RenderBase;
use App\Models\PostModel;
class  PostController extends BaseController{
    private $_renderBase;
    private $_model;
    public $data = [];
    function __construct()
    {

        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->_model = new PostModel();
    }

    public function addPost(){
        
        $this->_renderBase->renderHeader();

        $this->load->render('layouts/admin/Posts/add');
        $this->_renderBase->renderFooter();
    }
    
    public function listPost(){
        $this->_renderBase->renderHeader();
        $this->data['listPost'] = $this->_model->getAllPost();
        // var_dump($this->data['listPost']);die();
        $this->load->render('layouts/admin/Posts/list', $this->data);
        $this->_renderBase->renderFooter();
    }
    public function updatePost(){
        if(isset($_POST['capnhat']) && $_POST['capnhat']){
            $data = [
                
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'name' => $_POST['name'],
                'date' => $_POST['date'],
            ];
            $this->_model->updatePost($data);
        }
        
            $this->_renderBase->renderHeader();
            $this->load->render('layouts/admin/Posts/update');
            $this->_renderBase->renderFooter();
            
    }
    public function suaPost(){
        
        if(isset($_GET['post_id']) && ($_GET['post_id']>0)){
            $data=[($_GET['post_id'])];
            $this->_model->getOnePost($data);
            }
            $this->updatePost();   
        
    }
    public function xoaPost(){
        if(isset($_GET['post_id']) && ($_GET['post_id']>0)){
            $data=[($_GET['post_id'])];
            $result = $this->_model->deletePost($data);
            }
        

        if($result){
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/Posts/list');
        $this->_renderBase->renderFooter();
        }
    }

    public function handlePost(){    
  
        if(isset($_POST['themmoi']) && $_POST['themmoi']){
            $data = [
                
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'name' => $_POST['name'],
                'date' => $_POST['date'],
            ];
            $this->_model->addPost($data);
        }
        $this->addPost();
    }
}