<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboardmodel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
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
	public function get_weekly_holiday_list()
	 {	
	 	$where = array('is_active'=>'1','holiday_type'=>'Weekly holiday');
		$this->db->select('*')
                    ->from('holiday')
					->where($where);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	} 
	public function get_national_holiday_list()
	 {	
	 	$where = array('is_active'=>'1','holiday_type'=>'National holiday');
		$this->db->select('*')
                    ->from('holiday')
					->where($where);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	} 
	
}
?>