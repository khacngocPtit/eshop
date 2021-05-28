<?php
    class User
    {
        /**
         * User constructor.
         */
        private $err = "";
        public function __construct()
        {
        }

        public function signUp ($POST) {
            $role = 1;
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phonenumber'];
            $dateOfBirth = $_POST['dateofbirth'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];

            $sql1 = "select * from tbl_user where username='".$username."'";
            $db = DataBase::getInstance();
            $user = $db->read($sql1);
            if($user) {
                $this->err .= "User is exist. </br>";
            }
            else {
                if($password == $confirmpassword) {
                    $this->err .= "Password is not match. </br>";
                }
                $password = hash('sha1', $password);
                $sql = "insert into tbl_user (username, fullname, email, phonenumber, date_of_birth, gender, password, role) value ('{$username}','{$fullname}', '{$email}', '{$phoneNumber}', '{$dateOfBirth}', '{$gender}', '{$password}', {$role})";
                $result = $db->write($sql);
                if($result) {
                   header("Location:". ROOT. "login");
                   die;
                }
            }
            $_SESSION['error'] = $this->err;
        }
        public function  login($POST) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $db = DataBase::getInstance();
            $password = hash('sha1', $password);
            $sql = "select * from tbl_user where username = '{$username}' and password = '{$password}' and role = 1 ";
            $user = $db->read($sql);
            if($user) {
                $_SESSION['id'] = $user[0]->id;
                $_SESSION['username'] = $user[0]->username;
                $_SESSION['role'] = $user[0]->role;
                header("Location:". ROOT. "home");
                die;
            } else {
                $this->err .= "Username or password is wrong.";

            }
            $_SESSION['error'] = $this->err;
        }


        public function check_login() {
            if(isset($_SESSION['id']) && $_SESSION['username']) {
                $sql = "select * from tbl_user where username = '{$_SESSION['username']}' and id = {$_SESSION['id']}";
                $db = DataBase::getInstance();
                $result = $db->read($sql);
                if(is_array($result)) {
                    return $result[0];
                }
            }
            return false;
        }
        public function logout() {
            if(isset($_SESSION['id']) && isset($_POST['username'])) {
                unset($_SESSION['id']);
                unset($_POST['username']);
            }
            header("Location:". ROOT. "home");
            die;
        }

        public function loginAdmin($POST) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db = DataBase::getInstance();
            $password = hash("sha1", $password);
            $sql = "select * from tbl_user where username = '{$username}' and password = '{$password}' and role = 2";
            $admin = $db->read($sql);
            if($admin) {
                $_SESSION['role'] = $admin[0]->role;

                header("Location:". ROOT. "admin");
                die;
            } else {
                $this->err = "Wrong username or password.";
            }
            $_SESSION["error"] = $this->err;
        }
    }