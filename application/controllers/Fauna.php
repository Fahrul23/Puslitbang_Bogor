<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fauna extends CI_Controller {
    

	public function index()
	{
		$data['fauna']=$this->M_kehutanan->get_data('fauna')->result();
    $this->load->view('template/header');
		$this->load->view('Fauna/index',$data);
    $this->load->view('template/footer');
	}
  public function detail($id)
  {
    $where=array('id'=> $id);
      $data['fauna']=$this->M_kehutanan->edit_data($where,'fauna')->row();

    $this->load->view('template/header');
    $this->load->view('fauna/detail',$data);
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

   
    $nama_binatang=$this->input->post('nama_binatang');
    $deskripsi=$this->input->post('deskripsi');

 
    //------------------------------------------

    $data = array(
          'nama_binatang'=>$nama_binatang,
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
    $this->M_kehutanan->insert_data($data,'fauna');
    
    $this->session->set_flashdata('flash', 'Data Fauna Berhasil Ditambahkan');
    redirect(base_url().'Fauna');
    
  }
	public function hapus_data($id)
  {
    	$where=array('id' => $id);
        $this->M_kehutanan->delete_data($where,'fauna');
        $this->session->set_flashdata('flash', 'Data Fauna Berhasil Dihapus');
        redirect('Fauna');
  }
  public function form_edit($id)
  {
    $where=array('id'=> $id);
    $data['Fauna']=$this->M_kehutanan->edit_data($where,'fauna')->result();
    
     $this->load->view('template/header');
    $this->load->view('fauna/form_edit',$data);
    $this->load->view('template/footer');
  }
   public function edit_data()
  {
    $id=$this->input->post('id');
    $nama_binatang=$this->input->post('nama_binatang');
    $deskripsi=$this->input->post('deskripsi');

    $config = array(
            'upload_path'=>'./assets/img/upload/',
            'allowed_types'=>'jpg|png|jpeg',
            'max_size'=>2086
            );
    $where=array('id'=>$id);
    $foto = $this->M_kehutanan->edit_data($where,'fauna');

    if($foto->num_rows()>0){
    
      $pros=$foto->row();
      $name=$pros->gambar;
      
      }

    $this->load->library('upload',$config);
    
    if($this->upload->do_upload('gambar')){

    $finfo = $this->upload->data();
    $nama_foto = $finfo['file_name'];

        $data = array(
          'nama_binatang'=>$nama_binatang,
          'gambar'=>$nama_foto,  
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
          'nama_binatang'=>$nama_binatang,
          'deskripsi'=>$deskripsi,
           );
    }
    
    $this->M_kehutanan->update_data($where,$data,'fauna');
    
    $this->session->set_flashdata('flash', 'Data Tanaman Berhasil Diubah');
    redirect('fauna'); 

    

  }

  

}
