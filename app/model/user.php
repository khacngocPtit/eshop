<?php
    class User
    {
        /**
         * User constructor.
         */
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
            $sql1 = 'select * from tbl_user where username="'.$username.'"';
            $db = DataBase::getInstance();
            $user = $db->read($sql1);

            if($user) {
                die("User is existed.");
            }
            else {
                $sql = 'insert into tbl_user (username, fullname, email, phonenumber, dateofbirth, gender, password, role) value (username, ''fullname, :email, :phoneNumber, :dateOfBirth, :gender, :password, :role)';
                echo $sql;
                $result = $db->write($sql);
                if($result) {
                    die("Them thanh cong");
                }
            }
        }
        public function  login() {

        }

        public function getUser() {

        }

        public function getAllUser() {

        }
    }