<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function ambil($va)
		{
			$this->db->where('csba.id_csba',$va);
			$this->db->select("*");
			$this->db->from("csba");
			$this->db->join("orang_tua","csba.id_csba = orang_tua.id_csba");
			$this->db->join("wali","csba.id_csba = wali.id_csba");
			$this->db->join("pilihan_jurusan","csba.id_csba = pilihan_jurusan.id_csba");

			return $this->db->get();

		}
		public function update($id,$data)
		{
			$this->db->where("id_csba",$id);
			$this->db->update('csba',$data);
		}
		public function ambilnotif()
		{
			$this->db->where('untuk','csb');
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
	}
 ?>