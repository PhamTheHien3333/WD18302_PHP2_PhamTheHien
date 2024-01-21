<?php
    function addbl($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql ="insert into binhluan (noidung,iduser,idpro,ngaybinhluan) values(?,?,?,?)";
        pdo_execute($sql, $noidung, $iduser, $idpro, $ngaybinhluan);
    }
    function xoabl($id){
        $sql = "delete FROM binhluan where id=".$id;
        pdo_execute($sql);
    }
    function listbl(){
        $sql = "select * FROM binhluan ORDER BY id desc";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
    // function suabl($id){
    //     $sql = "select * from taikhoan where id=".$id;
    //     $tk=pdo_query_one($sql);
    //     return $tk;
    // }
    // function updatebl($id,$user){
    //     $sql ="update taikhoan set user='".$user."'where id=".$id;
    //     pdo_execute($sql);
    // }
    //client
   
    function loadall_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($idpro, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','2','$idpro','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
?>