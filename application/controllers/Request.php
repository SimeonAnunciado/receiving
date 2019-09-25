<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {
	

	public function index(){

		$data['requests'] = $this->RequestModel->request_list();
		$this->load->view('index', $data);
	}

	public function dispatch_transfer(){

		$this->load->view('dispatch_transfer');
	}

	public function expected_transfer($request_id = ''){
		$data['prods'] = $this->RequestModel->all_products($request_id);
		$data['datas'] = $this->RequestModel->get_expected($request_id);
		$this->load->view('expected_transfer',$data);
	}

	public function receive_transfer(){
		$this->load->view('receive_transfer');
		
	}


	public function dd($arr){
		echo "<pre>" .  print_r($arr,true) . "</pre>";
	}

	public function add() {
		$config = array(
		 array(
		 	'field' => 'fname',
		 	'label' => 'First name',
		 	'rules' => 'required|is_unique[user.firstname]',
		 ),
		  array(
		 	'field' => 'lname',
		 	'label' => 'Last name',
		 	'rules' => 'required|is_unique[user.lastname]',
		 ),
	   );
	   $this->form_validation->set_rules($config);// For Validation 
		$fname  = $this->input->post('fname');
		$lname  = $this->input->post('lname');
		if($this->form_validation->run() != TRUE)
		{
			$this->index();
		} else {
			$result = $this->UserMod->addUser();
			if($result) {
				$this->session->set_flashdata('message', 'Successfully inserted');
				redirect(base_url());
			}
		}
	}

	public function delete($id) {
		$result = $this->UserMod->deleteUser($id);
		if($result) {
			$this->session->set_flashdata('message', 'Successfully deleted');
			redirect(base_url());
		} else {
			echo 'Failed to delete';
		}
	}

	public function edit($id=''){
		if($id != "") {
			$user = $this->UserMod->editUser($id);
			$data = array(
				'user' => $user,
			);
			$this->load->view('crud/edit', $data);
		}
	}

	public function update() {
		$fname  = $this->input->post('fname');
		$lname  = $this->input->post('lname');
		
		if($fname == "" || $lname == ""){
			echo 'Field is required';
		} else {
			$result = $this->UserMod->updateUser();
			if($result) {
				$this->session->set_flashdata('message', 'Successfully Edited');
			redirect(base_url());;
			} else {
				echo 'Failed to update';
			}
		}
	}

}
