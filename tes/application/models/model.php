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
	public function identifikasi($id)
	{
		$this->db->where('id_guru',$id);
		$this->db->select('tes');
		$this->db->from('guru');

		return $this->db->get();
	}
}
 ?>