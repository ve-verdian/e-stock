<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_barmas extends CI_Model
{

    public $table = 'tb_barang_masuk';
    public $id = 'id_transaksi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
		$this->db->like('id_transaksi', $q);
		$this->db->or_like('tanggal', $q);
		$this->db->or_like('divisi', $q);
		$this->db->or_like('kode_barang', $q);
		$this->db->or_like('nama_barang', $q);
		$this->db->or_like('jumlah', $q);
		$this->db->or_like('satuan', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
		$this->db->order_by($this->id, $this->order);
		$this->db->like('id_transaksi', $q);
		$this->db->or_like('tanggal', $q);
		$this->db->or_like('divisi', $q);
		$this->db->or_like('kode_barang', $q);
		$this->db->or_like('nama_barang', $q);
		$this->db->or_like('jumlah', $q);
		$this->db->or_like('satuan', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
	
    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
?>
