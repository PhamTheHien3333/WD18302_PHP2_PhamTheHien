<?php
require_once 'Pdo.php';
//model
function get_user($email){
    $sql = "SELECT name FROM users WHERE email=?";
    return pdo_query_one($sql, $email);
}

