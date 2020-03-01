<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DokterM');
    }
    

    public function index()
    {
            
    }

    public function list_dokter()
    {
        $data = [
                'title' => 'List Dokter',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'dokter' => $this->DokterM->getDokter()
            ];
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('layout/topbar');
            $this->load->view('dokter/list');
            $this->load->view('layout/footer');
    }

}

/* End of file Dokter.php */
