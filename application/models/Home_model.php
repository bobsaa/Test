<?php

class Home_model extends CI_Model
{
    public function get_kategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function insert_kategori($data)
    {
        return $this->db->insert('kategori', $data);
    }

    public function get_kategori_by_id($id_kategori)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row();
    }

    public function update_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    public function delete_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->delete('kategori');
    }
}
