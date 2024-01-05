<?php
   // Controller
$name = '';
if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];
    $user = get_user($email);
    if(is_array($user) && array_key_exists('name', $user)){
        $name = $user['name'];
    } else {
        $name = 'Email không tồn tại';
    }  
}
    ?>