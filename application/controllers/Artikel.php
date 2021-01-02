<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    
	public function index()
	{
		$data['artikel']=$this->M_kehutanan->get_data('artikel')->result();
   		$this->load->view('template/header');
		$this->load->view('artikel/index',$data);
   		$this->load->view('template/footer');
	}
  public function detail($id)
  {
    $where=array('id'=> $id);
      $data['artikel']=$this->M_kehutanan->edit_data($where,'artikel')->row();

    $this->load->view('template/header');
    $this->load->view('artikel/detail',$data);
    $this->load->view('template/footer');
  }
	function tambah_data(){
    $config = array(
            'upload_path'=>'./assets/img/upload',
            'allowed_types'=>'jpg|png|jpeg',
            'max_size'=>2086
            );
    $this->load->library('upload',$config);
    $this->upload->do_upload('gambar');

    $finfo = $this->upload->data(
    );
    $nama_foto = $finfo['file_name'];

   
    $judul_artikel=$this->input->post('judul_artikel');
    $deskripsi=$this->input->post('deskripsi');
    $tanggal=$this->input->post('tanggal');

 
    //------------------------------------------

    $data = array(
          'judul'=>$judul_artikel,
          'deskripsi'=>$deskripsi,
          'tanggal'=>$tanggal,
          'gambar'=>$nama_foto  
            );

    $config2 = array(
        'source_image'=>'assets/img/uploads/'.$nama_foto,
        'image_library'=>'gd2',
        'new_image'=>'assets/img/uploads/thumbnail',
        'maintain_ratio'=>true,
        'width'=>300,
        'height'=>200
      );
    $this->load->library('image_lib',$config2);
    $this->image_lib->resize();
    $this->M_kehutanan->insert_data($data,'artikel');
    
    $this->session->set_flashdata('flash', 'Data Artikel Berhasil Ditambahkan');
    redirect(base_url().'Artikel');
    
  }
	public function hapus_data($id)
  {
    	$where=array('id' => $id);
        $this->M_kehutanan->delete_data($where,'artikel');
        $this->session->set_flashdata('flash', 'Data Artikel Berhasil Dihapus');
        redirect('artikel');
  }
  public function form_edit($id)
  {
    $where=array('id'=> $id);
    $data['artikel']=$this->M_kehutanan->edit_data($where,'artikel')->result();
    
     $this->load->view('template/header');
    $this->load->view('artikel/form_edit',$data);
    $this->load->view('template/footer');
  }
   public function edit_data()
  {
    $id=$this->input->post('id');
    $judul_artikel=$this->input->post('judul_artikel');
    $deskripsi=$this->input->post('deskripsi');
    $tanggal=$this->input->post('tanggal');

    $config = array(
            'upload_path'=>'./assets/img/upload/',
            'allowed_types'=>'jpg|png|jpeg',
            'max_size'=>2086
            );
    $where=array('id'=>$id);
    $foto = $this->M_kehutanan->edit_data($where,'artikel');

    if($foto->num_rows()>0){
    
      $pros=$foto->row();
      $name=$pros->gambar;
      
      }

    $this->load->library('upload',$config);
    
    if($this->upload->do_upload('gambar')){

    $finfo = $this->upload->data();
    $nama_foto = $finfo['file_name'];

        $data = array(
          'judul'=>$judul_artikel,
          'gambar'=>$nama_foto,  
          'tanggal'=>$tanggal,  
          'deskripsi'=>$deskripsi
            );


    $config2 = array(
        'source_image'=>'assets/img/upload/'.$nama_foto,
        'image_library'=>'gd2',
        'new_image'=>'assets/img/upload/thumbnail',
        'maintain_ratio'=>true,
        'width'=>300,
        'height'=>200
      );
    
    $this->load->library('image_lib',$config2);
    $this->image_lib->resize();   
    
    }else{

        $data = array(
          'judul'=>$judul_artikel,
          'tanggal'=>$tanggal,
          'deskripsi'=>$deskripsi,
           );
    }
    
    $this->M_kehutanan->update_data($where,$data,'artikel');
    
    $this->session->set_flashdata('flash', 'Data Artikel Berhasil Diubah');
    redirect('artikel'); 

    

  }
}