<?php


class Category
{
    public function __construct()
    {
    }
    public function getCategories() {
        $sql = "select * from tbl_category";
        $db = DataBase::getInstance();
        $stm = $db->prepare($sql);
        $result = $stm->execute();
        if($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($data)) {
                return $data;
            }
        }
        else {
            return null;
        }
    }

    public function getOneCategory($id) {
        $sql = "select * from tbl_category where id = {$id}";
        $db = DataBase::getInstance();
        $stm = $db->prepare($sql);
        $result = $stm->execute();
        if($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($data)) {
                return $data[0];
            }
        }
        else {
            return null;
        }
    }

    public function create($POST) {
        $decs = $_POST['category_decs'];
        $name = $_POST['category_name'];
        $db = DataBase::getInstance();
        $sql = "insert into tbl_category (category_name, category_decs) value ('{$name}','{$decs}')";
        $result = $db->prepare($sql);
        $result = $result->execute();
        if($result) {
            header("Location:". ROOT. "categories");
            die;
        } else {
            return null;
        }
    }

    public function update($POST, $id) {
        $decs = $_POST['category_decs'];
        $name = $_POST['category_name'];
        $sql = "update tbl_category set category_name='{$name}', category_decs = '{$decs}' where id = {$id}";
        $db = DataBase::getInstance();
        $result = $db->prepare($sql);
        $result = $result->execute();
        if($result) {
            header("Location:". ROOT. "categories");
            die;
        } else {
            return null;
        }
    }

    public function delete($id) {
        $sql = "delete from tbl_category where id = {$id}";
        $db = DataBase::getInstance();
       $result = $db->write($sql);
        if($result) {
            header("Location:". ROOT. "categories");
            die;
        } else {
            return null;
        }
    }
}