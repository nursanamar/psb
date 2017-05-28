<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
	/**
	*
	*/
	class model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();

		}
		public function semua($page = 1)
		{
			$to = 20;
			$from = ($page > 1)? ($page - 1) * $to: 0;
			$this->db->select("*");
			$this->db->from("csba");
			$this->db->join("orang_tua","csba.id_csba = orang_tua.id_csba");
			$this->db->join("wali","csba.id_csba = wali.id_csba");
			$this->db->join("pilihan_jurusan","csba.id_csba = pilihan_jurusan.id_csba");
			$this->db->limit($to,$from);
			//$this->db->join("no_tes","csba.id_csba = no_tes.id_csba");

			return $this->db->get();
		}
		public function csba()
		{
			$this->db->select('*');
			$this->db->from("csba");

			return $this->db->get();
		}
		public function berda($va,$kti)
		{
			$this->db->where($kti,$va);
			$this->db->select("*");
			$this->db->from("csba");
			$this->db->join("orang_tua","csba.id_csba = orang_tua.id_csba");
			$this->db->join("wali","csba.id_csba = wali.id_csba");
			$this->db->join("pilihan_jurusan","csba.id_csba = pilihan_jurusan.id_csba");

			return $this->db->get();

		}
		public function verifi($id,$data)
		{
			$this->db->where("id_csba",$id);
			$this->db->update('csba',$data);
		}
		public function ambilnotif()
		{
			$untuk=array('panitia','umum');
			$this->db->where('untuk','panitia');
			$this->db->or_where('untuk','umun');
			$this->db->select('*');
			$this->db->from('notif');

			return $this->db->get();
		}
		public function lihatnotif($id)
		{
			$this->db->where('id_notif',$id);
			$this->db->select('*');
			$this->db->from('notif');

			return $this->db->get();
		}
		public function updatecsba($data,$id)
		{
			$this->db->where('id_csba',$id);
			$this->db->update('csba',$data);
		}
		public function updateorantua($data,$id)
		{
			$this->db->where('id_csba',$id);
			$this->db->update('orang_tua',$data);
		}
		public function updatewali($data,$id)
		{
			$this->db->where('id_csba',$id);
			$this->db->update('wali',$data);
		}
		public function idtes()
		{
			$this->db->select('id_tes');
			$this->db->from('no_tes');
			$this->db->order_by('id_tes','desc');

			return $this->db->get();
		}
		public function insertidtes($data)
		{
			$this->db->insert('no_tes',$data);
		}
	}
 ?>
