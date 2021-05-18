<?php
class Home extends Controller
    {
        public function index() {
            $user = $this->load_model('User');
            $data["user_data"] = $user->check_login();
            $data["title_page"] = "Home";
            $this->view('eshop/index', $data);
        }
    }