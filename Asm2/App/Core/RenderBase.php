<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHeader(){
        $this->load->render('layouts/admin/header');
    }

    public function renderFooter(){
        $this->load->render('layouts/admin/footer');
    }

    public function renderRegister(){
        $this->load->render('layouts/admin/register');
    }
    public function renderLogin(){
        $this->load->render('layouts/admin/login');
    }
    public function headerLogin(){
        $this->load->render('layouts/admin/headerLogin');
    }
    public function footerLogin(){
        $this->load->render('layouts/admin/footerLogin');
    }
}