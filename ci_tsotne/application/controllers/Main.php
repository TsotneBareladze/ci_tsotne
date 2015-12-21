<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
	    // $this->load->model('blog_model');
	}      
    



	public function index(){
				//Here is Pagination
			$this->load->library('pagination');

			$config['base_url'] 	= 'http://localhost:8080/ci_tsotne/main/index';//misamarti
			$config['total_rows'] 	=  $this->db->count_all_results('posts');//es itvilis sul ramdeni siaxle bazashi
			$pp = $config['per_page'] 	= 6;//es aris ert gverZe ramdeni siaxele unda gamochndes


			$this->pagination->initialize($config);
			$skip = $this->uri->segment(3);//es aris mesame parametri dziritaad linkSi
											//romelic gvichvenebs gverdebs


		//END Pagination
		



		$this->load->model('blog_model');
		$data['posts'] = $this->blog_model->getpost($pp,$skip);		

		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('includes/main',$data);
		$this->load->view('includes/footer');
		// $this->load->view('index');



	
	}

	public function gallery(){
			
	$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('pages/gallery');
		$this->load->view('includes/footer');

	}

	
	public function about(){
		
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('pages/about');
			$this->load->view('includes/footer');

	}

	public function faq()
	{
		
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('pages/faq');
		$this->load->view('includes/footer');

	}
	
	public function contactus()
	{
		
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('pages/contact');
		$this->load->view('includes/footer');

	}

	public function readmore($id)
	{	

		$this->load->model('blog_model');
		$data['posts'] = $this->blog_model->readmore($id);

	$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('readmore',$data);
		$this->load->view('includes/footer');

	}
	public function regform(){

        $this->load->library('form_validation');//aq chaitvirta form_validaciis biblioteka
		//wesebi romelic unda gaitvaliswinos momxmareblebma registraciis dros
	    $this->form_validation->set_rules('firstname', 'Firstname', 'required|min_length[3]|max_length[25]');
	    $this->form_validation->set_rules('lastname', 'Lastname', 'required|min_length[3]|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('hide', 'hidden', 'required|min_length[5]');

	        if ( $this->form_validation->run() == FALSE ){//tu validacia warmatebit ar ganxorcieldeba
	        	$this->index();//gadaamisamartebs mtavar gverdze.index()_aris mtavari gverdi
	        }else{//tu  validacia warmatebit ganxorcieldeba gadava modelsh--->insertuser() 
	        $this->load->model('blog_model');
				$result = $this->blog_model->insertuser();
	            $this->load->view('regsuccess');
	        }
	}//End regform
	public function signin(){//aq xdeba sign_in_is dros wesebis gawera
	         	 
		$this->form_validation->set_rules('email', 'ემეილის', 'required|valid_email', 
			array(
				'required'      => 'აუცილებელია %s მითითება.'
			));
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('hide', 'hidden', 'required|min_length[5]');

		if ( $this->form_validation->run() == FALSE ){//tu vadildacias ver gaivlis gadaamisamartebs mtavar gverdze
			redirect('');
		}else{//tu sign_inis validacias warmatebit gaivlis gaaamisamrtebs modelshi
		$this->load->model('blog_model');
		$data = $this->blog_model->check_user_db();//es agzavnis modelis-->check_user_db()_shi radgan moxdes useris gadamowmeba bazashi
		}
		if ($data == 1) {// tu check_user_db daabrunes 1_s eseigi eseti momxmarebeli gvyavs bazashi da gadaamisamardebs modelis login function_shi
			$this->blog_model->login();
		}else{
			$this->session->set_flashdata('error', 'არასწორია ემაილი ან პაროლი');
			$this->index();
		}
	}
	public function logout(){
		$this->session->unset_userdata('uniqid');
		redirect('');
	}
	
	
		
		
	

}