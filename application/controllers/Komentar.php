<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	
	public function index()
	{
		$data['komentar']=$this->M_kehutanan->get_data('komentar')->result();
   		$this->load->view('template/header');
		$this->load->view('komentar/index',$data);
   		$this->load->view('template/footer');
	}
	public function profile($id)
	{
	    $where=array('id_admin'=> $id);
	    $data['admin']=$this->M_kehutanan->edit_data($where,'admin')->result();
	    
		$this->load->view('template/header');
		$this->load->view('admin/profile',$data);
   		$this->load->view('template/footer');
	}
	
    
	public function tambah_data()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$komentar=$this->input->post('komentar');

		$data=array(
				'nama' => $nama,
				'email' => $email,
				'komentar' => $komentar,
		);
		$this->M_kehutanan->insert_data($data,'komentar');
		$this->session->set_flashdata('flash', 'Data Komentar Berhasil Ditambahkan');
   		 redirect(base_url().'Komentar');
	}
	public function hapus_data($id)
  	{
    	$where=array('id' => $id);
        $this->M_kehutanan->delete_data($where,'Komentar');
        $this->session->set_flashdata('flash', 'Data Komentar Berhasil Dihapus');
        redirect('Komentar');
  	}
  	public function form_edit($id)
  	{
	    $where=array('id'=> $id);
	    $data['komentar']=$this->M_kehutanan->edit_data($where,'komentar')->result();
	    
	     $this->load->view('template/header');
	    $this->load->view('komentar/form_edit',$data);
	    $this->load->view('template/footer');
  	}
  	public function edit_data()
  	{

		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$komentar=$this->input->post('komentar');
	

		$where=array('id' => $id);

		$data=array('nama' => $nama,
					'email' => $email,
					'komentar' => $komentar);
		$this->M_kehutanan->update_data($where,$data,'komentar');
		$this->session->set_flashdata('flash', 'Data Komentar Berhasil Diubah');
		redirect('Komentar');
  	}
}