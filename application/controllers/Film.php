<?php

class Film extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Film_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Film';
        $data['film'] = $this->Film_model->getAllFilm();
        if( $this->input->post('keyword') ) {
            $data['tb_daftarfilm'] = $this->Film_model->cariDataFilm();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('film/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Film';

        $this->form_validation->set_rules('judul_film', 'JUDUL', 'required');
        $this->form_validation->set_rules('genre', 'GENRE', 'required');
        $this->form_validation->set_rules('tahun', 'TAHUN', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('film/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Film_model->tambahDataFilm();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('film');
        }
    }

    public function hapus($id)
    {
        $this->Film_model->hapusDataFilm($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('film');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Film';
        $data['film'] = $this->Film_model->getFilmById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('film/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Film';
        $data['film'] = $this->Film_model->getFilmById($id);
    
        
        $this->form_validation->set_rules('judul_film', 'JUDUL', 'required');
        $this->form_validation->set_rules('genre', 'GENRE', 'required');
        $this->form_validation->set_rules('tahun', 'TAHUN', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('film/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Film_model->ubahDataFilm();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('film');
        }
    }

}
