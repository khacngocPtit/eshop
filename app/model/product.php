<?php


class Product
{
    public function create($POST, $image1) {
        $name = $_POST['product_name'];
        $decs = $_POST['product_decs'];
        $price = gmp_intval(gmp_init($_POST['product_price']));
        $number = intval($_POST['product_number']);
        $promotion = floatval($_POST['product_promotion']);
        $category_id = $_POST['category_id'];
        $status = $_POST['product_status'];
        $sql = "insert into tbl_product (product_name,product_decs,product_price,product_number,product_promotion,image4, category_id, product_status) 
                value '{$name}', '{$decs}', {$price}, {$number},{$promotion}, '{$image1}',{$category_id}, {$status}";
        $db = DataBase::getInstance();
        $product = $db->write($sql);
        return $product;
    }
    public function update($POST, $image, $id) {
        $name = $_POST['product_name'];
        $decs = $_POST['product_decs'];
        $price = gmp_intval(gmp_init($_POST['product_price']));
        $number = intval($_POST['product_number']);
        $promotion = floatval($_POST['product_promotion']);
        $category_id = $_POST['category_id'];
        $status = $_POST['product_status'];
        $sql = "update tbl_product set product_name = '{$name}', product_decs = '{$decs}', product_number = '{$price}',
                product_number = '{$number}', image4 = '{$image}', promotion = '{$promotion}',category_id = '{$category_id}', product_status = '$status' where id = {$id}";
        $db = DataBase::getInstance();
        $product = $db->write($sql);
        return $product;
    }

    public function getListProduct() {
        $sql = "select * from tbl_product";
        $db = DataBase::getInstance();
        $listProduct  = $db->read($sql);
        return $listProduct;
    }

    public function  getProduct($id) {
        $sql = "select * from tbl_product where id = {$id}";
        $db = DataBase::getInstance();
        $product = $db->read($sql);
        if($product) {
            return $product;
        } else {
            return null;
        }
    }

    public function delete($id) {
        $sql = "delete from tbl_product where id = {$id}";
        $db=  DataBase::getInstance();
        $result =  $db->write($sql);
        return $result;
    }
}