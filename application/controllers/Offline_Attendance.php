<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Offline_Attendance extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('OfflineAttendancemodel');
       
        //Confirm Form Resubmission Error solution
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
     }
    public function index()
    {
        $data['offline_attendance_list'] = $this->OfflineAttendancemodel->get_offline_attendance_list();
        $this->load->view('offline_attendance_list',$data);
    }
    public function add_offline_attendance()
    {
        $this->load->view('add_offline_attendance');
    }
    public function save_offline_attendance_information()
    {
        if(isset($_POST['btn_submit']))
        {
            $employee_id_fk = $_POST['employee_id_fk'];
            $attendance_month = $_POST['attendance_month'];
            $attendance_date =date("d/m/Y", strtotime($_POST['attendance_date']));
            $in_time = $_POST['in_time'];
            $out_time = $_POST['out_time'];
            $diff = (strtotime($out_time) - strtotime($in_time));
            $total = $diff/60;
            $total_time =sprintf("%02d:%02d:%02d", floor($total/60), $total%60, 00);
            $reason_for_offline_update = $_POST['reason_for_offline_update'];
            
            
            $data = array(
                'employee_id_fk' => $employee_id_fk, 
                'attendance_month' => $attendance_month,
                'attendance_date' => $attendance_date,
                'in_time' => $in_time,
                'out_time' => $out_time,
                'total_time' => $total_time,
                'reason_for_offline_update' => $reason_for_offline_update
            );
            $insert_id = $this->OfflineAttendancemodel->save_offline_attendance_information($data);
            if($insert_id)
            {
                $data1 = array(
                'employee_id_fk' => $employee_id_fk, 
                'attendance_month' => $attendance_month,
                'attendance_date' => $attendance_date,
                'in_time' => $in_time,
                'out_time' => $out_time,
                'total_time' => $total_time
                );
               $insert_id = $this->OfflineAttendancemodel->save_online_attendance_information($data1);

               //Save data on server DB :
                $this->another = $this->load->database('remote_db',TRUE);
                
                $this->another->insert('offline_attendance',$data);
                $insert_id = $this->another->insert_id();

                $this->another->insert('online_attendance',$data1);
                $insert_id = $this->another->insert_id();

                echo("<SCRIPT type='text/javascript'>
                            window.alert('Offline Attendance Details Saved Successfully.');
                            window.location.href='" . base_url() . "Offline_Attendance';
                         </SCRIPT>");
            }
            else
            {
                echo("<SCRIPT type='text/javascript'>
                            window.alert('Error in saving Offline Attendance Details. Please try again');
                            window.location.href='" . base_url() . "Offline_Attendance/add_offline_attendance';
                         </SCRIPT>");
            }
        }
        else
        {
            $this->load->view('add_offline_attendance');
        }
    }
    public function get_employee()
    {
        $result=$this->db->where('is_active',1)->get('employee')->result();
        $data=array();

            foreach($result as $r)
            {
                $data['value']=$r->id;
                $data['label']=$r->employee_name;
                $json[]=$data;
            }
            echo json_encode($json);
    }
    
}
