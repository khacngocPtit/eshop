<?php
class Controller {
    public function view($path, $data=[]) {
        if(file_exists("../app/views/". $path . ".php")) {
            include "../app/views/". $path . ".php";
        } else {
            include "../app/views/404.php";
        }
    }
    public function load_model($model) {
        if(file_exists("../app/model/". strtolower($model) . ".php")) {
            include "../app/model/". strtolower($model) . ".php";

        }
        return false;
    }
}