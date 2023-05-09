<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fastprint extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
	}

	public function index()
	{
		$page = ($this->input->get('per_page') > 1) ? $this->input->get('per_page') : 0;
		$status = $this->input->get('status');
		$count = $this->Product->count($status);
		if ($status !== null && !in_array($status, array('bisa dijual', 'tidak bisa dijual'))) {
			$status = null;
			$count = $this->Product->count();
		}
		$number = 10;
		$this->load->library('pagination');

		$config['reuse_query_string'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['base_url'] = base_url('product');
		$config['total_rows'] = $count;
		$config['per_page'] = $number;


		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$data['active'] = 'list';
		$data['product'] = ($status == null) ? $this->Product->show($number, $page) : $this->Product->show($number, $page, $status);

		return $this->t->load('product/template', 'product/show', $data);
	}

	public function save()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['active'] = 'create';
			$this->t->load('product/template', 'product/save', $data);
		} else {
			$input[] = $this->input->post();
			$this->Product->save($input);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
			redirect('product');
		}

	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['active'] = 'edit';
			$data['product'] = $this->Product->showById($id);
			$this->t->load('product/template', 'product/edit', $data);
		} else {
			$input = $this->input->post();
			$this->Product->update($id, $input);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di perbarui!</div>');
			redirect('product');
		}
	}

	public function delete($id)
	{
		$this->Product->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
		redirect('product');
	}

	public function resource()
	{
		$url = 'https://recruitment.fastprint.co.id/tes/api_tes_programmer';
		$header = get_headers($url, true);
		$username = explode(" ", $header['X-Credentials-Username']);
		$password = md5('bisacoding-' . date('d-m-y'));

		$this->load->library('HttpClient', array(
			'headers' => array(
				'Content-Type: application/x-www-form-urlencoded',
			),
			'data' => array(
				'username' => $username[0],
				'password' => $password
			),
			'url' => $url,
		));
		if ($this->httpclient->post()) {
			$result = json_decode($this->httpclient->getResults(), true);
			return $data = $result['data'];

		} else {
			return $this->httpclient->getErrorMsg();
		}
	}

	public function save_resource()
	{
		$this->db->query("DELETE FROM products");
		$datas = $this->resource();
		$input = array_map(function ($data) {
			unset($data['no']);
			unset($data['id_produk']);
			return $data;
		}, $datas);
		$this->Product->save($input);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
		redirect('product');
	}
}
