<?php
class Login extends Controller {
    public function index() {
        $data["title_page"] = "Login";
        $this->view('eshop/login', $data);
    }
}