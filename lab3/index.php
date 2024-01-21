<?php
require_once "vendor\autoload.php";
require("src/Model/BaseModel.php");

use Php2\Oop\Core\Form;
use Php2\Oop\Model\Paypal;

$paypal = new Paypal();
$paypal->hinhthuc_chung();
?>

<div class="container">
    <h1>Đăng ký tài khoản</h1>
    <?php $form = Form::begin('', 'post'); ?>
    <div class="row">
        <div class="col-sm">
            <?php echo $form->field('firstname'); ?>
        </div>
        <div class="col-sm">
            <?php echo $form->field('lastname'); ?>
        </div>
    </div>
    <?php echo $form->field('email'); ?>
    <?php echo $form->field('password')->passwordField(); ?>
    <?php echo $form->field('confirmPassword')->passwordField(); ?>
    <button type="submit" class="btn btn-primary">Đăng ký</button>
    <?php echo Form::end(); ?>
</div>