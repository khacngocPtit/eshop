<?php
class Admin extends Controller
{
    public function index() {
        $data["title_page"] = "Admin";
        $this->view('eshop/admin/index', $data);
    }
}