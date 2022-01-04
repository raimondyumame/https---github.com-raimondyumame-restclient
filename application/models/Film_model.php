<?php 

class Film_model extends CI_model {
    public function getAllFilm()
    {
        return $this->db->get('tb_daftarfilm')->result_array();
    }

    public function tambahDataFilm()
    {
        $data = [
            "judul_film" => $this->input->post('judul_film', true),
            "genre" => $this->input->post('genre', true),
            "tahun" => $this->input->post('tahun', true)
        ];

        $this->db->insert('tb_daftarfilm', $data);
    }

    public function hapusDataFilm($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tb_daftarfilm', ['id' => $id]);
    }

    public function getFilmById($id)
    {
        return $this->db->get_where('tb_daftarfilm', ['id' => $id])->row_array();
    }

    public function ubahDataFilm()
    {
        $data = [
          
            "judul_film" => $this->input->post('judul_film', true),
            "genre" => $this->input->post('genre', true),
            "tahun" => $this->input->post('tahun', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_daftarfilm', $data);
    }

    public function cariDataFilm()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('judul_film', $keyword);
        $this->db->or_like('genre', $keyword);
        $this->db->or_like('tahun', $keyword);
        return $this->db->get('tb_daftarfilm')->result_array();
    }
}