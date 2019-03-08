<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kurir extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->Model('m_kurir');
    }
	
	public function index()
	{
        if (isset($_GET['limit'])) {
            $data['list'] = $this->m_kurir->getall($_GET['limit'],$_GET['start']);            
        }else {
            $data['list'] = $this->m_kurir->getall();                        
        }
		$this->load->view('list_kurir', $data);
    }

    public function cari()
	{
        if ($_GET['cari']=="") {
            redirect(kurir);
        }else {
            $data['cari'] = $this->m_kurir->getcari($_GET['cari']);
            $this->load->view('list_kurir',$data);    
            
        }
        }


    public function edit()
	{
        $data['isi'] = $this->m_kurir->getkurir($_GET['id_kurir']);
		$this->load->view('edit_kurir',$data);
    }

    public function delete()
	{
        $this->m_kurir->delete($_GET['id_kurir']);
        redirect(kurir);

		// $this->load->view('edit_kurir',$data);
    }

    public function input()
	{
		$this->load->view('input_kurir');
    }
    
    public function prosesinput()
    {
       $id = $this->input->post('idk');
       $nama = $this->input->post('nama');
       $nohp = $this->input->post('nohp');
       $email = $this->input->post('email');

       $hasil = $this->m_kurir->inpdata($id,$nama,$nohp,$email);

       
        redirect(kurir);
       
    }

    public function prosesedit()
    {
       $id = $this->input->post('idk');
       $nama = $this->input->post('nama');
       $nohp = $this->input->post('nohp');
       $email = $this->input->post('email');

       $hasil = $this->m_kurir->edtdata($id,$nama,$nohp,$email);

       
        redirect(kurir);
       
    }
}
