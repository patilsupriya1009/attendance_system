<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OnlineAttendancemodel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function get_online_attendance_list()
	 {	
	 	$sql = "select online_attendance.*, employee.id, employee.employee_name from online_attendance,employee where online_attendance.employee_id_fk=employee.id order by attendance_date DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;

	} 
	
}
?>