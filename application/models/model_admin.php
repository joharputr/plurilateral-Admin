<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	
	public function tampil_surat_masuk()
	{
		return $this->db->get('tb_surat_masuk');
	}
	public function tampil_buat_surat()
	{
		return $this->db->get('buat_surat');
	}


	public function tampil_surat_keluar()
	{
		return $this->db->get("tb_surat_keluar");
	}
		public function export_surat_keluar()
	{
		return $this->db->get("tb_surat_keluar")->result();
	}
	public function export_surat_masuk()
	{
		return $this->db->get('tb_surat_masuk')->result();
	}
	
		public function export_buat()
	{
		return $this->db->get('buat_surat')->result();
	}

	public function tampil_manage_user()
	{
		return $this->db->get("login");
	}

	public function edit_surat_masuk($id)
	{
		return $this->db->get_where('tb_surat_masuk',array('surat_id'=>$id));
	}

	public function hapus_surat_masuk($id)
	{
		return $this->db->delete('tb_surat_masuk', array('surat_id' => $id));

	}
		public function hapus_buat($id)
	{
		return $this->db->delete('buat_surat', array('id' => $id));
		
	}

	public function hapus_surat_keluar($id)
	{
		return $this->db->delete('tb_surat_keluar', array('surat_id' => $id));
	}


    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	



	public function tampil_user()
	{
		return $this->db->get('login');
	}

	public function insert_user($object)
	{
		$this->db->insert('login', $object);
	}

	public function edit_user($id)
	{
		return $this->db->get_where('login',array('id_user'=>$id));
	}

	public function update_user($id, $object)
	{
		$this->db->where('id_user', $id);
		$this->db->update('login', $object); 
	}

	public function hapus_user($id)
	{
		return $this->db->delete('login', array('id_user' => $id));
	}

	public function getWhere($table, $where){//where pake array
		$query = $this->db->get_where($table, $where);
		return $query->result();
	}

	public function semua(){
		return  $this->db->get('tb_surat_masuk');
	}

	public function semua2(){
		return  $this->db->get('tb_surat_keluar');
	}

	public function cart(){
	
	$sql = "SELECT * FROM tb_surat_keluar ORDER BY tgl_surat DESC";
	}
}
