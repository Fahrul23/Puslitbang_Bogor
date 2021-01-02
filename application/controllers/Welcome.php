<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('username', 'Username', 'Required');
        $this->form_validation->set_rules('password', 'Password', 'Required');

        if ($this->form_validation->run() != false) {
            $where = array('username' => $username, 'password' => $password);

            $data = $this->M_kehutanan->edit_data($where, 'admin');
            $d = $this->M_kehutanan->edit_data($where, 'admin')->row();
            $cek = $data->num_rows();
            if ($cek > 0) {
                $session = array('id_admin' => $d->id_admin, 'nama_admin' => $d->nama_admin, 'status' => 'login');
                $this->session->set_userdata($session);
                redirect(base_url('dashboard'));
            } else {

                $this->session->set_flashdata('flash', 'Maaf Username dan Password Salah');
                redirect(base_url() . 'welcome');
            }
        }
    }
     function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
