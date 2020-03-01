<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BookingM');
    }
    

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'booking' => $this->BookingM->getBookingByPasien($this->session->userdata('email')),
        ];
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('pasien/dashboard');
        $this->load->view('layout/footer');
    }

}

/* End of file Dokter.php */
