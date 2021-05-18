<?php
class LoginAdmin extends Controller {
    public function index() {
        $data['title_page'] = "Login Admin";
        $this->view('eshop/admin/login', $data);
    }
}