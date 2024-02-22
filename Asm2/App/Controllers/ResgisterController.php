<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;

use App\Controllers\HomeController;

class ResgisterController extends BaseController{
   
    private $login;
    private $_renderBase;


    function __construct(){
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->login = new LoginController();
    }
    

    public function loadViewRegister(){

        if(!empty($_SESSION['user'])){
            $this->redirect(ROOT_URL);
        }

        $this->_renderBase->headerLogin();
        $this->load->render('layouts/admin/pages/register');
        $this->_renderBase->footerLogin();
    }


    public function handleRegister(){
        // validation form
        // kiểm tra trước rồi mới new UserModel();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $check = preg_match($pattern, $email);
        

        if (!$check) {
            echo 'Email không hợp lệ vui long thu lai';
            return;
        }

        $userModel = new UserModel();
        $user = $userModel->checkUserExist($_POST["email"]);


        if($user){
            // tài khoản này có rồi , vui lòng đăng nhập
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi
            echo 'Tài khoản này có rồi , vui lòng đăng nhập';
            return;
        }else{
            if(isset($_POST['dangky']) && $_POST['dangky']){
                $data = [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "password" => md5($_POST['password']),
                ];
                $userModel->registerUser($data);
            }
            
            $this->login->loadViewLogin();
        }

        


        // //xác thực
        // if(password_verify($_POST['password'], $user['password'])){
        //     // xử lý session
        //     $_SESSION['user'] = $user;

        // }else{
            
        // }
        
        // var_dump($_SESSION['user']);

    }



}