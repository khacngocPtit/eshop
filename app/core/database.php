<?php
class DataBase {
    public static $conn;
    public function  __construct()
    {
        try {
            $string = "mysql:host=Localhost;dbname=quan_ly_san_pham";
            self::$conn = new PDO($string, DB_USER, DB_PW);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public static function getInstance() {
        if(self::$conn) {
            return self::$conn;
        }
        return $instance = new self();
    }
    public function read($sql, $data = array()) {
        $stm = self::$conn->prepare($sql);
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
    public function write($sql, $data = array()) {
        $stm = self::$conn->prepare($sql);
        $result = $stm->execute();
        if($result) {
            return $result;
        }
        else return null;
    }
}