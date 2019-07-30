<?php 
class Projectmodel extends CI_Model{


	 function validate()
	{
		$arr['username'] = $this->input->post('username'); 
		$arr['password'] = $this->input->post('password');
		return $this->db->get_where('user',$arr)->row();
	}


}

?>
