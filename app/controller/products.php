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

    public function add()
    {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {

            $data["title_page"] = "Admin Add New Product ";
            $admin = $this->load_model('User');
            $data['user-data'] = $admin->check_login();

            $categoryModel = $this->load_model('Category');
            $data['categories'] = $categoryModel->getCategories();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $productModel = $this->load_model("Product");

//                $result = $productModel->create($_POST);
                $allowedExts = array("jpeg", "jpg", "png", "gif");
                $total = count($_FILES['product_image']['name']);

                for( $i = 0  ; $i < $total ; $i++) {
                    $tmpFilePath = $_FILES['product_image']['tmp_name'][$i];
                    if ($tmpFilePath != ""){
                        $newFilePath = "./assets/eshop/images/". $_FILES['product_image']['name'][$i];
                        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                        }
                    }
                }
//                if ($result) {
//                    header("Location:" . ROOT . "products");
//                } else {
//                    $data["err"] = "Có lỗi xảy ra ";
//                    $productModel = $this->load_model('Product');
//                }
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