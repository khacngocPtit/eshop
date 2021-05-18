<?php
function show($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function check_error() {
    if(isset($_SESSION['error']) && $_SESSION['error'] != "") {
        echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
}

function check_login() {
    if(isset($_SESSION['email']) && $_SESSION['phonenumber']) {

    }
}
