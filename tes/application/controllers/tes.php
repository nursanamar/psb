<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class tes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		if (empty($_SESSION['id_guru'])) {
				redirect('http://localhost/psb/');
			}
		$this->load->model('model');	
	}
	public function index()
	{
		$id=$_SESSION['id_guru'];
		$tes=$this->model->identifikasi($id);
		foreach ($tes->result() as $key) {

		}
		switch ($key->tes) {
			case 'wawancara':
				$_SESSION['wawancara']=$id;
				redirect(base_url().'index.php/wawancara');
				break;
			case 'mengaji':
				$_SESSION['mengaji']=$id;
				redirect(base_url().'index.php/mengaji');
				break;
			case 'kesehatan':
				$_SESSION['kesehatan']=$id;
				redirect(base_url().'index.php/kesehatan');
				break;
			default:
				# code...
				break;
		}
	}
}
?>