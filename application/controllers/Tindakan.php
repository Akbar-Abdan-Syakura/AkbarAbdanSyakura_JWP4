<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //load model divisi_model,nama objeknya = divisi
        $this->load->model('tindakan_model','tindakan');
    }

	public function index()
	{
        $data['datatindakan'] = $this->tindakan->getData();
		$this->load->view('tindakan/index',$data);
	}
    
    public function tambah()
    {
        $this->load->view('tindakan/tambah');
    }
    
    function tambahAksi()
    {
       //validasi server side
       $this->form_validation->set_rules('no_registrasi','No registrasi','required');
       $this->form_validation->set_rules('id_perawat','Id perawat','required');
       $this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
       $this->form_validation->set_rules('jam','Jam','required');
       $this->form_validation->set_rules('diagnosa','Diagnosa','required');
       $this->form_validation->set_rules('tindakan_keperawatan','Tindakan keperawatan','required');
       $this->form_validation->set_rules('no_ruang','No ruang','required');
       $this->form_validation->set_rules('keterangan','Keterangan','required');
       
       if($this->form_validation->run() == FALSE){
           //validasi menemukan error
           $this->load->view('tindakan/tambah');
       }else{
           //lolos validasi
           $data = [
               'no_registrasi' => $this->input->post('no_registrasi'),
               'id_perawat' => $this->input->post('id_perawat'),
               'nama_pasien' => $this->input->post('nama_pasien'),
               'jam' => $this->input->post('jam'),
               'diagnosa' => $this->input->post('diagnosa'),
               'tindakan_keperawatan' => $this->input->post('tindakan_keperawatan'),
               'no_ruang' => $this->input->post('no_ruang'),
               'keterangan' => $this->input->post('keterangan')
           ];
           $this->tindakan->insert($data);
           redirect(base_url('tindakan'));
       }
    }

    //menampilkan form edit
    function edit(){
        $id = $this->uri->segment(3);
        $data = $this->tindakan->find_by_id($id);
        $this->load->view('tindakan/edit',$data);
    }

    //menyimpan data pada form edit
    function editAksi(){
        //validasi server side
        $id = $this->input->post('no_registrasi');
        $this->form_validation->set_rules('id_perawat','Id perawat','required');
        $this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
        $this->form_validation->set_rules('jam','Jam','required');
        $this->form_validation->set_rules('diagnosa','Diagnosa','required');
        $this->form_validation->set_rules('tindakan_keperawatan','Tindakan keperawatan','required');
        $this->form_validation->set_rules('no_ruang','No ruang','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $data = $this->tindakan->find_by_id($id);
            $this->load->view('tindakan/edit',$data);
        }else{
            //lolos validasi
            $data = [
               'no_registrasi' => $this->input->post('no_registrasi'),
               'id_perawat' => $this->input->post('id_perawat'),
               'nama_pasien' => $this->input->post('nama_pasien'),
               'jam' => $this->input->post('jam'),
               'diagnosa' => $this->input->post('diagnosa'),
               'tindakan_keperawatan' => $this->input->post('tindakan_keperawatan'),
               'no_ruang' => $this->input->post('no_ruang'),
               'keterangan' => $this->input->post('keterangan')
            ];
            $this->tindakan->update($id,$data);
            redirect(base_url('tindakan'));
        }
    }

    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->tindakan->delete($id);
        redirect(base_url('tindakan'));
    }
}
