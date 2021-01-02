<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['komentar']=$this->M_kehutanan->get_data_limit('id','komentar',2)->result();
		$data['komentar2']=$this->M_kehutanan->get_data_asc('id','komentar',1)->result();
		$this->load->view('frontend/header');
		$this->load->view('index.php',$data);
		$this->load->view('frontend/footer');
	}
	public function tentang_kami()
	{
		$this->load->view('frontend/header');
		$this->load->view('tentang_kami');
		$this->load->view('frontend/footer');
	}
	public function kontak_kami()
	{
		$this->load->view('frontend/header');
		$this->load->view('kontak_kami');
		$this->load->view('frontend/footer');
	}
	public function galeri()
	{
		$data['fauna']=$this->M_kehutanan->get_data('fauna')->result();

		$data['flora']=$this->M_kehutanan->get_data('flora')->result();
	
		$this->load->view('frontend/header');
		$this->load->view('galeri',$data);
		$this->load->view('frontend/footer');
	}
	public function artikel()
	{
		// load library
		$this->load->library('pagination');

		//config

		$config['base_url']='http://localhost/puslitbang/Home/artikel';
		$config['total_rows']=$this->M_kehutanan->countData('artikel');
		$config['per_page']=4;

		// styling
		$config['full_tag_open']='<nav aria-label="Page navigation"><ul class="pagination">';
		$config['full_tag_close']='</ul></nav>';

		$config['first_link']='First';
		$config['first_tag_open']='<li class="page-item">';
		$config['first_tag_close']='</li>';


		$config['last_link']='Last';
		$config['last_tag_open']='<li class="page-item">';
		$config['last_tag_close']='</li>';


		$config['next_link']='&raquo';
		$config['next_tag_open']='<li class="page-item">';
		$config['next_tag_close']='</li>';

		$config['prev_link']='&laquo';
		$config['prev_tag_open']='<li class="page-item">';
		$config['prev_tag_close']='</li>';


		$config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']='</a></li>';


		$config['num_tag_open']='<li class="page-item">';
		$config['num_tag_close']='</li>';

		$config['attributes']=array('class' => 'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start']=$this->uri->segment(3);
		$data['artikel']=$this->M_kehutanan->get_data_paginate('artikel',$config['per_page'],$data['start'])->result();
		

		$data['artikel2']=$this->M_kehutanan->get_data_limit('id','artikel',5)->result();
		$this->load->view('frontend/header');
		$this->load->view('artikel',$data);
		$this->load->view('frontend/footer');
	}
	public function komentar()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$komentar=$this->input->post('komentar');

		$data=array(
				'nama' => $nama,
				'email' => $email,
				'komentar' => $komentar
		);
		$this->M_kehutanan->insert_data($data,'komentar');
		$this->session->set_flashdata('flash', 'Terimakasi atas pendapat yang anda sampaikan');
   		 redirect(base_url().'home');
	}

	public function detail_flora($id)
	{
	    $where=array('id'=> $id);
	    $data['flora']=$this->M_kehutanan->edit_data($where,'flora')->row();

		$this->load->view('frontend/header');
		$this->load->view('detail_flora',$data);
		$this->load->view('frontend/footer');
	}
	public function detail_fauna($id)
	{
	    $where=array('id'=> $id);
	    $data['fauna']=$this->M_kehutanan->edit_data($where,'fauna')->row();

		$this->load->view('frontend/header');
		$this->load->view('detail_fauna',$data);
		$this->load->view('frontend/footer');
	}
	public function detail_artikel($id)
	{
	    $where=array('id'=> $id);
	    $data['artikel']=$this->M_kehutanan->edit_data($where,'artikel')->row();
		$data['artikel2']=$this->M_kehutanan->get_data_limit('id','artikel',5)->result();

		$this->load->view('frontend/header');
		$this->load->view('detail_artikel',$data);
		$this->load->view('frontend/footer');
	}
	

}