<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //load model divisi_model,nama objeknya = divisi
        $this->load->model('perawat_model','perawat');
    }

	public function index()
	{
        $data['dataperawat'] = $this->perawat->getData();
		$this->load->view('perawat/index',$data);
	}
    
    public function tambah()
    {
        $this->load->view('perawat/tambah');
    }
    
    function tambahAksi()
    {
       //validasi server side
       $this->form_validation->set_rules('id_poliklinik','id poliklinik','required');
       $this->form_validation->set_rules('nama','Nama','required');
       $this->form_validation->set_rules('alamat','Alamat','required');
       $this->form_validation->set_rules('tgl_lahir','tgl lahir','required');
       if($this->form_validation->run() == FALSE){
           //validasi menemukan error
           $this->load->view('perawat/tambah');
       }else{
           //lolos validasi
           $data = [
               'id_poliklinik' => $this->input->post('id_poliklinik'),
               'nama' => $this->input->post('nama'),
               'alamat' => $this->input->post('alamat'),
               'tgl_lahir' => $this->input->post('tgl_lahir')
           ];
           $this->perawat->insert($data);
           redirect(base_url('perawat'));
       }
    }

    //menampilkan form edit
    function edit(){
        $id = $this->uri->segment(3);
        $data = $this->perawat->find_by_id($id);
        $this->load->view('perawat/edit',$data);
    }

    //menyimpan data pada form edit
    function editAksi(){
        //validasi server side
        $id = $this->input->post('id_perawat');
       $this->form_validation->set_rules('id_poliklinik','id poliklinik','required');
       $this->form_validation->set_rules('nama','Nama','required');
       $this->form_validation->set_rules('alamat','Alamat','required');
       $this->form_validation->set_rules('tgl_lahir','tgl lahir','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $data = $this->perawat->find_by_id($id);
            $this->load->view('perawat/edit',$data);
        }else{
            //lolos validasi
            $data = [
                'id_poliklinik' => $this->input->post('id_poliklinik'),
               'nama' => $this->input->post('nama'),
               'alamat' => $this->input->post('alamat'),
               'tgl_lahir' => $this->input->post('tgl_lahir')
            ];
            $this->perawat->update($id,$data);
            redirect(base_url('perawat'));
        }
    }

    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->perawat->delete($id);
        redirect(base_url('perawat'));
    }
}
