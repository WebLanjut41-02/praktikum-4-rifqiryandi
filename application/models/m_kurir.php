<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kurir extends CI_Model {

	public function getall($limit = 5,$start = 0)
    {
        $this->db->from('tb_kurir');
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();
    }

    public function getkurir($id)
    {
        $this->db->from('tb_kurir');
        $this->db->where('id_kurir',$id);

        // $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->row();
    }

    public function getcari($id)
    {
        $this->db->from('tb_kurir');
        $this->db->like('nama_kurir',$id);

        // $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();
    }

    public function inpdata($id,$nama,$nohp,$email)
    {
        $data = array(
            'id_kurir' => $id,
            'nama_kurir' => $nama,
            'no_hp' => $nohp,
            'email' => $email
        );

        $this->db->insert('tb_kurir',$data);
    }

    public function edtdata($id,$nama,$nohp,$email)
    {
        $data = array(
            
            'nama_kurir' => $nama,
            'no_hp' => $nohp,
            
        );
        $this->db->where('id_kurir',$id);
        $this->db->update('tb_kurir',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_kurir',$id)->delete('tb_kurir');
    }
}
