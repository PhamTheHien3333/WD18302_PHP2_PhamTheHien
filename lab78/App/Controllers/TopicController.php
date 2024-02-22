<?php

namespace App\Controllers;
use App\Core\RenderBase;
use App\Models\TopicModel;
class  TopicController  extends BaseController{
    private $_renderBase;
    private $_model;
    public $data = [];
    function __construct()
    {

        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->_model = new TopicModel();
    }

    public function addTopic(){
        
        $this->_renderBase->renderHeader();

        $this->load->render('layouts/admin/Topics/add');
        $this->_renderBase->renderFooter();
    }
    
    public function listTopic(){
        $this->_renderBase->renderHeader();
        $this->data['listTopic'] = $this->_model->getAllTopic();
        // var_dump($this->data['listTopic']);die();
        $this->load->render('layouts/admin/Topics/list', $this->data);
        $this->_renderBase->renderFooter();
    }
    public function updateTopic(){
        if(isset($_POST['capnhat']) && $_POST['capnhat']){
            $data = [
                'topic' => $_POST['topic'],
            ];
            $this->_model->updateTopic($data);
        }
        
            $this->_renderBase->renderHeader();
            $this->load->render('layouts/admin/Topics/update');
            $this->_renderBase->renderFooter();
            
    }
    public function suaTopic(){
        
        if(isset($_GET['topic_id']) && ($_GET['topic_id']>0)){
            $data=[($_GET['topic_id'])];
            $this->_model->getOneTopic($data);
            }
            $this->updateTopic();   
        
    }
    public function xoaTopic(){
        if(isset($_GET['topic_id']) && ($_GET['topic_id']>0)){
            $data=[($_GET['topic_id'])];
            $result = $this->_model->deleteTopic($data);
            }
        

        if($result){
        $this->_renderBase->renderHeader();
        $this->load->render('layouts/admin/Topics/list');
        $this->_renderBase->renderFooter();
        }
    }

    public function handleTopic(){    
  
        if(isset($_POST['themmoi']) && $_POST['themmoi']){
            $data = [
                'topic' => $_POST['topic'],
            ];
            $this->_model->addTopic($data);
        }
        $this->addTopic();
    }
}
