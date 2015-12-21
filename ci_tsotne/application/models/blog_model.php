<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog_model extends CI_Model {


	public function getpost($pp,$skip){
		$this->db->select('*')
				->order_by('id','desc')
				->limit($pp,$skip);

		return $this->db->get('posts')-> result_array();
	}
	
	public function readmore($id){
		$this->db->where('id', $id);
		return $this->db->get('posts')-> result_array();
	}


	public function view_posts(){
			$query = $this->db->get('posts');
			return $query->result_array();
	}
	
	public function getpostid($post_id){
				$this->db->where('id',$post_id);
				$query = $this->db->get('posts');
				return $query->row();
	}

	public function insertuser(){
		$data =array(// aq xdeba formis velebidan gagzavnili informaciis chawera 'users' tablis velebshi shesabamisad
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'password' => sha1($this->input->post('password')),
					'email' => $this->input->post('email'),
					'uniq_id' => $this->input->post('hide')
					);
		$this->db->insert('users',$data);//es aris chaweris brdzaneba  'users' tablshi ,$data_shi arsebuli monecemebis shesabamisad
	}//End insertuser. dasasruli useris chaweris bazashi.
	public function check_user_db(){//aq xdeba useris gadamowmeba bazashi
		$query = $this->db->select('email','password','status')
				 ->where('email',htmlentities($this->input->post('email',TRUE)))
				 ->where('password',sha1(htmlentities($this->input->post('password',TRUE))))
				 ->count_all_results('users');
			return $query;
	}//end check_user_db.aq mtavrdeba useris shemowmeba bazashiS
	public function login(){//aq xdeba useris monacemebis gadacema sesiashi
		$this->session->set_userdata('uniqid', htmlentities($this->input->post('hide',TRUE)));
		$this->db->set('uniq_id', htmlentities($this->input->post('hide',TRUE)))
				 ->where('email', htmlentities($this->input->post('email',TRUE)))
				 ->update('users');
		redirect('');
	}

}


