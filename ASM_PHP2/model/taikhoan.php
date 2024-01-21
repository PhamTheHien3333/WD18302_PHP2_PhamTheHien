<?php
session_start();
    function addtk( $user, $pass, $email, $address, $tel, $role){
        $sql ="insert into taikhoan (user,pass,email,address,tel,role) values(?,?,?,?,?,?)";
        pdo_execute($sql, $user, $pass, $email, $address, $tel, $role);
    }
    function xoatk($id){
        $sql = "delete FROM taikhoan where id=".$id;
        pdo_execute($sql);
    }
    function listtk(){
        $sql = "select * FROM taikhoan ORDER BY id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function suatk($id){
        $sql = "select * from taikhoan where id=".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function updatetk($id,$user){
        $sql ="update taikhoan set user='".$user."'where id=".$id;
        pdo_execute($sql);
    }
    //client
    function checkuser($user,$pass){
        $conn = pdo_get_connection();  
        $stmt = $conn->prepare("SELECT * FROM taikhoan where user = '".$user."' AnD pass = '".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq[0]['role'];
    }

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['user'] = $user;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }
?>