<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Calculate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
	//$data['header']=$this->load->view('backend/header');
	//
	//$data['content']=$this->load->view('backend/form');
	//$data['header']=$this->load->view('backend/header');
	//$data['menu_kiri']=$this->load->view('backend/menu_kiri');
	$this->load->view('uwcal');
	//redirect ('calculate/uwcalc');
	//$this->load->view('/backend/main',$data);
	}
	
	
	public function uwcalc()
	{
	
	$this->load->view('uwcal');
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */