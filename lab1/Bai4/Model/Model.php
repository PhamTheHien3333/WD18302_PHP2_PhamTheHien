<?php
include 'Pdo.php';
    //model
    function loadall_posts(){
        $sql="select * from posts where postId";
        return  pdo_query($sql);
    }
?>