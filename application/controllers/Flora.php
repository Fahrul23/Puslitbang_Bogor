<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flora extends CI_Controller {
    
  
	public function index()
	{
		  $data['tanaman']=$this->M_kehutanan->get_data('flora')->result();
    $this->load->view('template/header');
		$this->load->view('flora/index',$data);
    $this->load->view('template/footer');
	}
  public function detail($id)
  {
    $where=array('id'=> $id);
      $data['flora']=$this->M_kehutanan->edit_data($where,'flora')->row();

    $this->load->view('template/header');
    $this->load->view('flora/detail',$data);
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

   
    $nama_tanaman=$this->input->post('nama_tanaman');
    $deskripsi=$this->input->post('deskripsi');

 
    //------------------------------------------

    $data = array(
          'nama_tanaman'=>$nama_tanaman,
          'deskripsi'=>$deskripsi,
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
    $this->M_kehutanan->insert_data($data,'flora');
    
    $this->session->set_flashdata('flash', 'Data Tanaman Berhasil Ditambahkan');
    redirect(base_url().'Flora');
    
  }
	public function hapus_data($id)
  {
    	$where=array('id' => $id);
        $this->M_kehutanan->delete_data($where,'flora');
        $this->session->set_flashdata('flash', 'Data Tanaman Berhasil Dihapus');
        redirect('Flora');
  }
  public function form_edit($id)
  {
    $where=array('id'=> $id);
    $data['tanaman']=$this->M_kehutanan->edit_data($where,'flora')->result();
    
     $this->load->view('template/header');
    $this->load->view('flora/form_edit',$data);
    $this->load->view('template/footer');
  }

  public function edit_data()
  {
    $id=$this->input->post('id');
    $nama_tanaman=$this->input->post('nama_tanaman');
    $deskripsi=$this->input->post('deskripsi');

    $config = array(
            'upload_path'=>'./assets/img/upload/',
            'allowed_types'=>'jpg|png|jpeg',
            'max_size'=>2086
            );
    $where=array('id'=>$id);
    $foto = $this->M_kehutanan->edit_data($where,'flora');

    if($foto->num_rows()>0){
    
      $pros=$foto->row();
      $name=$pros->gambar;
      
    
    }

    $this->load->library('upload',$config);
    
    if($this->upload->do_upload('gambar')){

    $finfo = $this->upload->data();
    $nama_foto = $finfo['file_name'];

        $data = array(
          'nama_tanaman'=>$nama_tanaman,
          'deskripsi'=>$deskripsi,
          'gambar'=>$nama_foto  
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
          'nama_tanaman'=>$nama_tanaman,
          'deskripsi'=>$deskripsi,
           );
    }
    
    $this->M_kehutanan->update_data($where,$data,'flora');
    
    $this->session->set_flashdata('flash', 'Data Tanaman Berhasil Diubah');
    redirect('flora'); 

    

  }


}
