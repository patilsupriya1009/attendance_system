<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Holiday extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('Holidaymodel');
       
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        $data['holiday_list'] = $this->Holidaymodel->get_holiday_list();
        $this->load->view('holiday_list',$data);
    }
    public function add_holiday()
    {
        $this->load->view('add_holiday');
    }
    public function save_holiday_information()
    {
        if(isset($_POST['btn_submit']))
        {
            $month = $_POST['month'];
            $holiday_type = $_POST['holiday_type'];
            $holiday_date =date("d/m/Y", strtotime($_POST['date']));
            
            $data = array(
                'month' => $month, 
                'holiday_type' => $holiday_type,
                'holiday_date' => $holiday_date,
                'year' => date("Y")
            );
            $insert_id = $this->Holidaymodel->save_holiday_information($data);
            if($insert_id)
            {
                echo("<SCRIPT type='text/javascript'>
                            window.alert('Holiday Details Saved Successfully.');
                            window.location.href='" . base_url() . "Holiday';
                         </SCRIPT>");
            }
            else
            {
                echo("<SCRIPT type='text/javascript'>
                            window.alert('Error in saving Holiday Details. Please try again');
                            window.location.href='" . base_url() . "Holiday/add_holiday';
                         </SCRIPT>");
            }
        }
        else
        {
            $this->load->view('add_holiday');
        }
    }
    
}
