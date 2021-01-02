<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    

	public function index()
	{
		$data['admin']=$this->M_kehutanan->get_data_limit('id_admin','admin',4)->result();
		$data['artikel']=$this->M_kehutanan->get_data_limit('id','artikel',4)->result();

	    $this->load->view('template/header');
		$this->load->view('dashboard/index',$data);
	    $this->load->view('template/footer');
	
	}

}
