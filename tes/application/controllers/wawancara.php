<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class wawancara extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		if (empty($_SESSION['wawancara'])) {
				redirect(base_url());
			}
		$this->load->model('mwacara');
	}
	public function index()
	{
		$data['notif']=$this->mwacara->ambilnotif();
		$this->load->view('wawancara',$data);

	}
	public function cari()
	{
		$kit=$this->input->post('kti');
		$va=$this->input->post('ket');
		$data['csba']=$this->mwacara->ambil($kit,$va);
		$data['notif']=$this->mwacara->ambilnotif();
		$cek=$this->mwacara->cek($va,'kesehatan');
		$hsl=$cek->result_array();
		if (empty($hsl)) {
			$this->load->view('wawancara',$data);
		} else {
			foreach ($cek->result_array() as $key) {
				$nilai=unserialize($key['kesehatan']);
				$data['nilai']=$nilai;
			}
		}
		$cekwacara=$this->mwacara->cek($va,'wawancara');
		$reswacara=$cekwacara->result_array();
		$data['coba']=$cekwacara;
		$data['coba2']=$reswacara;
		$data['coba3']=$cek;
		if (empty($reswacara)) {
			$this->load->view('wawancara',$data);
		} else {
			$data['wacara']=$this->mwacara->cek($va,'wawancara');				
			$this->load->view('wawancara',$data);
		}
			
			
		

		
	}
	public function inputnilai()
	{
		$id=$this->input->post('id_csba');
		$nilai = array('wawancara' => $this->input->post('nilaites'), );
		$this->mwacara->update($id,$nilai);
		redirect('wawancara');
	}
	public function lihatnotif($id)
	{
		$data['notif']=$this->mwacara->ambilnotif();
		$data['isi']=$this->mwacara->baca($id);
		$this->load->view('notifpoli',$data);
	}
	public function logout()
	{
		unset($_SESSION['wawancara']);
		unset($_SESSION['id_guru']);
		session_destroy();
		redirect(base_url());
	}
}
 ?>