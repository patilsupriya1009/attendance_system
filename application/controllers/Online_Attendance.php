<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Online_Attendance extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('OnlineAttendancemodel');
       
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        $data['online_attendance_list'] = $this->OnlineAttendancemodel->get_online_attendance_list();
        $this->load->view('online_attendance_list',$data);
    }
    
}
