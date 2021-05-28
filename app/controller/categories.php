<?php


class Categories extends Controller
{
    public function index() {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin Category";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
            $categoryModel = $this->load_model("Category");
            $data['categories'] = $categoryModel->getCategories();
            $this->view('eshop/admin/category', $data);
        }
    }

    public function add() {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Thêm danh mục sản phẩm";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $categoryModel = $this->load_model("Category");
                $result = $categoryModel->create($_POST);
                if(isset($result)) {
                    show($result);
                } else {
                    $data['err'] = "Không thể tạo danh mục sản phẩm";
                }
            }
            $this->view('eshop/admin/addcategory', $data);
        }
    }

    public function edit() {

    }

    public function  delete() {

    }

    public function productcategory() {

    }
}