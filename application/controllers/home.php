<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['kategori'] = $this->Home_model->get_kategori();
        $this->load->view('kategori/home', $data);
    }

    public function tambah()
    {
        if ($_POST) {
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori')
            ];
            $this->Home_model->insert_kategori($data);
            redirect('home');
        } else {
            $this->load->view('kategori/tambah');
        }
    }

    public function edit($id_kategori)
    {
        $kategori = $this->Home_model->get_kategori_by_id($id_kategori);
        if ($this->input->post()) {
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori')
            ];
            $this->Home_model->update_kategori($id_kategori, $data);
            redirect('home');
        }
        $data['title'] = 'Edit Kategori';
        $data['kategori'] = $kategori;
        $this->load->view('kategori/edit', $data);
    }


    public function update_kategori($id_kategori, $nama_kategori)
    {
        $data = [
            'nama_kategori' => $nama_kategori
        ];
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->update('kategori', $data);
    }

    public function delete($id)
    {
        $this->Home_model->delete_kategori($id);
        redirect('home');
    }
}
