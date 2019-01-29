<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        
         $this->load->model('Dashboardmodel');
        
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        if ($this->session->userdata('email')) 
        {
             $data['employee_list'] = $this->Dashboardmodel->get_employee_list();
             $data['weekly_holiday_list'] = $this->Dashboardmodel->get_weekly_holiday_list();
             $data['national_holiday_list'] = $this->Dashboardmodel->get_national_holiday_list();
            $this->load->view('dashboard',$data);
        }
        else {
            redirect('Login',"refresh");
        }
    }
    
    
}
