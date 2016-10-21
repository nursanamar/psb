<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class mwacara extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function ambilnotif()
	{
		$this->db->where('untuk','umun');
		$this->db->or_where('untuk','guru');
		$this->db->select('*');
		$this->db->from('notif');

		return $this->db->get();
	}
	public function ambil($kit,$va)
		{
			$this->db->where($kit,$va);
			$this->db->select("*");
			$this->db->from("csba");
			$this->db->join("orang_tua","csba.id_csba = orang_tua.id_csba");
			$this->db->join("wali","csba.id_csba = wali.id_csba");
			$this->db->join("pilihan_jurusan","csba.id_csba = pilihan_jurusan.id_csba");

			return $this->db->get();

		}
	public function cek($id,$kolom)
	{
		$this->db->where('id_csba',$id);
		$this->db->select($kolom);
		$this->db->from('tes');

		return $this->db->get();
	}
	public function update($id,$data)
	{
		$this->db->where('id_csba',$id);
		$this->db->update('tes',$data);
	}
	public function baca($id)
	{
		$this->db->where('id_notif',$id);
		$this->db->select('*');
		$this->db->from('notif');

		return $this->db->get();
	}
}
 ?>