<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('Employeemodel');
       
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        $data['employee_list'] = $this->Employeemodel->get_employee_list();
        $this->load->view('employee_list',$data);
    }
    public function add_emplyee()
    {
        $this->load->view('add_emplyee');
    }
    public function save_employee_information()
    {
        if(isset($_POST['btn_submit']))
        {
            $employee_list = $this->Employeemodel->get_employee_list();
            $count = count($employee_list);
            $employee_id = '#Emp-'.($count+1);
            $employee_name = $_POST['employee_name'];
            $employee_email = $_POST['employee_email'];
            $employee_mobile =$_POST['employee_mobile'];
            $employee_address = $_POST['employee_address'];
            $employee_dob =date("d/m/Y", strtotime($_POST['employee_dob']));
            $employee_blood_group = $_POST['employee_blood_group'];
            $employee_join_date =date("d/m/Y", strtotime($_POST['employee_join_date']));
            $employee_department =$_POST['employee_department'];
            $employee_designation =$_POST['employee_designation'];
            $employee_photo = $_FILES['employee_photo']['name'];
            $employee_mobile_hotspot_name =$_POST['employee_mobile_hotspot_name'];

            $data = array(
                'employee_id' => $employee_id, 
                'employee_name' => $employee_name,
                'employee_email' => $employee_email,
                'employee_mobile' => $employee_mobile,
                'employee_address' => $employee_address,
                'employee_dob' => $employee_dob,
                'employee_blood_group' => $employee_blood_group,
                'employee_join_date' => $employee_join_date,
                'employee_department' => $employee_department,
                'employee_designation' => $employee_designation,
                'employee_photo' => $employee_photo,
                'employee_mobile_hotspot_name' => $employee_mobile_hotspot_name
            );
            $insert_id = $this->Employeemodel->save_employee_information($data);
            if($insert_id)
            {
                        $folder_path = 'upload/Employee/' . $insert_id . '/';
                        $path = FCPATH . $folder_path;
                        if (!is_dir($path)) 
                        {
                            mkdir($path, 0777, true);
                        }
                        if (isset($_FILES['employee_photo']))
                        {
                            move_uploaded_file($_FILES['employee_photo']['tmp_name'], $path.$_FILES['employee_photo']['name']);
                        }
                echo("<SCRIPT type='text/javascript'>
                            window.alert('Employee Details Saved Successfully.');
                            window.location.href='" . base_url() . "Employee';
                         </SCRIPT>");

            }
            else
            {
                echo("<SCRIPT type='text/javascript'>
                            window.alert('Error in saving Emplyee Details. Please try again');
                            window.location.href='" . base_url() . "Employee/add_emplyee';
                         </SCRIPT>");
            }
        }
        else
        {
            $this->load->view('add_emplyee');
        }
    }
    
}
