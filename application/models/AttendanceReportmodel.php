<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AttendanceReportmodel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function get_attendance_report()
	 {	
	 	$sql = "select daily_report.*, employee.id, employee.employee_name from daily_report,employee where daily_report.employee_id_fk=employee.id order by report_date DESC";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;

	} 
	
}
?>