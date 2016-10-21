<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class mengaji extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		if (empty($_SESSION['mengaji'])) {
			redirect(base_url());
		}
		$this->load->model('mmengaji');
	}
	public function index()
	{
		$data['notif']=$this->mmengaji->ambilnotif();
		$this->load->view('mengaji',$data);

	}
	public function cari()
	{
		$kit=$this->input->post('kti');
		$va=$this->input->post('ket');
		$data['csba']=$this->mmengaji->ambil($kit,$va);
		$data['notif']=$this->mmengaji->ambilnotif();
		$cek=$this->mmengaji->cek($va,'kesehatan');
		$hsl=$cek->result_array();
		if (empty($hsl)) {
			$this->load->view('mengaji',$data);
		} else {
			foreach ($cek->result_array() as $key) {
				$nilai=unserialize($key['kesehatan']);
				$data['nilai']=$nilai;
			}
		}
		$cekwacara=$this->mmengaji->cek($va,'mengaji');
		$reswacara=$cekwacara->result_array();
		$data['coba']=$cekwacara;
		$data['coba2']=$reswacara;
		$data['coba3']=$cek;
		if (empty($reswacara)) {
			$this->load->view('mengaji',$data);
		} else {
			$data['wacara']=$this->mmengaji->cek($va,'mengaji');				
			$this->load->view('mengaji',$data);
		}
			
			
		

		
	}
	public function inputnilai()
	{
		$id=$this->input->post('id_csba');
		$nilai = array('mengaji' => $this->input->post('nilaites'), );
		$this->mmengaji->update($id,$nilai);
		redirect('mengaji');
	}
	public function lihatnotif($id)
	{
		$data['notif']=$this->mmengaji->ambilnotif();
		$data['isi']=$this->mmengaji->baca($id);
		$this->load->view('notifpoli',$data);
	}
	public function logout()
	{
		unset($_SESSION['mengaji']);
		unset($_SESSION['id_guru']);
		session_destroy();
		redirect(base_url());
	}
}
 ?>