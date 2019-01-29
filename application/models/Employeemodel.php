<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employeemodel extends CI_Model{

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
	public function save_employee_information($data)
	{
		$this->db->insert('employee',$data);
		$insert_id = $this->db->insert_id();
    	return $insert_id;
	}
	
}
?>