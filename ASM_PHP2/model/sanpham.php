<?php 
//admin
    function addsp($tensp, $giasp, $hinh, $mota, $iddm){
        $sql = "INSERT INTO sanpham (name, price, img, mota, iddm) VALUES (?, ?, ?, ?, ?)";
        pdo_execute($sql, $tensp, $giasp, $hinh, $mota, $iddm);
    }
    function xoasp($id){
        $sql = "delete FROM sanpham where id=".$id;
        pdo_execute($sql);
    }
    function listsp($kyw,$iddm){
        $sql = "select * FROM sanpham where 1";
        if($kyw!="'"){
            $sql .=" and name like '%".$kyw."%'";
        }
        if($iddm!="'"){
            $sql .=" and iddm ='%".$iddm."%'";
        }
        $sql .= " ORDER BY id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function suasp($id){
        $sql = "select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function updatesp($id,$tensp,$giasp,$hinh,$mota){
    if($hinh!="")
        $sql ="update sanpham set name='".$tensp."',price='".$giasp."',img='".$hinh."',mota='".$mota."' where id=".$id;
    else
    $sql ="update sanpham set name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }
    //client
    function listsp_home(){
        $sql = "select * FROM sanpham where 1 ORDER BY id desc 0.9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function getall_sp(){
        $conn = pdo_get_connection();
        $sql="select * from sanpham order by id desc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    function getonesp($id){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM sanpham where id=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>