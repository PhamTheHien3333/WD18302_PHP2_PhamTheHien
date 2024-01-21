<?php
    class Category{
        var $id = null;
        var $name = null;
        var $note = null;

        public function getList(){
            $db = new connect();
            $query = '';
            $result = $db->pdo_query($query);
            return $result;
        }

        public function getById($id){
            $db = new connect();
            $query = 'select * from Categories where id ='.$id;
            $result = $db->pdo_query_one($query);
            return $result;
        }

        public function add($name,$note){
            $db = new connect();
            $query = "insert into Categories(id,name,note) values(null,'$name','$note')";
            $result = $db->pdo_execute($query);
            return $result;
        }

        public function update($name,$note){
            $db = new connect();
            $query = '';
            $result = $db->pdo_execute($query);
            return $result;
        }

        public function delete($id){
            $db = new connect();
            $query = '';
            $result = $db->pdo_execute($query);
            return $result;
        }
    }
?>