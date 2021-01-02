<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$data['admin']=$this->M_kehutanan->get_data('admin')->result();
   		$this->load->view('template/header');
		$this->load->view('admin/index',$data);
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
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$data=array(
				'nama_admin' => $nama,
				'email' => $email,
				'username' => $username,
				'password' => $password
		);
		$this->M_kehutanan->insert_data($data,'admin');
		$this->session->set_flashdata('flash', 'Data Admin Berhasil Ditambahkan');
   		 redirect(base_url().'Admin');
	}
	public function hapus_data($id)
  	{
    	$where=array('id_admin' => $id);
        $this->M_kehutanan->delete_data($where,'admin');
        $this->session->set_flashdata('flash', 'Data Admin Berhasil Dihapus');
        redirect('admin');
  	}
  	public function form_edit($id)
  	{
	    $where=array('id_admin'=> $id);
	    $data['admin']=$this->M_kehutanan->edit_data($where,'admin')->result();
	    
	     $this->load->view('template/header');
	    $this->load->view('admin/form_edit',$data);
	    $this->load->view('template/footer');
  	}
  	public function edit_data()
  	{

		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
	

		$where=array('id_admin' => $id);

		$data=array('nama_admin' => $nama,
					'email' => $email,
					'username' => $username,
					'password' => $password);
		$this->M_kehutanan->update_data($where,$data,'admin');

		$this->session->set_flashdata('flash', 'Data Komentar Berhasil Diubah');
		redirect('Admin');
  	}
}