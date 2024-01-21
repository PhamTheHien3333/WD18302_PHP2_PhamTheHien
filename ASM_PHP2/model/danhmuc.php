<?php
    function adddm($tenloai){
        $sql ="insert into danhmuc (name) values(?)";
        pdo_execute($sql,$tenloai);
    }
    function xoadm($id){
        $sql = "delete FROM danhmuc where id=".$id;
        pdo_execute($sql);
    }
    function listdm(){
        $sql = "select * FROM danhmuc ORDER BY id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function suadm($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function updatedm($id,$tenloai){
        $sql ="update danhmuc set name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }
    function getall_dm(){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>