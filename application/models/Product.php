<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Model
{
	protected $_table = 'products';

	public function showById($id)
	{
		return $this->db->get_where($this->_table, array('id_produk' => $id))->row_array();
	}

	public function show($number = 10, $offset = 0, $status = null)
	{
		if ($status != null) {
			$this->db->where('status', $status);
		}
		return $this->db->get($this->_table, $number, $offset)->result_array();
	}

	public function save($data)
	{
		$count = count($data);
		if ($data > 1) {
			return $this->db->insert_batch($this->_table, $data);
		} else {
			return $this->db->insert($this->_table, $data);
		}
	}

	public function update($id, $data)
	{
		$this->db->where('id_produk', $id);
		return $this->db->update($this->_table, $data);
	}

	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		return $this->db->delete($this->_table);
	}

	public function count($status = null)
	{
		$this->db->from($this->_table);
		if ($status != null) {
			$this->db->where('status', $status);
		}
		return $this->db->count_all_results();
	}
}
