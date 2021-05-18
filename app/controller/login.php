<?php
class Login extends Controller {
    public function index() {
        $data["title_page"] = "Login";
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = $this->load_model("User");
            $data["err"] = $userModel->login($_POST);
        }
        $this->view('eshop/login', $data);
    }
}