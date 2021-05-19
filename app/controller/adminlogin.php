<?php
class adminlogin extends Controller {
    public function index() {
        $data['title_page'] = "Login Admin";
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = $this->load_model("User");
            $data["err"] = $userModel->loginAdmin($_POST);
        }
        $this->view('eshop/admin/login', $data);

    }
}