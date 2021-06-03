<?php


class Product
{

    public function createText($POST, $image1, $image2, $image3, $image4) {
        $name = $_POST['product_name'];
        $decs = $_POST['product_decs'];
        $price = gmp_intval(gmp_init($_POST['product_price']));
        $number = intval($_POST['product_number']);
        $promotion = floatval($_POST['product_promotion']);
        $category_id = $_POST['category_id'];
        $status = $_POST['product_status'];
        $sql = "insert into tbl_product (product_name,product_decs,product_price,product_number,product_promotion, category_id, product_status, image1, image2, image3, image4) 
                value '{$name}', '{$decs}', {$price}, {$number},{$promotion}, {$category_id}, {$status}, '{$image1}', '{$image2}', '{$image3}', '{$image4}'";
        $db = DataBase::getInstance();
        $product = $db->prepare($sql);
        $product = $product->execute();
        if ($product) {
            header("Location:".ROOT."products");
            die;
        }
        else {
            return null;
        }
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
        $product = $db->prepare($sql);
        $product = $product->execute();
        if ($product) {
            header("Location:".ROOT."products");
            die;
        }
        else {
            return null;
        }
    }

    public function getListProduct() {
        $sql = "select * from tbl_product";
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

    public function  getProduct($id) {
        $sql = "select * from tbl_product where id = {$id}";
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

    public function delete($id) {
        $sql = "delete from tbl_product where id = {$id}";
        $db=  DataBase::getInstance();
        $result =  $db->write($sql);
        return $result;
    }
}