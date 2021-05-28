<?php
class Admin extends Controller
{
    public function index() {
        if(isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
            $this->view('eshop/admin/index', $data);
        }
        else {
           header("Location: ". ROOT. 'adminlogin');
        }
    }
    public function categories() {
        if(isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin Products";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
            $this->view('eshop/admin/category', $data);
        }
        else {
            header("Location: ". ROOT. 'adminlogin');
        }
    }
    public function  products() {
        if(isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin Products";
            $admin = $this->load_model('User');
            $data['user-data'] =  $admin->check_login();
            $this->view('eshop/admin/products', $data);
        }
        else {
            header("Location: ". ROOT. 'adminlogin');
        }
    }

    public function users() {
        die( "user" );
    }
    public function setting() {
        die('Setting');
    }
}