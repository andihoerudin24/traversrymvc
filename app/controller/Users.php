<?php  


class Users extends Controller {
    public function __construct() {
        // echo "Users class";
    }

    public function register() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form 
            
        } else {
            //init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            $this->view('users/register', $data);
        }
    }

}