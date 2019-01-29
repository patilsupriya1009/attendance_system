<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        
       // $this->load->model('Loginmodel');
       
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        
        $this->load->view('login');
    }
    // Check for Valid Login 
    public function login() 
    {
        if (isset($_POST['login'])) 
        {
            $username = trim($_POST['username']);
            $username = strtolower($username);
            $password = md5($_POST['password']);
            if ($username != '' && $password != '') 
            {
                $valid_email = 'jagdish@ispeedbiz.com';
                $valid_pwd = md5('1234');
                if($username == $valid_email && $password == $valid_pwd)
                {
                    $userdata = array(
                        'email' => $username,
                        'usertype' => 'admin',
                        'logged_in' => TRUE
                    );
                   $this->session->set_userdata($userdata);
                   redirect('Dashboard');
                }
                else
                {
                    echo "<script>alert('Please enter valid Username or Password')</script>";
                    $this->load->view('login');
                } 
            }
            else 
            {
                redirect('Login',"refresh");
            } 
        } 
        else {
            redirect('Login',"refresh");
        }
    }
   //logout code
    public function logout() {

        session_unset();
        session_destroy();
        redirect('Login',"refresh");
    }


    
}
