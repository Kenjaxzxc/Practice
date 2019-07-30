<?php 
class Project extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('projectmodel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('Login');
	}


	public function verify()
	{
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()) {	
				$check = $this->projectmodel->validate();
				$username = $this->input->post('username'); 
				if ($check) {
					$session_data = array('username' => $username);
					$this->session->set_userdata($session_data);
					redirect('project/dashboard');
				}else{
					$this->session->set_tempdata('err_message', 'Invalid Username or Password!', 1);
					redirect('project');
				}
		}else{
			$this->session->set_tempdata('err_message', validation_errors(), 1);
			redirect('project');
		}

	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}


}

?>
