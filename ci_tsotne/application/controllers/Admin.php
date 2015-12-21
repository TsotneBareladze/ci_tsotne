<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
 //added comments
	
	public function index(){	
	
		$this->load->view('admin/login');
	
	}
		public function boot(){	
	
		$this->load->view('admin2/viewposts2');
	
	}


	public function main(){

		$this->load->view('admin/index');
	}
	public function insert(){
		// $this->load->model('blog_model');
		// $data['rows'] = $this->blog_model->insert_posts();

		$this->load->view('admin/insert');	
	}

		
	public function add(){
			$config['upload_path']          = './images/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        // $config['max_size']             = 100000;

	        $this->load->library('upload', $config);
			
			$imageName = '';
	        
	        if ( ! $this->upload->do_upload('img'))
					{
					$error = array('error' => $this->upload->display_errors());
					// $this->load->view('upload_form', $error);
					print_r($error);
			}else{
                        $data = array('upload_data' => $this->upload->data());
                        $imageName = $data['upload_data']['file_name'];
                        // $this->load->view('upload_success', $data);
                        print_r($data);
              }
              



	// if(is_uploaded_file($_FILES["img"]["tmp_name"])){
		
	
	// 	move_uploaded_file($_FILES["img"]["tmp_name"],"./images/".$_FILES["img"]["name"]);

	// $post_image = $_FILES["img"]["name"];
	


			$data=array(
				'title' => $this->input->post('title'),
				'author'=> $this->input->post('author'),
				'img'   =>($imageName),
				'description' =>$this->input->post('content'));
			


			$this->db->insert("posts",$data);
			redirect('admin/viewposts');
		} 
	

		public function edit($post_id){
		$this->load->model('blog_model');
		$data['rows'] = $this->blog_model->getpostid($post_id);
		$this->load->view('admin/update',$data);

	}

			public function saveupdate(){


				$post_id = $this->input->post('uid');

			$data=array(
				
				'title' => $this->input->post('title'),
				'author'=> $this->input->post('author'),
				'img'   => $this->input->post('image'),
				'description' =>$this->input->post('content'));
			
			$this->db->where("id",$post_id);
			$this->db->update("posts",$data);
			
			redirect('admin/viewposts');

			
	}
	

	public function viewposts(){
		
		$this->load->model('blog_model');
		$data['rows'] = $this->blog_model->view_posts();	

		$this->load->view('admin/viewposts',$data);
	}
	public function delete($post_id){
		$this->db->where('id',$post_id);
		$this->db->delete('posts');
		redirect('admin/viewposts');

	}
}