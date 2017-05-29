<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*
*/
class csba extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		session_start();
		$this->session->id=$_SESSION['id_csb'];
		$id=$this->session->id;
		$tabel["id"]=$id;
		if (empty($id)) {
			redirect(DOMAIN);
		}
		$this->load->model("model");
		$data['id']=$_SESSION['id_csb'];
	}
	public function index()
	{
		$id=$_SESSION['id_csb'];
		$data['diri']=$this->model->ambil($id);
		$data['notif']=$this->model->ambilnotif();
		$this->load->view('csba',$data);
	}
	public function updatepass()
	{
		$id=$_SESSION['id_csb'];
		$data = array('pass' => $this->input->post('pass'), );
		$this->model->update($id,$data);
		redirect('csba');
	}
	public function logout()
	{
		unset($_SESSION['id_csb']);
		session_destroy();
		redirect(DOMAIN);
	}
	public function lihatnotif($id)
	{
		$data['notif']=$this->model->ambilnotif();
		$data['isi']=$this->model->lihatnotif($id);
		$this->load->view('notif',$data);
	}
}
 ?>
