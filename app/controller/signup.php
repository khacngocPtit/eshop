<?php


class Signup extends  Controller
{
    public function index() {
        $data["title_page"] = "Sign Up";
        if($_SERVER["REQUEST_METHOD"] == 'POST') {

            $user = $this->load_model("User");
        }
        $this->view("eshop/signup", $data);
    }
}