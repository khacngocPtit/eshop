<?php


class Category
{
    public function getCategories() {
        $sql = "select * from tbl_category";
        $db = DataBase::getInstance();
        $result = $db->read($sql);
        return $result;
    }
    public function  create($POST) {
        $decs = $_POST['product_decs'];
        $name = $_POST['product_name'];
        $sql =  "insert into tbl_category (category_name, category_decs) value '{$name}', '{$decs}'";
        $db = DataBase::getInstance();
        $result = $db->write($sql);
        if($result) {
            return $result;
        }
        else {
            return null;
        }
    }

    public function update($POST, $id) {
        $decs = $_POST['product_decs'];
        $name = $_POST['product_name'];
        $sql = "update tbl_category set category_name='{$name}', category_decs = '{$decs}' where id = {$id}";
        $db = DataBase::getInstance();
        $result = $db->write($sql);
        return $result;
    }

    public function delete($id) {
        $sql = "delete from tbl_category where id = {$id}";
        $db = DataBase::getInstance();
        $result = $db->write($sql);
        return $result;
    }
}