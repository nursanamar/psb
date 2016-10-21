<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class kesehatan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		if (empty($_SESSION['kesehatan'])) {
			redirect('http://localhost/psb/');
		}
		$this->load->model('modelpoli');
	}
	public function index()
	{
		$data['notif']=$this->modelpoli->ambilnotif();

		$this->load->view('poli',$data);
	}
	public function cari()
	{
		$kit=$this->input->post('kti');
		$va=$this->input->post('ket');
		$data['csba']=$this->modelpoli->ambil($kit,$va);
		$data['notif']=$this->modelpoli->ambilnotif();
		$cek=$this->modelpoli->cek($va);
		$hsl=$cek->result_array();
		if (empty($hsl)) {
			$this->load->view('poli',$data);
		} else {
			foreach ($cek->result_array() as $key) {
				$nilai=unserialize($key['kesehatan']);
				$data['nilai']=$nilai;
				$this->load->view('poli',$data);
			}
		}
		

		
	}
	public function nilaites()
	{
		$id=$this->input->post('id_csba');
		$nilai = array(
						'berat' => $this->input->post('berat') ,
						'tinggi' => $this->input->post('tinggi'),
						'tensi' => $this->input->post('tensi'),
						'rabun' => $this->input->post('rabun'),
						'buta' => $this->input->post('buta'),
						'merokok' => $this->input->post('merokok'),
						'penyakit' => $this->input->post('penyakit'),
					  );
		$serial=serialize($nilai);
		$data = array('id_csba' => $this->input->post('id_csba'),'kesehatan' => $serial, );
		$this->modelpoli->inputnilai($data);
		redirect('kesehatan');


	}
	public function coba()
	{
		$cek=$this->modelpoli->cek('CSB0002');
		$hsl=$cek->result_array();
		if (empty($hsl)) {
			echo "striaaaag"."<br>";
			print_r($cek);
		}else{
			
				echo "$hsl->kesehatan"."<br>";
				print_r($hsl);
			
		}
		print_r($cek);
	}
	public function logout()
	{
		unset($_SESSION['kesehatan']);
		unset($_SESSION['id_guru']);
		session_destroy();
		redirect('http://localhost/psb/');
	}
	public function lihatnotif($id)
	{
		$data['notif']=$this->modelpoli->ambilnotif();
		$data['isi']=$this->modelpoli->baca($id);
		$this->load->view('notifpoli',$data);
	}
}
 ?>