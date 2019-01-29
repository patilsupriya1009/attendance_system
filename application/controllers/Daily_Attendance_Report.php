<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Daily_Attendance_Report extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('AttendanceReportmodel');
       
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        $data['daily_attendance_report'] = $this->AttendanceReportmodel->get_attendance_report();
        $this->load->view('daily_attendance_report',$data);
    }
    
}
