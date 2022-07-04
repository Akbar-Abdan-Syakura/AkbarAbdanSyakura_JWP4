<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model divisi_model,nama objeknya = divisi
        $this->load->model('pasien_model', 'pasien');
    }

    public function index()
    {
        $data['datapasien'] = $this->pasien->getData();
        $this->load->view('pasien/index', $data);
    }

    public function tambah()
    {
        $this->load->view('pasien/tambah');
    }

    function tambahAksi()
    {
        //validasi server side
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        if ($this->form_validation->run() == FALSE) {
            //validasi menemukan error
            $this->load->view('pasien/tambah');
        } else {
            //lolos validasi
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'ttl' => $this->input->post('ttl'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];
            $this->pasien->insert($data);
            redirect(base_url('pasien'));
        }
    }

    //menampilkan form edit
    function edit()
    {
        $id = $this->uri->segment(3);
        $data = $this->pasien->find_by_id($id);
        $this->load->view('pasien/edit', $data);
    }

    //menyimpan data pada form edit
    function editAksi()
    {
        //validasi server side
        $id = $this->input->post('no_rm');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        if ($this->form_validation->run() == FALSE) {
            //validasi menemukan error
            $data = $this->pasien->find_by_id($id);
            $this->load->view('pasien/edit', $data);
        } else {
            //lolos validasi
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'ttl' => $this->input->post('ttl'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];
            $this->pasien->update($id, $data);
            redirect(base_url('pasien'));
        }
    }

    function hapus()
    {
        $id = $this->uri->segment(3);
        $this->pasien->delete($id);
        redirect(base_url('pasien'));
    }
}
