<?php
class Admin extends Controller
{
    public function index() {
        if(isset($_SESSION['role']) && $_SESSION['role'] == 2) {
            $data["title_page"] = "Admin";
            $this->view('eshop/admin/index', $data);
        }
        else {
            $this->view('eshop/admin/login');
        }
    }
}