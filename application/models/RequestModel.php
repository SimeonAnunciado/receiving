<?php

class RequestModel extends CI_Model {

	public function request_list() {
		$query = $this->db->select('*')
						  ->from('0_transfer_header')
						  ->get();
		if($query->num_rows()  > 0) {
			$user = $query->result();
			return $user;
		}
		return false;
	}


	public function get_expected($request_id) {
		$this->db->select('0_t_h.*,0_t_d.*,0_t_d_i.*');
		$this->db->from('0_transfer_header 0_t_h');
		$this->db->join('0_transfer_details 0_t_d', '0_t_h.id = 0_t_d.transfer_id', 'left'); 
		$this->db->join('0_transfer_details_items 0_t_d_i', '0_t_h.id = 0_t_d_i.id', 'left'); 
		$this->db->where('0_t_d_i.transfer_id', $request_id); 
		$query = $this->db->get();
		if($query->num_rows()  > 0) {
			$user = $query->row();
			return $user;
		}
		return false;
	}

	public function all_products($request_id){
		$this->db->from('0_transfer_details ');
		$this->db->where('transfer_id', $request_id); 
		$query = $this->db->get();
		if($query->num_rows()  > 0) {
			$user = $query->result();
			return $user;
		}
		return false;
	}


}