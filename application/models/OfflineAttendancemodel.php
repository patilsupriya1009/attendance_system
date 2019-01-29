<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OfflineAttendancemodel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function get_offline_attendance_list()
	 {	
	 	$sql = "select offline_attendance.*, employee.id, employee.employee_name from offline_attendance,employee where offline_attendance.employee_id_fk=employee.id order by attendance_date DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;

	} 
	public function get_employee_list()
	 {	
		$this->db->select('*')
                    ->from('employee')
					->where('is_active','1');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	} 
	public function save_offline_attendance_information($data)
	{
		$this->db->insert('offline_attendance',$data);
		$insert_id = $this->db->insert_id();
    	return $insert_id;
	}
	public function save_online_attendance_information($data)
	{
		$this->db->insert('online_attendance',$data);
		$insert_id = $this->db->insert_id();
    	return $insert_id;
	}
}
?>