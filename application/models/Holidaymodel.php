<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Holidaymodel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function get_holiday_list()
	 {	
		$this->db->select('*')
                    ->from('holiday')
					->where('is_active','1');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	} 
	public function save_holiday_information($data)
	{
		$this->db->insert('holiday',$data);
		$insert_id = $this->db->insert_id();
    	return $insert_id;
	}
	
}
?>