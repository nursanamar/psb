<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
if (empty($_SESSION['id_pnt'])) {
	header('http://localhost/psb/');
}
class da extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->session->id=$_SESSION['id_pnt'];
		$id=$this->session->id;
		$tabel["id"]=$id;
		if (empty($id)) {
			redirect('http://localhost/psb/');
		}
		$this->load->model("model");
		$data['id']=$_SESSION['id_pnt'];
	}

	public function index()
	{
		$data['siswa']=$this->model->semua();

		$this->load->view('panitia',$data);
	}
	public function loguot()
	{
		unset($_SESSION['id_pnt']);
		redirect('http://localhost/psb/panitia');
	}
	public function coba()
	{
		$data['siswa']=$this->model->csba();
		$this->load->view('coba',$data);
	}
	public function alih()
	{
		redirect('http://localhost/psb/panitia/index.php/da/coba');
	}
	public function cari()
	{
		$va=$this->input->post('va');
		$kti=$this->input->post('kti');
		$data['siswa']=$this->model->berda($va,$kti);
		$this->load->view('panitia',$data);
	}
	public function lihat($id)
	{
		$data['siswa']=$this->model->berda($id,'csba.id_csba');
		$this->load->view('lihat',$data);
	}
	public function veri($id)
	{
		$data=array(
			'status'=>"Terverifikasi",
			);
		$this->model->verifi($id,$data);
		redirect('da');
	}
	public function notif()
	{
		$data['siswa']=$this->model->ambilnotif();
		$this->load->view('pengumuman',$data);
	}
	public function lihatnotif($id)
	{
		$data['itu']=$this->model->lihatnotif($id);
		$this->load->view('lihatnotif',$data);
	}
	public function update()
	{
		$id=$this->input->post('id_csba');
		$data = array('nama' => $this->input->post('nama'), 'tt_lahir' => $this->input->post('ttlhr'),'tgl_lahir' => $this->input->post('tgl'),'klmin' => $this->input->post('kelamin'),'agama' => $this->input->post('Agama'),'warganegara' => $this->input->post('wn'),'alamat' => $this->input->post('alamat'),'sekolah_asal' => $this->input->post('aslsklh'),'alamat_sklhasl' => $this->input->post('almasklh'),
			);
		$orangtua = array('ayah' => $this->input->post('ayah'),'ibu'=> $this->input->post('ibu'),'tgl_ayah'=>$this->input->post('tgl_ayah'),'tgl_ibu'=>$this->input->post('tgl_ibu'),'alamat_ayah'=>$this->input->post('alamat_ayah'),'pendidikan_ayah'=>$this->input->post('pndkn_ayah'),'pendidikan_ibu'=>$this->input->post('pndkn_ibu'),
		 );
		$wali = array('nama_wali' => $this->input->post('wali'),'tgl'=>$this->input->post('tgl_wali'),'alamat'=>$this->input->post('alamat_wali'),'pendidikan'=>$this->input->post('pndkn_wali'),
		 );
		$this->model->updatecsba($data,$id);
		$this->model->updateorantua($orangtua,$id);
		$this->model->updatewali($wali,$id);
		redirect('da');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
