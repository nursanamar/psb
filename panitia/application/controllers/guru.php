<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class guru extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->session->id=$_SESSION['id'];
		$id=$this->session->id;
		$tabel["id"]=$id;
		if (empty($id)) {
			redirect('http://localhost/psb/');
		}
		$this->load->model('modelguru');
	}
	public function index()
	{
		
	}
}
 ?>