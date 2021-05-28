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