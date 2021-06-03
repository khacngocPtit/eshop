<?php


class Products extends Controller
{
    public function index() {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin Product";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
            $this->view('eshop/admin/products', $data);
        }
    }

    public function add() {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin Add New Product ";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
<<<<<<< HEAD
            $categoryModel = $this->load_model('Category');
            $data['categories'] = $categoryModel->getCategories();
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $productModel = $this->load_model("Product");
                $allowedExts = array("jpeg", "jpg", "png", "gif");
                $result = $productModel->create($_POST);
                foreach ($_FILES["product_image"]["tmp_name"] as $key => $value) {
                    $filename = $_FILES["product_image"]["name"][$key];
                    $filename_tmp = $_FILES["product_image"]["tmp_name"][$key];
                    show($filename);
                }
                if($result) {
                    header("Location:".ROOT."products");
                } else {
                    $data["err"] = "Có lỗi xảy ra ";
=======
            $productModel = $this->load_model('Product');
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $total = count($_FILES['product_image']['name']);
                for( $i=0 ; $i < $total ; $i++ ) {

                    //Get the temp file path
                    $tmpFilePath = $_FILES['product_image']['tmp_name'][$i];

                    //Make sure we have a file path
                    if ($tmpFilePath != ""){
                        //Setup our new file path
                        $newFilePath = "./uploadFiles/" . $_FILES['upload']['name'][$i];

                        //Upload the file into the temp dir
                        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                            //Handle other code here

                        }
                    }
                }
                $result = $productModel->create($_POST);
                if($result) {
                    show($result);
                } else {
                    $data['err'] = "Có lỗi xảy ra khi thêm sản phẩm";
>>>>>>> bfe2c9e52cbdd6f124d8d16f01bf977037508204
                }
            }
            $this->view('eshop/admin/addproduct', $data);
        }
    }

    public function edit() {

    }

    public function  delete() {

    }

    public function upload() {

    }

    public function getProduct() {

    }

    public function newuct() {

    }

    public function popularproduct() {

    }

    public function detail() {

    }

    public function search() {

    }
}