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
}