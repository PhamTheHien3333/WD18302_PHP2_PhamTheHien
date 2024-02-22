<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;

use App\Controllers\HomeController;

class LoginController extends BaseController{
   
    private $home;
    private $_renderBase;

    function __construct(){
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->home = new HomeController();
    }
    

    public function loadViewLogin(){

        if(!empty($_SESSION['user'])){
            $this->redirect(ROOT_URL);
        }

        $this->_renderBase->headerLogin();
        $this->load->render('layouts/admin/pages/login');
        $this->_renderBase->headerLogin();
    }


    public function handleLogin(){
        // validation form
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $check = preg_match($pattern, $email);
        

        if (!$check) {
            echo 'Email không hợp lệ';
            return;
        }

        $userModel = new UserModel();
        $user = $userModel->checkUserExist($_POST["email"]);

        if (!$user) {
            echo 'Khong duoc de trong vui long dien day du thong tin';
        } else {
            // if (password_verify($password, $user['password'])) {
            //     $_SESSION['user'] = $user;
                $this->home->homePage();
            // } else {
            //     echo 'Mật khẩu không đúng';
            // }
        }
    }



    public function logout(){
        unset($_SESSION['user']);
        $this->loadViewLogin();
    }


}